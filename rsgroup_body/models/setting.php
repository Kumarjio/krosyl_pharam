<?php
class Setting extends DataMapper
{
    
    function __construct($id = NULL) {
        parent::__construct($id);
    }


    public static function getSetting($type){
    	$ci = get_instance();
        $ci->db->_protect_identifiers = false;
        $ci->db->select('*');
        $ci->db->from('settings');
        $ci->db->where('system_type', $type);
        $res = $ci->db->get();
        if ($res->num_rows > 0) {
            $setting = $res->result();
            foreach ($setting as $value) {
	            $return['setting'][$value->system_key] = $value->system_value;
	        }

	        return $return;
        } else {
            return false;
        }
    }
    
}
?>
