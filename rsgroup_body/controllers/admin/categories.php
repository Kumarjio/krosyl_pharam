<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class categories extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewCategory() {
        $this->layout->setField('page_title', 'List Category');
        $this->layout->view('admin/categories/view');
    }

    public function getCategoriesJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('name');
        $this->datatable->eColumns = array('id', 'image');
        $this->datatable->sIndexColumn = "id";
        $this->datatable->sTable = " categories";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_URL . 'category/edit/' . $aRow['id'] . '">' . $aRow['name'] . '</a>';
            if(!empty($aRow['image'])){
                $temp_arr[] = '<img src="'. ADMIN_IMAGE_URL .'category_images/' . $aRow['image'] .'" height="100"/>';    
            } else{
                $temp_arr[] = null;
            }
			
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
    
	public function addCategory(){
		if($this->input->post() != false){
			$obj = new Category();
			 if ($_FILES['image']['name'] != '') {
				$image = $this->uploadImage();
				if (isset($image['error'])) {
					$this->session->set_flashdata('file_errors', $image['error']);
					redirect(base_url() . 'category/add', 'refresh');
				} else if (isset($image['upload_data'])) {
					$obj->image = $image['upload_data']['file_name'];
				}
			}
			
			$obj->name = $this->input->post('name');
			$obj->save();
			$this->session->set_flashdata('success', 'Data Added Successfully');
			 redirect(ADMIN_URL . 'category', 'refresh');
			
		} else{
			 $this->layout->setField('page_title', 'Add Category');
        	$this->layout->view('admin/categories/add');
		}
	}
		
	public function editCategory($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Category();
                $obj->where('id', $id)->get();
	                if ($_FILES['image']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'category/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->image) && file_exists('assets/admin_assets/images/category_images/' . $obj->image)) {
                            unlink('assets/admin_assets/images/category_images/' . $obj->image);
                        }
						$obj->image = $image['upload_data']['file_name'];
					}
				}
			
				$obj->name = $this->input->post('name');
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'category', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Category');
                $obj= new Category();
                $data['category'] = $obj->where('id', $id)->get();
                $this->layout->view('admin/categories/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'category', 'refresh');
        }
    }

    public function deleteCategory($id){
        if (!empty($id)) {
            $obj = new Category();
            $obj->where('id', $id)->get();
            if (!is_null($obj->image) && file_exists('assets/admin_assets/images/category_images/' . $obj->image)) {
                unlink('assets/admin_assets/images/category_images/' . $obj->image);
            }
            $obj->delete();
            $this->session->set_flashdata('success', 'Data Deleted Successfully');
        } else {
           $this->session->set_flashdata('error', 'Error in Deleting Successfully');
        }
    }

    public function removeCategoryImage($id){
        if (!empty($id)) {
            $obj = new Category();
            $obj->where('id', $id)->get();
            
            if (!is_null($obj->image) && file_exists('assets/admin_assets/images/category_images/' . $obj->image)) {
                unlink('assets/admin_assets/images/category_images/' . $obj->image);
            }
            
            $obj->where('id', $id)->update('image', null);
            $this->session->set_flashdata('success', 'Image removed Successfully');
        } else {
           $this->session->set_flashdata('error', 'Error in Deleting category image');
        }

        redirect(ADMIN_URL . 'category/edit/' . $id, 'refresh');
    }

    public function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/category_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('image')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('image'));
        }
        
        return $data;
    }
	
    
}
