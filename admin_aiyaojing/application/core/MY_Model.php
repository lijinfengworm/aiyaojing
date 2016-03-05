<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/4/16
 * Time: 2:47 PM
 */

class MY_Model extends CI_Model{
    private $db;
    function __construct(){
        parent::__construct();
        $this->db = $this->load->database('default', true);


    }
}