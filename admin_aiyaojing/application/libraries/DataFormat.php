<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/5/16
 * Time: 3:15 PM
 */

class DataFormat {
    static  function isPost() {
        return ($_SERVER['REQUEST_METHOD'] == 'POST' ? 1 : 0);
    }
    static  function isGet(){
        return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
    }
}