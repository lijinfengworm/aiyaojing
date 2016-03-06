<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/5/16
 * Time: 3:28 PM
 */

class Admin_User extends MY_Model{
    const ADMIN_USER = 'admin_user';
    const TABLE = 'auth';

    function login($account, $password){

        if(!$account || !$password) {
            return false;
        }
        $user = $this->db->from(self::ADMIN_USER)->where(array('user_name' => $account, 'status' => 1))->get()->row_array();
        if(empty($user)){
            return false;
        }
        if($user['password'] === md5($password)){
            $userData = array(
                'uid'               => $user['id'],
                'user_name'           => $user['user_name'],
            );
            $this->session->set_userdata($userData);
            $this->db->update(self::ADMIN_USER, array('last_login_ip'=>$this->input->ip_address(), 'last_login_time'=>time()), array('id'=> $user['id']));
            return true;
        }else{
            return false;
        }
    }
    function getMyAuth($uid){
        $result = $this->db->select('auth')->from(self::ADMIN_USER)->where(array('id' => $uid))->get()->row_array();
        if(!empty($result)){
            return $result['auth'];
        }
        return '[]';
    }
    function getForumUser(){
        return $this->db->from(self::ADMIN_USER)->where(array('status' => 1))->get()->result_array();
    }
    function getAuthTree(){

        $list = $this->db->from(self::TABLE)->where(array('fid' => 0))->get()->result_array();
        foreach ($list as &$val) {
            $treeList = $this->db->from(self::TABLE)->where(array('fid' => $val['id']))->get()->result_array();

            $val['tree'] = $treeList;
        }
        return $list;


    }

}