<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class blocks extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewBlock() {
        $this->layout->setField('page_title', 'List Block');
        $this->layout->view('admin/blocks/view');
    }

    function getBlocksJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('title');
        $this->datatable->eColumns = array('id', 'image');
        $this->datatable->sIndexColumn = "id";
        $this->datatable->sTable = " blocks";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_URL . 'block/edit/' . $aRow['id'] . '">' . $aRow['title'] . '</a>';
			$temp_arr[] = '<img src="'. ADMIN_IMAGE_URL .'featured_images/' . $aRow['image'] .'" height="100"/>';
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
	
	function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/featured_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('image')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('image'));
            
            $image = str_replace(' ', '_', $data['upload_data']['file_name']);
            $this->load->helper('image_manipulation/image_manipulation');
            include_lib_image_manipulation();
            
            $magicianObj = new imageLib('./assets/admin_assets/images/featured_images/' . $image);
            
            $magicianObj->resizeImage(250, 160, 'exact');
            $magicianObj->saveImage('./assets/admin_assets/images/featured_images/' . $image, 100);

        }
        
        return $data;
    }

    
	function addBlock(){
		if($this->input->post() != false){
			$obj = new Block();
			 if ($_FILES['image']['name'] != '') {
				$image = $this->uploadImage();
				if (isset($image['error'])) {
					$this->session->set_flashdata('file_errors', $image['error']);
					redirect(base_url() . 'block/add', 'refresh');
				} else if (isset($image['upload_data'])) {
					$obj->image = $image['upload_data']['file_name'];
				}
			}
			
			$obj->title = $this->input->post('title');
			$obj->description = $this->input->post('description');
			$obj->save();
			$this->session->set_flashdata('success', 'Data Added Successfully');
			 redirect(ADMIN_URL . 'block', 'refresh');
			
		} else{
			 $this->layout->setField('page_title', 'Add Block');
        	$this->layout->view('admin/blocks/add');
		}
	}
	
	
	function deleteBlock($id){
		 if (!empty($id)) {
            $obj = new Block();
            $obj->where('id', $id)->get();
			if (!is_null($obj->image) && file_exists('assets/admin_assets/images/featured_images/' . $obj->image)) {
            	unlink('assets/admin_assets/images/featured_images/' . $obj->image);
            }
            $obj->delete();
           	$this->session->set_flashdata('success', 'Data Deleted Successfully');
            redirect(ADMIN_URL. 'block', 'refresh');
        } else {
           $this->session->set_flashdata('error', 'Data Deleted Successfully');
            redirect(ADMIN_URL . 'block', 'refresh');
        }
    }
		
		
		  function editBlock($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Block();
                $obj->where('id', $id)->get();
	                if ($_FILES['image']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'block/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->image) && file_exists('assets/admin_assets/images/featured_images/' . $obj->image)) {
                            unlink('assets/admin_assets/images/featured_images/' . $obj->image);
                        }
						$obj->image = $image['upload_data']['file_name'];
					}
				}
			
				$obj->title = $this->input->post('title');
				$obj->description = $this->input->post('description');
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'block', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Block');
                $obj= new Block();
                $data['block'] = $obj->where('id', $id)->get();
                $this->layout->view('admin/blocks/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'block', 'refresh');
        }
    }
	
    
}
