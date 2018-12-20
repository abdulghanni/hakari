<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {
    public $data;
    var $module = 'Contact';
    var $title = 'Contact';
    var $file_name = 'Contact';
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

    function send(){
        $this->load->library('email');

        $ci = get_instance();
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "mail.grahautamatimber.com";
        // $config['smtp_port'] = "465";
        $config['smtp_port'] = "587";
        $config['smtp_user'] = "admin@grahautamatimber.com";
        $config['smtp_pass'] = "admingtu";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->email->initialize($config);
        $ci->email->from($_POST['email'], $_POST['name']);
        $list = array('admin@grahautamatimber.com');
        $ci->email->to($list);
        $ci->email->subject($_POST['subject']);
        $ci->email->message($_POST['message']);
        if ($this->email->send()) {
        echo 'Email sent.';
        redirect(base_url().'Contact');
        } else {
        show_error($this->email->print_debugger());
        }
    }
}
