<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
    public $data;
    var $module = 'Admin';
    var $title = 'Admin';
    var $file_name = 'Admin';
    var $table_name = '';
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model($this->file_name.'_model', 'main');
    }

    public function index()
    {
        permission();
        $this->data['menu']=$this->main->index();
        $this->_render_page($this->file_name.'/index', $this->data);
    }

    public function tentang(){
        permission();
        $this->data['data']=getValue('isi', 'tentang', array('id'=>'where/1'));
        $this->_render_page($this->file_name.'/tentang', $this->data);
    }

    public function tentang_add(){
        $data=array(
            'isi' => $_POST['tentang']
        );
         $this->db->update('tentang', $data);
         redirect(base_url('Admin/tentang'));
    }

    public function kontak(){
        permission();
        $this->data['alamat']=getValue('isi', 'kontak', array('id'=>'where/1'));
        $this->data['email']=getValue('isi', 'kontak', array('id'=>'where/2'));
        $this->data['email2']=getValue('isi', 'kontak', array('id'=>'where/3'));
        $this->data['telpon']=getValue('isi', 'kontak', array('id'=>'where/4'));
        $this->data['telpon2']=getValue('isi', 'kontak', array('id'=>'where/5'));
        $this->_render_page($this->file_name.'/kontak', $this->data);
    }

    public function kontak_add(){
        foreach ($_POST as $k=>$v) {
           $data=array(
                'isi' => $_POST[$k]
            );
            $this->db->where('jenis', $k)->update('kontak', $data);
            // echo $this->db->last_query();
        }
         redirect(base_url('Admin/kontak'));
    }

    public function kategori(){
        permission();
        $this->data['data']=$this->main->produk_kategori();
        $this->_render_page($this->file_name.'/kategori', $this->data);
    }

    public function kategori_sub($id){
        permission();
        $this->data['kategori'] = getValue('title', 'kategori', array('id'=>'where/'.$id));
        $this->data['data']=$this->main->produk_kategori_sub($id);
        $this->data['id']=$id;
        $this->_render_page($this->file_name.'/kategori_sub', $this->data);
    }

    public function kategori_add(){
        $data=array(
            'title' => $_POST['title'],
            'order' => $_POST['order'],
        );
         $this->db->insert('kategori', $data);
         redirect(base_url('Admin/kategori'));
    }

    public function kategori_sub_add($id){
        $data=array(
            'title' => $_POST['title'],
            'order' => $_POST['order'],
            'kategori_id' => $id,
        );
         $this->db->insert('kategori_sub', $data);
         redirect(base_url('Admin/kategori_sub/'.$id));
    }

     public function kategori_sub_delete($id, $kat_id){
         $this->db->where('id', $id)->delete('kategori_sub');
         redirect(base_url('Admin/kategori_sub/'.$kat_id));
    }


    public function produk(){
        permission();
        $this->data['data']=$this->main->produk();//print_ag($this->data['data']);
        $this->_render_page($this->file_name.'/produk', $this->data);
    }

    public function produk_add(){
        permission();
        $this->data['kategori']=$this->main->produk_kategori();//print_ag($this->data['data']);
        $this->_render_page($this->file_name.'/produk_add', $this->data);
    }

    public function produk_edit($id){
        permission();
        $this->data['id'] = $id;
        $this->data['kategori']=$this->main->get_kategori($id);
        $this->data['sub']=$this->main->get_kategori_sub($id);
        $this->data['image']=$this->main->get_image($id);
        $this->_render_page($this->file_name.'/produk_edit', $this->data);
    }

    public function produk_delete($id){
         $this->db->where('id', $id)->delete('produk');
         redirect(base_url('Admin/produk/'));
    }

    public function delete_img($id){
         $this->db->where('id', $id)->delete('produk_image');
         echo "Gambar berhasil dihapus";
    }

    public function upload() {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            // if you want to save in db,where here
            $data = array(
                'kategori_id' => $this->input->post('kategori'),
                'kategori_sub_id' => $this->input->post('sub'),
            );
            $num = $this->db
            ->where('kategori_id',$this->input->post('kategori'))
            ->where('kategori_sub_id',$this->input->post('sub'))
            ->get('produk')->num_rows();
            if($num > 0){
                echo "Kategori / Sub Kategori Ini Sudah Ada";
            }else{
                $this->db->insert('produk', $data);
                $produk_id = $this->db->insert_id();

                for($i = 0;$i<sizeof($tempFile);$i++){
                    $targetFile = $targetPath . time().$fileName[$i] ;
                    move_uploaded_file($tempFile[$i], $targetFile);

                    $this->db->insert('produk_image',array('filename' => time().$fileName[$i], 'produk_id'=>$produk_id));
                }

                echo "Data Berhasil Disimpan...";
            }
        }
    }

    public function upload_edit($id) {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            // if you want to save in db,where here
            // $data = array(
            //     'kategori_id' => $this->input->post('kategori'),
            //     'kategori_sub_id' => $this->input->post('sub'),
            // );
            // $num = $this->db
            // ->where('kategori_id',$this->input->post('kategori'))
            // ->where('kategori_sub_id',$this->input->post('sub'))
            // ->get('produk')->num_rows();
            // if($num > 0){
            //     echo "Kategori / Sub Kategori Ini Sudah Ada";
            // }else{
                // $this->db->insert('produk', $data);
                // $produk_id = $this->db->insert_id();

                for($i = 0;$i<sizeof($tempFile);$i++){
                    $targetFile = $targetPath . time().$fileName[$i] ;
                    move_uploaded_file($tempFile[$i], $targetFile);

                    $this->db->insert('produk_image',array('filename' => time().$fileName[$i], 'produk_id'=>$id));
                }

                echo "Data Berhasil Disimpan...";
            // }
        }
    }

    function getSub(){
        // permission();
       //print_ag($_POST);
        $this->data['sub']=getAll('kategori_sub', array('kategori_id'=>'where/'.$_POST['kategori']));//lq();print_ag($this->data['sub']->result());

        $this->load->view($this->file_name.'/sub', $this->data);
    }

    public function pengguna(){
        permission();
        $this->data['data']=$this->main->pengguna();
        $this->_render_page($this->file_name.'/pengguna', $this->data);
    }

    public function pengguna_add(){
        $data=array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'status' => 1,
        );
         $this->db->insert('users', $data);
         redirect(base_url('Admin/pengguna'));
    }

    public function ubah_pengguna($id){
        permission();
        $this->data['data']=$this->main->pengguna($id)->row();
        $this->data['id']=$id;
        $this->_render_page($this->file_name.'/pengguna_edit', $this->data);
    }

    public function ubah_status($id, $status){
        permission();
        $status = ($status == 1) ? 0 : 1;
        $this->db->query("update users set status = '$status' where id = $id");
         redirect(base_url('Admin/pengguna'));
    }

    public function pengguna_edit($id){
        permission();
        $pass = $_POST['password'];
        $this->db->query("update users set password = '$pass' where id = $id");
         redirect(base_url('Admin/pengguna'));

    }

    function _render_page($view, $data=null, $render=false)
    {
        $data = (empty($data)) ? $this->data : $data;
        if ( ! $render)
        {
            $this->load->library('template');

                if(in_array($view, array($this->file_name.'/index')))
                {
                    $this->template->set_layout('default'); 
                     $this->template->add_css($this->module.'/dashboard.css?v4.0.1'); 
                    //  $this->template->add_plugin_css('slidepanel/slidepanel.minfd53.css?v4.0.1'); 
                    //  $this->template->add_plugin_css('chartist/chartist.minfd53.css?v4.0.1'); 
                    //  $this->template->add_plugin_css('chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.css?v4.0.1'); 
                    //  $this->template->add_plugin_css('jquery-selective/jquery-selective.minfd53.css?v4.0.1'); 
                     // $this->template->add_plugin_css('datatables.net-bs/css/dataTables.bootstrap.min.css'); 
                    
                    // $this->template->add_plugin_js('datatables.net-buttons/js/dataTables.buttons.min.js');
                }elseif(in_array($view, array($this->file_name.'/produk'))){
                    $this->template->set_layout('default');  
                     $this->template->add_plugin_css('datatables.net/css/dataTables.bootstrap.min.css'); 
                    // $this->template->add_plugin_js($this->module.'/dashboard.css?v4.0.1'); 
                    $this->template->add_plugin_js('datatables.net/js/dataTables.js');
                    $this->template->add_js('produk.js');
                }elseif(in_array($view, array($this->file_name.'/produk_add'))){
                    $this->template->set_layout('default');  
                     $this->template->add_plugin_css('dropzone/css/dropzone.min.css'); 
                     $this->template->add_plugin_css('sweetalert/css/sweetalert2.min.css'); 
                    $this->template->add_plugin_js('dropzone/js/dropzone.js');
                    $this->template->add_plugin_js('sweetalert/js/sweetalert2.min.js');
                    $this->template->add_js('produk_add.js');
                }

                elseif(in_array($view, array($this->file_name.'/produk_edit'))){
                    $this->template->set_layout('default');  
                     $this->template->add_plugin_css('dropzone/css/dropzone.min.css'); 
                     $this->template->add_plugin_css('sweetalert/css/sweetalert2.min.css'); 
                     $this->template->add_plugin_css('justified/css/jquery.justified.css'); 
                    $this->template->add_plugin_js('dropzone/js/dropzone.js');
                    $this->template->add_plugin_js('sweetalert/js/sweetalert2.min.js');
                    $this->template->add_plugin_js('justified/js/jquery.justified.min.js');
                    $this->template->add_js('produk_edit.js');
                }

                elseif(in_array($view, array($this->file_name.'/tentang'))){
                    $this->template->set_layout('default');  
                    $this->template->add_plugin_js('tinymce/tinymce.min.js');
                }

            if ( ! empty($data['title']))
            {
                $this->template->set_title($data['title']);
            }

            $this->template->load_view($view, $data);
        }
        else
        {
            return $this->load->view($view, $data, TRUE);
        }
    }
}
