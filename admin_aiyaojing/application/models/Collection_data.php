<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/6
 * Time: 上午11:17
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
class Collection_Data extends MY_Model{
    function __construct(){
        parent::__construct();
    }
    const COLLECT_TABLE = 'collection';
    const IMAGE_TABLE = 'images';
    const ADMIN_USER = 'admin_user';
    const COLLECTION_IMAGES = 'collection_images';
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
    function insertOrUpdateCollection($id, $title, $abstract, $cateID, $showTime, $uid, $imageID, $imageAbstract){
        $data = [
            'title' => $title,
            'abstract' => $abstract,
            'cate_id' => $cateID,
            'show_time' => strtotime($showTime),
            'add_time' => time(),
            'uid' =>$uid
        ];
        if($id){
            $this->db->update(self::COLLECT_TABLE, $data, [ 'id' => $id ]);
        }else{
            $this->db->insert(self::COLLECT_TABLE, $data);
        }
        $this->db->update(self::IMAGE_TABLE,[ 'cid' => 0 ], ['cid' => $id ]);
        foreach($imageID as $key => $v){
            $data = [
                'cid' => $id,
                'image_abstract' => isset($imageAbstract[$key]) ? trim($imageAbstract[$key]) : '',
            ];
            $this->db->update(self::IMAGE_TABLE, $data, ['id' => $v]);
        }
        return $id;
    }
    //根据ID获得合集详情
    function getCollectionDetail($id){
        $result = $this->db->from(self::COLLECT_TABLE)->where([ 'id' => $id ])->get()->row_array();

        return $result;
    }
    //获得没有发布的合集
    function getCollectionByUserNotRelease($uid){
        $select = $this->db->from(self::COLLECT_TABLE);
        $select->where( ['show_time > ' =>  time(), 'uid' => $uid ] );
        return $select->get()->result_array();
    }
    function setCollectionCover($image_id, $cid){
        return $this->db->update(self::COLLECT_TABLE, [ "cover_image" => $image_id ], ['id' => $cid]);
    }
}
