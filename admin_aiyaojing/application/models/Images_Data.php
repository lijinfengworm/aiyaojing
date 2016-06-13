<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/24
 * Time: 下午12:07
 */

class Images_Data extends MY_Model{
    const IMAGES_TABLE = 'images';
    function getCountImages(){
        return $this->db->from(self::IMAGES_TABLE)->where([ 'is_use' => 0 ])->count_all_results();
    }
    function getAllImages($page, $perPage){
        $start = ($page - 1) * $perPage;
        return $this->db->from(self::IMAGES_TABLE)->where([ 'is_use' => 0 ])->limit($perPage , $start)->get()->result_array();
    }
}