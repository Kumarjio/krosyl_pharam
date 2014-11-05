<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class sliders extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewSlider() {
        $this->layout->setField('page_title', 'List Slider');
        $this->layout->view('admin/sliders/view');
    }

    function getSlidersJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('slidertitle');
        $this->datatable->eColumns = array('id', 'slidertext', 'sliderimage');
        $this->datatable->sIndexColumn = "id";
        $this->datatable->sTable = " sliders";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_URL . 'slider/edit/' . $aRow['id'] . '">' . $aRow['slidertitle'] . '</a>';
			$temp_arr[] = '<img src="'. ADMIN_IMAGE_URL .'slider_images/' . $aRow['sliderimage'] .'" height="100"/>';
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
	
	function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/slider_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('sliderimage')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('sliderimage'));
            
            $image = str_replace(' ', '_', $data['upload_data']['file_name']);
            $this->load->helper('image_manipulation/image_manipulation');
            include_lib_image_manipulation();
            
            $magicianObj = new imageLib('./assets/admin_assets/images/slider_images/' . $image);
            
            $magicianObj->resizeImage(1000, 400, 'exact');
            $magicianObj->saveImage('./assets/admin_assets/images/slider_images/' . $image, 100);

        }
        
        return $data;
    }

    
	function addSlider(){
		if($this->input->post() != false){
			$obj = new Slider();
			 if ($_FILES['sliderimage']['name'] != '') {
				$image = $this->uploadImage();
				if (isset($image['error'])) {
					$this->session->set_flashdata('file_errors', $image['error']);
					redirect(base_url() . 'slider/add', 'refresh');
				} else if (isset($image['upload_data'])) {
					$obj->sliderimage = $image['upload_data']['file_name'];
				}
			}
			
			$obj->slidertitle = $this->input->post('slidertitle');
			$obj->slidertext = $this->input->post('slidertext');
			$obj->save();
			$this->session->set_flashdata('success', 'Data Added Successfully');
			 redirect(ADMIN_URL . 'slider', 'refresh');
			
		} else{
			 $this->layout->setField('page_title', 'Add Slider');
        	$this->layout->view('admin/sliders/add');
		}
	}
	
	
	function deleteSlider($id){
		 if (!empty($id)) {
            $obj = new Slider();
            $obj->where('id', $id)->get();
			if (!is_null($obj->sliderimage) && file_exists('assets/admin_assets/images/slider_images/' . $obj->sliderimage)) {
            	unlink('assets/admin_assets/images/slider_images/' . $obj->sliderimage);
            }
            $obj->delete();
           	$this->session->set_flashdata('success', 'Data Deleted Successfully');
            redirect(ADMIN_URL. 'slider', 'refresh');
        } else {
           $this->session->set_flashdata('error', 'Data Deleted Successfully');
            redirect(ADMIN_URL . 'slider', 'refresh');
        }
    }
		
		
		  function editSlider($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Slider();
                $obj->where('id', $id)->get();
	                if ($_FILES['sliderimage']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'slider/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->sliderimage) && file_exists('assets/admin_assets/images/slider_images/' . $obj->sliderimage)) {
                            unlink('assets/admin_assets/images/slider_images/' . $obj->sliderimage);
                        }
						$obj->sliderimage = $image['upload_data']['file_name'];
					}
				}
			
				$obj->slidertitle = $this->input->post('slidertitle');
				$obj->slidertext = $this->input->post('slidertext');
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'slider', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Slider');
                $obj= new Slider();
                $data['slider'] = $obj->where('id', $id)->get();
                $this->layout->view('admin/sliders/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'slider', 'refresh');
        }
    }
	
    
}
