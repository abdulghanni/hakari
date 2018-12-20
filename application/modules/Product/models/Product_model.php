<?php 
    class Product_model extends CI_Model {
	
	function __construct() 
	{
		parent::__construct();
	}

	function index(){
            return $this->db->select('title, filez, img')
            ->from('menu m')
            ->join('users_permission u', 'm.id = u.menu_id', 'left')
            //->where('user_id', sessId())
            //->where('filez!=', '#')
            //->where('u.view', 1)
            ->order_by('sort')
            ->get()->result();
    }
}