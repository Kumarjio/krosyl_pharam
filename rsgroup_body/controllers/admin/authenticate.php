<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class authenticate extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->layout->setLayout('admin/template/layout_login');
        $this->layout->setField('page_title', 'Admin Login');
    }

    public function index() {
        $this->layout->view('admin/authenticate/login');
    }

    function validateUser() {
        $obj_user = new User();
        $user_details = $obj_user->where(array('username'=>$this->input->post('username'), 'password'=> md5($this->input->post('password'))))->get();
        if ($user_details->result_count() == 1) {
            $newdata = array('admin_session' => $user_details->stored, 'logged_in' => TRUE, 'type' => 'Admin');
            $this->session->set_userdata($newdata);
            redirect(ADMIN_URL . 'dashboard', 'refresh');
        } else {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect(ADMIN_URL . 'login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('admin_session');
        $this->session->sess_destroy();
        redirect(ADMIN_URL . 'login', 'refresh');
    }

}
