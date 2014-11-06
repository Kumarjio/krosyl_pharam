<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profile extends CI_Controller {

    function __construct() {
        parent::__construct();
    	
		$this->layout->setLayout('admin/template/layout_main');
		$session = $this->session->userdata('admin_session');
		
        if (empty($session)) {
            $this->session->set_flashdata('error', 'Login First');
            redirect(ADMIN_URL. 'login', 'refresh');
        }
    }

    public function index() {
		$session = $this->session->userdata('admin_session');
		if($this->input->post() != false){
			
		$obj = new User();
	        $obj->where('id', $session->id)->get();	
			$obj->username=$this->input->post('username');
			$obj->fullname=$this->input->post('fullname');
			$obj->email=$this->input->post('email');
			$obj->save();	
				$this->session->set_flashdata('success', 'Data Updated Successfully');
			 redirect(ADMIN_URL . 'profile', 'refresh');
								
		} else {
        	
			$obj = new User();
	        $data['profile'] = $obj->where('id', $session->id)->get();
        	$this->layout->view('admin/profile/edit_profile', $data);
		}
    }


    function checkOldPassword() {
        $session = $this->session->userdata('admin_session');
		$obj = new User();
        $obj->where(array('id' => $session->id, 'password' => md5($_GET['old_password'])))->get();
        if ($obj->result_count() == 1) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

  

  

    function changePassword() {
		        $session = $this->session->userdata('admin_session');
		if($this->input->post() != false){ 
			 $obj = new User();
			 $obj->where('id',$session->id)->update('password',md5($this->input->post('password')));
       		 $this->session->set_flashdata('success', 'Password Change Successfuly');
       		 redirect(ADMIN_URL . 'change_password', 'refresh');
		
		}else{
        $this->layout->view('admin/profile/change_password');
    }}

}