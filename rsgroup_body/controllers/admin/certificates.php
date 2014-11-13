<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class certificates extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewCertificate() {
        $this->layout->setField('page_title', 'List Certificate');
        $this->layout->view('admin/certificates/view');
    }

    function getCertificatesJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('certificatetitle');
        $this->datatable->eColumns = array('id', 'certificatetext', 'certificateimage');
        $this->datatable->sIndexColumn = "id";
        $this->datatable->sTable = " certificates";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_URL . 'certificate/edit/' . $aRow['id'] . '">' . $aRow['certificatetitle'] . '</a>';
			$temp_arr[] = '<img src="'. ADMIN_IMAGE_URL .'certificate_images/' . $aRow['certificateimage'] .'" height="100"/>';
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
	
	function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/certificate_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('certificateimage')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('certificateimage'));
            
           

        }
        
        return $data;
    }

    
	function addCertificate(){
		if($this->input->post() != false){
			$obj = new Certificate();
			 if ($_FILES['certificateimage']['name'] != '') {
				$image = $this->uploadImage();
				if (isset($image['error'])) {
					$this->session->set_flashdata('file_errors', $image['error']);
					redirect(base_url() . 'certificate/add', 'refresh');
				} else if (isset($image['upload_data'])) {
					$obj->certificateimage = $image['upload_data']['file_name'];
				}
			}
			
			$obj->certificatetitle = $this->input->post('certificatetitle');
			
			$obj->save();
			$this->session->set_flashdata('success', 'Data Added Successfully');
			 redirect(ADMIN_URL . 'certificate', 'refresh');
			
		} else{
			 $this->layout->setField('page_title', 'Add Certificate');
        	$this->layout->view('admin/certificates/add');
		}
	}
	
	
	function deleteCertificate($id){
		 if (!empty($id)) {
            $obj = new Certificate();
            $obj->where('id', $id)->get();
			if (!is_null($obj->certificateimage) && file_exists('assets/admin_assets/images/certificate_images/' . $obj->certificateimage)) {
            	unlink('assets/admin_assets/images/certificate_images/' . $obj->certificateimage);
            }
            $obj->delete();
           	$this->session->set_flashdata('success', 'Data Deleted Successfully');
            redirect(ADMIN_URL. 'certificate', 'refresh');
        } else {
           $this->session->set_flashdata('error', 'Data Deleted Successfully');
            redirect(ADMIN_URL . 'certificate', 'refresh');
        }
    }
		
		
		  function editCertificate($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Certificate();
                $obj->where('id', $id)->get();
	                if ($_FILES['certificateimage']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'certificate/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->certificateimage) && file_exists('assets/admin_assets/images/certificate_images/' . $obj->certificateimage)) {
                            unlink('assets/admin_assets/images/certificate_images/' . $obj->certificateimage);
                        }
						$obj->certificateimage = $image['upload_data']['file_name'];
					}
				}
			
				$obj->certificatetitle = $this->input->post('certificatetitle');
				
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'certificate', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Certificate');
                $obj= new Certificate();
                $data['certificate'] = $obj->where('id', $id)->get();
                $this->layout->view('admin/certificates/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'certificate', 'refresh');
        }
    }
	
    
}
