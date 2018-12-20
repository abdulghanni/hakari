<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller {
    public $data;
    var $module = 'About';
    var $title = 'Tentang Kami';
    var $file_name = 'About';
    var $table_name = '';
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        // $this->load->model($this->module.'/'.$this->file_name.'_model', 'main');
    }

    public function index()
    {
        $this->data['ci'] = $this;
        $this->data['data']=getValue('isi', 'tentang', array('id'=>'where/1'));
        $this->load->view($this->file_name.'/index', $this->data);
    }
}
