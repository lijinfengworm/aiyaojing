<?php
/**
 * Created by PhpStorm.
 * User: worm
 * Date: 16/3/19
 * Time: 下午10:31
 */

class Category_Data extends MY_Model {
    const CATEGORY_TABLE = 'collection_category';
    function getAllCollectionCateGory(){
        return $this->db->from(self::CATEGORY_TABLE)->get()->result_array();
    }
    function insertOrUpdateCategory($id, $categoryName){
        $data = [
            'category_name' => $categoryName
        ];
        if($id){
            return $this->db->update(self::CATEGORY_TABLE, $data,  [ 'id' => $id ]);
        }else{
            return $this->db->insert(self::CATEGORY_TABLE, $data);
        }
    }
    function getCollectionByID($id){
        return $this->db->from(self::CATEGORY_TABLE)->where( [ 'id' => $id ] )->get()->row_array();
    }
}