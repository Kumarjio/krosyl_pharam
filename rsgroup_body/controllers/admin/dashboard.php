<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');
        
        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

        $this->layout->setField('page_title', 'Admin Dashboard');
    }

    public function index() {
        $this->layout->view('admin/dashboard/dashboard');
    }
}
