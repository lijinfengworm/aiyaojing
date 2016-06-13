<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/18
 * Time: 下午11:34
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
class Collection extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Category_Data');
        $this->load->model('Collection_data');
        $this->load->library('pagination');
    }
    function add_collection($id = 0){
        if(DataFormat::isPost()){
            $title = trim($this->input->post('title'));
            $abstract = trim($this->input->post('abstract'));
            $cateID = intval($this->input->post('cate_id'));
            $showTime = $this->input->post('show_time');
            $imageID = $this->input->post('image_id');
            $imageAbstract = $this->input->post('image_abstract');
            $id = intval($this->input->post('id'));
            $uid = $this->_data['userInfo']['uid'];
            $ret = $this->Collection_data->insertOrUpdateCollection($id, $title, $abstract, $cateID, $showTime, $uid, $imageID, $imageAbstract);
            redirect("collection/add_collection/$id");
        }

        $this->_data['id'] = $id;
        $this->load->model('Collection_Images');
        $this->_data['images'] = $this->Collection_Images->getImagesByCollectionID($id);

        $this->_data['category'] = $this->Category_Data->getAllCollectionCateGory();
        $this->_data['info'] = $this->Collection_data->getCollectionDetail($id);
        $this->load->view('collection/add_collection', $this->_data);
    }
    function index(){
        $this->_data['list'] = $this->Category_Data->getAllCollectionCateGory();
        $this->load->view('collection/category', $this->_data);
    }
    function list_index(){
        $page = intval($this->input->post('per_page'));
        $page <= 0 && $page = 1;
        $config = $this->config->config['pagination'];
        $config['base_url'] = '/index/index/?s=s';
        $config['page_query_string'] = true;
        $perPage = 20;
        $config['total_rows'] = $this->Collection_data->getCountCollect();

        $this->pagination->initialize($config);
        $this->_data['list'] = $this->Collection_data->getAllCollect($page, $perPage);
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
