<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends MX_Controller {
    public $data;
    var $module = 'Admin';
    var $title = 'Pengaturan';
    var $file_name = 'Pengaturan';
    var $table_name = '';
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->model($this->module.'/'.$this->file_name.'_model', 'main');
    }

    public function index()
    {
        permission();
        // $this->data['menu']=$this->main->index();
        $this->_render_page($this->file_name.'/index', $this->data);
    }

    public function kategori(){
        permission();
        // $this->data['data']=$this->main->produk();
        $this->_render_page('kategori', $this->data);
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
                }elseif(in_array($view, array('kategori'))){
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
