<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller {
    public $data;
    var $module = 'Product';
    var $title = 'Product';
    var $file_name = 'Product';
    var $table_name = '';
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Produk_model', 'main');
    }

    public function index()
    {
        $this->data['ci'] = $this;
        $this->data['kategori'] = getAll('kategori')->result();
        $this->load->view($this->file_name.'/index', $this->data);
    }

    function show($id){
        $this->data['id'] = $id;
        $this->data['sub'] = getAll('kategori_sub', array('kategori_id'=>'where/'.$id));
        $produk = getAll('produk', array('kategori_id'=>'where/'.$id))->result();
        foreach ($produk as $k=>$r) {
            $produk_id[] = $r->id;
        }
        if(!empty($produk_id)){  
            $this->data['img'] = $this->db->where_in('produk_id', $produk_id)->get('produk_image');
            $this->load->view($this->file_name.'/result', $this->data);
        }else{
           echo '<br/><br/><h3>Belum Ada Gambar Untuk Kategori Ini</h3>';
        }
    }

    function show_all($id){
        $produk = getAll('produk', array('kategori_id'=>'where/'.$id))->result();
        foreach ($produk as $k=>$r) {
            $produk_id[] = $r->id;
        }
        $this->data['img'] = $this->db->where_in('produk_id', $produk_id)->get('produk_image');
        // lq();
        $this->load->view($this->file_name.'/result_sub', $this->data);
    }

    function show_sub($id, $sub_id){
        $f = array(
            'kategori_id'=> 'where/'.$id,
            'kategori_sub_id'=> 'where/'.$sub_id,
        );
        $produk_id = getAll('produk', $f)->row()->id;
        $this->data['img'] = getAll('produk_image', array('produk_id'=>'where/'.$produk_id));
        $this->load->view($this->file_name.'/result_sub', $this->data);
    }
}
