<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_User');
    }


	public function index()
	{
        if(DataFormat::isPost()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $ret = $this->Admin_User->login($username, $password);

            if($ret){
                redirect('/index/index');
            }
        }
        $this->load->view('login/login');
	}
    public function login(){
        if(DataFormat::isPost()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $ret = $this->Admin_User->login($username, $password);

            if($ret){
                redirect('/index/index');
            }
        }
        $this->load->view('login/login');
    }
}
