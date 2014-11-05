<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->layout->setField('page_title', 'Krosyl Pharma');
    }

    public function index() {
        $this->layout->view('front_end/content');
    }

}
