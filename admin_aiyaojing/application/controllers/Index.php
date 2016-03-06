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
        $this->load->model('collection_data');
        $this->load->library('pagination');
    }
    //合集列表
    function index(){
        $page = intval($this->input->post('page'));
        $page <= 0 && $page = 1;
        $config = $this->config->config['pagination'];
        $config['base_url'] = '/index/index/?s=s';
        $config['page_query_string'] = true;
        $perPage = 20;
        $config['total_rows'] = $this->collection_data->getCountCollect();

        $this->pagination->initialize($config);
        $this->_data['list'] = $this->collection_data->getAllCollect($page, $perPage);

        $this->load->view('index/index', $this->_data);
    }
}