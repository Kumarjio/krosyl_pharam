<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class contents extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewContent() {
        $this->layout->setField('page_title', 'List Content');
        $this->layout->view('admin/contents/view');
    }

    function getcontentsJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('title');
        $this->datatable->eColumns = array('id');
        $this->datatable->sIndexColumn = "id";
        $this->datatable->sTable = "contents";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
			
            $temp_arr[] = '<a href="' . ADMIN_URL . 'content/edit/' . $aRow['id'] . '">' . $aRow['title'] . '</a>';
		
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
	
	function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/content_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('image')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('image'));
            
            $image = str_replace(' ', '_', $data['upload_data']['file_name']);
            $this->load->helper('image_manipulation/image_manipulation');
            include_lib_image_manipulation();
            
            $magicianObj = new imageLib('./assets/admin_assets/images/content_images/' . $image);
            
            $magicianObj->resizeImage(1000, 400, 'exact');
            $magicianObj->saveImage('./assets/admin_assets/images/content_images/' . $image, 100);

        }
        
        return $data;
    }

    

	
	
		
		
		  function editContent($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Content();
                $obj->where('id', $id)->get();
	                if ($_FILES['image']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'content/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->Contentimage) && file_exists('assets/admin_assets/images/content_images/' . $obj->image)) {
                            unlink('assets/admin_assets/images/content_images/' . $obj->Contentimage);
                        }
						$obj->image = $image['upload_data']['file_name'];
					}
				}
			
				$obj->title = $this->input->post('title');
				$obj->description = $this->input->post('description');
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'Content', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Content');
                $obj= new Content();
                $data['content'] = $obj->where('id', $id)->get();
                $this->layout->view('admin/contents/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'Content', 'refresh');
        }
    }
	
    
}
