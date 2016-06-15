<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/25
 * Time: 上午1:04
 */

class Collection_Images extends MY_Model{
    const COLLECTION_IMAGES = 'collection_images';
    const IMAGES_TABLE = 'images';
    function insertCollectionImages($imageID, $cid, $imageAbstract){
        $data = [
            'image_abstract' => $imageAbstract,
            'cid' => $cid,
            'add_time' => time(),
            'is_use' => 1
        ];
        return $this->db->update(self::IMAGES_TABLE, $data, ['id' => $imageID]);
    }
    //根据合集ID获得图片
    function getImagesByCollectionID($cid){
	if($cid){
        //$select = $this->db->from(self::COLLECTION_IMAGES)->join(self::IMAGES_TABLE, self::COLLECTION_IMAGES.'.image_id = '.self::IMAGES_TABLE.'.id',  'left')->where([ self::COLLECTION_IMAGES.".cid = " => $cid ]);
	        $select = $this->db->from(self::IMAGES_TABLE)->where([ "cid" => $cid ]);
        	return $select->get()->result_array();
	}
	return [];
    }
}
