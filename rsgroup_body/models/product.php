<?php
class Product extends DataMapper
{
	   
    function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function getProductByCategoryType($cat_id, $type){
        $this->db->_protect_identifiers = false;
        $this->db->select('products.*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.id=products.category_id');
        $this->db->where('category_id', $cat_id);
        $this->db->where("FIND_IN_SET('" . $type . "', market) > 0");
        $res = $this->db->get();
        if ($res->num_rows > 0) {
            return $res->result();
        } else {
            return false;
        }
    }
    
}
?>
