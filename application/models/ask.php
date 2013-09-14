<?php
class Ask extends CI_Model
{
	
	protected $_table_name = 'ask';
	
	function __construct ()
	{
		parent::__construct();
	}
    function get_questions()
    {
        $query = $this->db->query("select * from ask");
        return $query->result_array();
    }
	
	
	
}