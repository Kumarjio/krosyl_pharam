<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->layout->setField('page_title', 'Krosyl Pharma');
    }

    public function index() {
    	$data['is_homepage'] = true;

    	$obj_slider = new Slider();
    	$data['slider_details'] = $obj_slider->get();

    	$obj_category = new Category();
    	$data['category_details'] = $obj_category->get();

    	$obj_block = new Block();
    	$data['block_details'] = $obj_block->get();
    	$data['total_blocks'] = $obj_block->result_count();

        $this->layout->view('front_end/home', $data);
    }

    public function viewMarket(){
    	$data = array();

    	$obj_category = new Category();
    	$data['category_details'] = $obj_category->get();

    	$obj_content = new Content();
    	$data['domestic_content'] = $obj_content->where('type','domestic_content')->get();

    	$obj_content = new Content();
    	$data['international_content'] = $obj_content->where('type','international_content')->get();

    	$this->layout->view('front_end/market', $data);
    }

    public function viewAboutUs(){
    	$data = array();

    	$obj_category = new Category();
    	$data['category_details'] = $obj_category->get();

    	$obj_content = new Content();
    	$data['vission'] = $obj_content->where('type','our_vission')->get();

    	$obj_content = new Content();
    	$data['mission'] = $obj_content->where('type','our_mission')->get();

    	$obj_content = new Content();
    	$data['aboutus'] = $obj_content->where('type','about_us')->get();

    	$this->layout->view('front_end/about_us', $data);
    }

    public function viewContactUs(){
    	$data = array();

    	$obj_category = new Category();
    	$data['category_details'] = $obj_category->get();

    	$this->layout->view('front_end/contact_us', $data);
    }

    public function sendMail(){
    	echo '<pre>';
    	print_r($_POST);
    }

}
