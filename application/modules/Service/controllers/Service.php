<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MX_Controller {
    public $data;
    var $module = 'Service';
    var $title = 'Services';
    var $file_name = 'Service';
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

        $this->load->view($this->file_name.'/index', $this->data);
    }
}
