<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/18
 * Time: 下午11:34
 */

class Collection extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Category_Data');
        $this->load->model('Collection_Data');
        $this->load->library('pagination');
    }
    function add_collection($id = 0){
        if(DataFormat::isPost()){
            $title = trim($this->input->post('title'));
            $abstract = trim($this->input->post('abstract'));
            $cateID = intval($this->input->post('cate_id'));
            $showTime = $this->input->post('show_time');
            $id = intval($this->input->post('id'));
            $uid = $this->_data['userInfo']['uid'];
            $this->Collection_Data->insertOrUpdateCollection($id, $title, $abstract, $cateID, $showTime, $uid);
        }
        $this->_data['id'] = $id;
        $this->_data['category'] = $this->Category_Data->getAllCollectionCateGory();
        $this->_data['info'] = $this->Collection_Data->getCollectionDetail($id);
        $this->load->view('collection/add_collection', $this->_data);
    }
    function index(){
        $this->_data['list'] = $this->Category_Data->getAllCollectionCateGory();
        $this->load->view('collection/category', $this->_data);
    }
    function list_index(){
        $page = intval($this->input->post('page'));
        $page <= 0 && $page = 1;
        $config = $this->config->config['pagination'];
        $config['base_url'] = '/index/index/?s=s';
        $config['page_query_string'] = true;
        $perPage = 20;
        $config['total_rows'] = $this->Collection_Data->getCountCollect();

        $this->pagination->initialize($config);
        $this->_data['list'] = $this->Collection_Data->getAllCollect($page, $perPage);

        $this->load->view('index/index', $this->_data);
    }
    function add_category($id = 0){
        if(DataFormat::isPost()){
            $categoryName = trim($this->input->post('category_name'));
            $this->Category_Data->insertOrUpdateCategory($id, $categoryName);
            redirect('/collection/index');
        }
        $this->_data['info'] = $this->Category_Data->getCollectionByID($id);
        $this->_data['id'] = $id;
        $this->load->view('collection/add_category', $this->_data);
    }
}