<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->layout->setField('page_title', 'Krosyl Pharma');
    }

    private function _commondata(){
        $obj_category = new Category();
        $data['category_details'] = $obj_category->order_by('name','ASC')->get();

        $obj_kp_setting = new Setting();
        $kp_contact = $obj_kp_setting->where('system_type', 'kp_contact')->get();
        foreach ($kp_contact as $kp_key => $kp_value) {
            $data['kp_contact'][$kp_value->system_key] = $kp_value->system_value;
        }

        $obj_ct_setting = new Setting();
        $ct_contact = $obj_ct_setting->where('system_type', 'ct_contact')->get();        
        foreach ($ct_contact as $ct_key => $ct_value) {
            $data['ct_contact'][$ct_value->system_key] = $ct_value->system_value;
        }
		
		$obj_content = new Content();
    	$data['chemotech_content'] = $obj_content->where('type','chemotech_content')->get();


        return $data;
    }

    public function index() {
        $data = $this->_commondata();

    	$data['is_homepage'] = true;

    	$obj_slider = new Slider();
    	$data['slider_details'] = $obj_slider->get();

    	$obj_block = new Block();
    	$data['block_details'] = $obj_block->get();
    	$data['total_blocks'] = $obj_block->result_count();

        $this->layout->view('front_end/home', $data);
    }

    public function readMoreContent($type, $id){
    	$array = array('home', 'product_domestic', 'product_international');

    	if(in_array($type, $array)){
            $data = $this->_commondata();

    		if($type == 'home'){
    			$obj_block = new Block($id);
    			if($obj_block->result_count() == 1){
    				$data['type']	 = 'home_block';
    				$data['content'] = $obj_block->stored;
    				$this->layout->view('front_end/read_more', $data);
    			} else {
    				redirect(base_url(), 'refresh');
    			}
    		}

            if($type == 'product_domestic'){
                $obj_product = new Product($id);
                if($obj_product->result_count() == 1){
                    $data['type']    = 'product_domestic';
                    $data['content'] = $obj_product->stored;
                    $this->layout->view('front_end/read_more', $data);
                } else {
                    redirect(base_url(), 'refresh');
                }
            }

             if($type == 'product_international'){
                $obj_product = new Product($id);
                if($obj_product->result_count() == 1){
                    $data['type']    = 'product_international';
                    $data['content'] = $obj_product->stored;
                    $this->layout->view('front_end/read_more', $data);
                } else {
                    redirect(base_url(), 'refresh');
                }
            }
    	} else {
    		redirect(base_url(), 'refresh');
    	}
    }

    public function viewMarket(){
    	$data = $this->_commondata();

    	$obj_content = new Content();
    	$data['domestic_content'] = $obj_content->where('type','domestic_content')->get();

    	$obj_content = new Content();
    	$data['international_content'] = $obj_content->where('type','international_content')->get();

    	$this->layout->view('front_end/market', $data);
    }

    public function viewAboutUs(){
    	$data = $this->_commondata();

    	$obj_content = new Content();
    	$data['vission'] = $obj_content->where('type','our_vision')->get();

    	$obj_content = new Content();
    	$data['mission'] = $obj_content->where('type','our_mission')->get();

    	$obj_content = new Content();
    	$data['aboutus'] = $obj_content->where('type','about_us')->get();

    	$this->layout->view('front_end/about_us', $data);
    }

    public function viewContactUs(){
    	$data = $this->_commondata();
    	$this->layout->view('front_end/contact_us', $data);
    }

    public function sendMail(){
    	if($this->input->post() != false){
            $inquiry = 'General Inquiry';
            if($this->input->post('inquiry') == 'DCI'){
                $inquiry = 'Domestic Inquiry';
            } else if($this->input->post('inquiry') == 'ILI'){
                $inquiry = 'International Inquiry';
            } else if($this->input->post('inquiry') == 'SSI'){
                $inquiry = 'Sales Inquiry';
            } else if($this->input->post('inquiry') == 'SRI'){
                $inquiry = 'Supplier Inquiry';
            }

            $str  = 'Name : ' . $this->input->post('name') . "<br /><br />";
            $str .= 'Mobile : ' . $this->input->post('mno') . "<br /><br />";
            $str .= 'Email : ' . $this->input->post('email') . "<br /><br />";
            $str .= 'Message : ' . nl2br($this->input->post('message'));

            send_mail('info@rootitsolutions.com', $inquiry, $str);
            $this->session->set_flashdata('success', 'Thank you, we will contact you very soon !!');
            redirect(base_url() . 'contact-us', 'refresh');
        } else{
            redirect(base_url() , 'refresh');
        }
    }

    public function viewCategory($id){
        $obj_cat = new Category($id);
        if($obj_cat->result_count() == 1){
            $data = $this->_commondata();

            $data['categroy_details'] = $obj_cat->stored;

            $obj_product = new Product();
            $data['domestic_product'] = $obj_product->getProductByCategoryType($obj_cat->id, 'D');
            $data['international_product'] = $obj_product->getProductByCategoryType($obj_cat->id, 'I');

            $this->layout->view('front_end/category', $data);
        } else{
            redirect(base_url() , 'refresh');
        }
    }
	
	public function viewCertificates(){
		$data=$this->_commondata();
		$obj=new Certificate();
		$obj->order_by('timestamp','DESC')->get();
		$data['certificates']= $obj;
		$this->layout->view('front_end/certificates', $data);
	}
	
	

}
