<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/6
 * Time: 上午11:17
 */

class Collection_Data extends MY_Model{
    function __construct(){
        parent::__construct();
    }
    const COLLECT_TABLE = 'collection';
    const IMAGE_TABLE = 'images';
    const ADMIN_USER = 'admin_user';
    function getAllCollect($page, $perPage, $extendFields = []){
        $start = ($page-1)*$perPage;
        $ret = $this->db->from(self::COLLECT_TABLE)->limit($start, $perPage)->order_by('add_time', 'DESC')->get()->result_array();
        return self::_formatData($ret);
    }
    function addCollect($data){
        return $this->db->insert($data);
    }
    function getCountCollect(){
        $where = [];
        $where['is_use'] = 1;
        return $this->db->from(self::COLLECT_TABLE)->where($where)->count_all_results();
    }
    //获合集内图片数量
    private static function getImagesNumForCollection($cid){
        return get_instance()->db->from(self::IMAGE_TABLE)->where([ 'cid' => $cid ])->count_all_results();
    }
    // 获得图片合集的操作人
    private static  function getCollectionUserName($uid){
        if($uid){
            return get_instance()->db->from(self::ADMIN_USER)->where([ 'id' => $uid ])->get()->row_array()['real_name'];
        }

    }
    private static function _formatData($list){
        foreach($list as &$val){
            $val['add_time'] = date('Y-m-d H', $val['add_time']);
            $val['show_time'] = date('Y-m-d H:i', $val['show_time']);
            $val['images_num'] = self::getImagesNumForCollection($val['id']);
            $val['title'] = mb_substr($val['title'], 0,  20, 'utf-8');
            $val['real_name'] = self::getCollectionUserName($val['uid']);
        }
        return $list;
    }
    //插入和更新
    function insertOrUpdateCollection($id, $title, $abstract, $cateID, $showTime, $uid){
        $data = [
            'title' => $title,
            'abstract' => $abstract,
            'cate_id' => $cateID,
            'show_time' => strtotime($showTime),
            'add_time' => time(),
            'uid' =>$uid
        ];
        if($id){
            return $this->db->update(self::COLLECT_TABLE, $data, [ 'id' => $id ]);
        }else{
            return $this->db->insert(self::COLLECT_TABLE, $data);
        }
    }
    //根据ID获得合集详情
    function getCollectionDetail($id){
        $result = $this->db->from(self::COLLECT_TABLE)->where([ 'id' => $id ])->get()->row_array();

        return $result;
    }

}