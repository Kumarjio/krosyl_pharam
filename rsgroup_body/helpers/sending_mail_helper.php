<?php

if (!function_exists('send_mail')) {

    function send_mail($tomailid, $subject, $message, $cc = '', $attachement = '') {

        $ci = get_instance();
        $config = Array(
            'protocol' => 'smtp',
            'smtp_port' => 587,
            'smtp_host' => 'mail.rootitsolutions.com',
            'smtp_user' => 'info@rootitsolutions.com',
            'smtp_pass' => 'rsgroup@2014',
            'mailtype' => 'html',
        );
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");
        $ci->email->from('info@rootitsolutions.com', 'Root IT Solutions');
        $ci->email->to($tomailid);
        $ci->email->subject($subject);
        $ci->email->message($message);

        if ($cc != '')
            $ci->email->bcc($cc);
        
        if ($attachement != '')
            $ci->email->attach($attachement);

        if (!$ci->email->send()) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
?>
