<?php

if (!function_exists('send_mail')) {

    function send_mail($tomailid, $subject, $message, $cc = '', $attachement = '') {

        $ci = get_instance();
        
        $mail_setting = Setting::getSetting('smtp');

        $config = Array(
            'protocol' => 'smtp',
            'smtp_port' => $mail_setting['setting']['smtp_port'],
            'smtp_host' => $mail_setting['setting']['smtp_host'],
            'smtp_user' => $mail_setting['setting']['smtp_mail'],
            'smtp_pass' => $mail_setting['setting']['smtp_password'],
            'mailtype' => 'html',
        );
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");
        $ci->email->from('info@rootitsolutions.com', $mail_setting['setting']['smtp_name']);
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
