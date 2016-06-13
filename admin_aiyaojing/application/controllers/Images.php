<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/21/16
 * Time: 11:46 AM
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
class Images extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Collection_data');
        $this->load->model('Images_Data');
    }
    function index(){
        $this->load->library('pagination');
        $config['page_query_string'] = true;
        $page = intval($this->input->get('per_page'));
        $page <= 0 && $page = 1;
        $config = $this->config->config['pagination'];
        $perPage = $config['per_page'] = 20;
        $config['base_url'] = '/images/index/?s=s';
        $config['page_query_string'] = true;
        $config['total_rows'] = $this->Images_Data->getCountImages();
        $this->pagination->initialize($config);
        $uid = $this->_data['userInfo']['uid'];
        $this->_data['collection'] = $this->Collection_data->getCollectionByUserNotRelease($uid);

        $this->_data['list'] = $this->Images_Data->getAllImages($page, $perPage);
        $this->load->view('images/index', $this->_data);
    }
    function add_collection(){
        $imageID = intval($this->input->post('image_id'));
        $cid = intval($this->input->post('cid'));
        $imageAbstract = trim($this->input->post('image_abstract'));
        $this->load->model('Collection_Images');
        $ret = $this->Collection_Images->insertCollectionImages($imageID, $cid, $imageAbstract);
        if($ret){
            die(json_encode( ['code' => 1, 'message' => '添加成功'] ));
        }
        die(json_encode( ['code' => 0, 'message' => '添加失败'] ));

    }
    function set_cover($image_id = 0, $cid = 0){
        if($image_id && $cid){
            $this->Collection_data->setCollectionCover($image_id, $cid);
        }
        redirect("/collection/add_collection/$cid");
    }
}
