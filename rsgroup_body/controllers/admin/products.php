<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class products extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

    public function viewProduct() {
        $this->layout->setField('page_title', 'List Product');
        $this->layout->view('admin/products/view');
    }

    public function getProductsJsonData() {
        $this->load->library('datatable');
        $this->datatable->aColumns = array('brand_name', 'generic_name', 'categories.name AS category');
        $this->datatable->eColumns = array('products.id');
        $this->datatable->sIndexColumn = "products.id";
        $this->datatable->sTable = " products, categories";
        $this->datatable->myWhere = " Where categories.id=products.category_id";
        $this->datatable->sOrder = "  Order by products.brand_name ASC";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_URL . 'product/edit/' . $aRow['id'] . '">' . $aRow['brand_name'] . '</a>';
            $temp_arr[] = $aRow['generic_name'];
            $temp_arr[] = $aRow['category'];
			
            $temp_arr[] = '<a href="javascript:;" onclick="UpdateRow(this)" class="status" id="' . $aRow['id'] . '">' . 'DELETE' . '</a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }
    
	public function addProduct(){
		if($this->input->post() != false){
			$obj = new Product();
			 if ($_FILES['image']['name'] != '') {
				$image = $this->uploadImage();
				if (isset($image['error'])) {
					$this->session->set_flashdata('file_errors', $image['error']);
					redirect(base_url() . 'product/add', 'refresh');
				} else if (isset($image['upload_data'])) {
					$obj->image = $image['upload_data']['file_name'];
				}
			}
			
            $obj->category_id = $this->input->post('category_id');
            $obj->market = implode(',',$this->input->post('market'));
            $obj->brand_name = $this->input->post('brand_name');
            $obj->generic_name = $this->input->post('generic_name');
            $obj->description = $this->input->post('description');

			$obj->save();
			$this->session->set_flashdata('success', 'Data Added Successfully');
			 redirect(ADMIN_URL . 'product', 'refresh');		
		} else{
			$this->layout->setField('page_title', 'Add Product');

            $obj = new category();
            $data['categories'] = $obj->order_by('name', 'ASC')->get();

        	$this->layout->view('admin/products/add', $data);
		}
	}
		
	public function editProduct($id) {
        if (!empty($id)) {
            if ($this->input->post() !== false) {
                $obj = new Product();
                $obj->where('id', $id)->get();
	                if ($_FILES['image']['name'] != '') {
						$image = $this->uploadImage();
						if (isset($image['error'])) {
						$this->session->set_flashdata('file_errors', $image['error']);
						redirect(ADMIN_URL . 'product/edit/' . $id, 'refresh');
					} else if (isset($image['upload_data'])) {
						if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/' . $obj->image)) {
                            unlink('assets/admin_assets/images/product_images/' . $obj->image);
                        }
						
						if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/thumbnail/' . $obj->image)) {
							unlink('assets/admin_assets/images/product_images/thumbnail/' . $obj->image);
						}
						$obj->image = $image['upload_data']['file_name'];
					}
				}
			
				$obj->category_id = $this->input->post('category_id');
                $obj->market = implode(',',$this->input->post('market'));
                $obj->brand_name = $this->input->post('brand_name');
                $obj->generic_name = $this->input->post('generic_name');
                $obj->description = $this->input->post('description');
				$obj->save();

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'product', 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Product');

                $obj= new Product();
                $data['product'] = $obj->where('id', $id)->get();
                
                $obj = new category();
                $data['categories'] = $obj->order_by('name', 'ASC')->get();

                $this->layout->view('admin/products/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL . 'product', 'refresh');
        }
    }

    public function deleteProduct($id){
        if (!empty($id)) {
            $obj = new Product();
            $obj->where('id', $id)->get();
            if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/' . $obj->image)) {
                unlink('assets/admin_assets/images/product_images/' . $obj->image);
            }
			
			if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/thumbnail/' . $obj->image)) {
                unlink('assets/admin_assets/images/product_images/thumbnail/' . $obj->image);
            }
            $obj->delete();
            $this->session->set_flashdata('success', 'Data Deleted Successfully');
        } else {
           $this->session->set_flashdata('error', 'Error in Deleting Successfully');
        }
    }

    public function removeProductImage($id){
        if (!empty($id)) {
            $obj = new Product();
            $obj->where('id', $id)->get();
            
            if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/' . $obj->image)) {
                unlink('assets/admin_assets/images/product_images/' . $obj->image);
            }
			
			if (!is_null($obj->image) && file_exists('assets/admin_assets/images/product_images/thumbnail/' . $obj->image)) {
                unlink('assets/admin_assets/images/product_images/thumbnail/' . $obj->image);
            }
            
            $obj->where('id', $id)->update('image', null);
            $this->session->set_flashdata('success', 'Image removed Successfully');
        } else {
           $this->session->set_flashdata('error', 'Error in Deleting product image');
        }

        redirect(ADMIN_URL . 'product/edit/' . $id, 'refresh');
    }

    public function uploadImage() {
        $this->upload->initialize(array('upload_path' => "./assets/admin_assets/images/product_images/", 'allowed_types' => 'jpg|jpeg|gif|png|bmp', 'overwrite' => FALSE, 'remove_spaces' => TRUE, 'encrypt_name' => TRUE));
        
        if (!$this->upload->do_upload('image')) {
            $data = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data('image'));
			$image = str_replace(' ', '_', $data['upload_data']['file_name']);
			$this->load->helper('image_manipulation/image_manipulation');
			include_lib_image_manipulation();
			
			$magicianObj = new imageLib('./assets/admin_assets/images/product_images/' . $image);
			
			$magicianObj->resizeImage(150, 125, 'landscape');
			$magicianObj->saveImage('./assets/admin_assets/images/product_images/thumbnail/' . $image, 100);
        }
        
        return $data;
    }
	
    
}
