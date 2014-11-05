<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class settings extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->layout->setLayout('admin/template/layout_main');

        $session = $this->session->userdata('admin_session');
        if (empty($session)) {
            redirect(ADMIN_URL . 'login', 'refresh');
        }

    }

	function editSetting($type) {
		$array = array('kp_contact','ct_contact');

        if (!empty($type) && in_array($type, $array)) {
            if ($this->input->post() !== false) {
                $obj = new Setting();
                $obj->where('system_type', $type)->get();
				foreach($obj as $setting){
					$obj->where(array('system_type' =>$type, 'system_key' => $setting->system_key))->update('system_value', $this->input->post($setting->system_key));				
				}

                $this->session->set_flashdata('success', 'Data updated successfully');
                redirect(ADMIN_URL . 'setting/'  .$type, 'refresh');
            } else {
                $this->layout->setField('page_title', 'Edit Setting');
                $obj= new Setting();
                $data['settings'] = $obj->where('system_type', $type)->get();
                $this->layout->view('admin/settings/edit', $data);
            }
        } else {
            $this->session->set_flashdata('error', 'Error in edit data');
            redirect(ADMIN_URL , 'refresh');
        }
    }
	
    
}
