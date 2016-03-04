<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/4/16
 * Time: 2:46 PM
 */

class MY_Controller extends CI_Controller{
    protected $_data    = '';
    protected $userData = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
}