<?php
class Category extends DataMapper
{
	public $table = 'categories';
    
    function __construct($id = NULL) {
        parent::__construct($id);
    }
    
}
?>
