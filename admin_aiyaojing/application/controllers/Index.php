<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/4/16
 * Time: 2:49 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends MY_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        
        $this->load->view('index/index');
    }
}