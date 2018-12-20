<?php 
    class Admin_model extends CI_Model {
	
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

    function produk(){
            return $this->db->query('select p.id produk_id, k.title kategori, s.title sub, created_by, modified_date from produk p, kategori k, kategori_sub s where p.kategori_id = k.id and p.kategori_sub_id = s.id');
    }

    function pengguna($id = null){
        if($id == null){
            return $this->db->query('select *from users');
        }else{
            return $this->db->query("select *from users where id = $id");
        }
    }

    function produk_kategori(){
            return $this->db->get('kategori');
    }

    function produk_kategori_sub($id){
            return $this->db->where('kategori_id', $id)->get('kategori_sub');
    }

    function get_kategori($id){
        return $this->db->query("select title from produk p, kategori k where p.kategori_id = k.id and p.id = $id")->row()->title;
    }

    function get_kategori_sub($id){
        return $this->db->query("select title from produk p, kategori_sub k where p.kategori_sub_id = k.id and p.id = $id")->row()->title;
    }

    function get_image($id){
        return $this->db->query("select id,filename from produk_image p where p.produk_id = $id");
    }
}