<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
        // $username = $_POST["username"];
        // $password = $_POST["password"];

        $username = '06134';
        $password = '12345';
        $response = new stdClass();

        if ((empty($username)) || (empty($password))) { 
            $response->success = 0;
            $response->message = "Kolom tidak boleh kosong"; 
            die(json_encode($response));
        }
        
        $row = $this->db->where('no_emp', $username)->where('password', $password)->get('users')->num_rows();
        // print_r($row);die();
        if ($row > 0){
            $response->success = 1;
            $response->message = "Selamat datang ".$username;
            $response->id = $username;
            $response->username = $username;
            die(json_encode($response));
            
        } else { 
            $response->success = 0;
            $response->message = "Username atau password salah";
            die(json_encode($response));
        }
    }
}
