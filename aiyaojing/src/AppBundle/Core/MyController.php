<?php

/**
 * Created by PhpStorm.
 * User: worm
 * Date: 5/30/16
 * Time: 11:21 PM
 */
namespace AppBundle\Core;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Service\ImagesService;
use AppBundle\Entity;
use Doctrine\ORM\Tools\Setup;


class MyController extends Controller
{
    public  $leftTree;
    function __construct()
    {
        $image = new MyTree();
        $this->leftTree = $image->getTree();

    }
}
class MyTree{
    private $dbHost = '47.89.54.152';
    private $dbUser = 'root';
    private $dbPwd = 'margin-right:4pxsolid#EEE;';
    private $dbName = 'yaojing';
    private $dbConn;
    function __construct()
    {
        $this->dbConn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPwd) or die(mysqli_error());
        mysqli_select_db($this->dbConn, $this->dbName) or dir(mysqli_error());
        mysqli_set_charset($this->dbConn, 'UTF8');
    }
    function getTree(){
        $newData = [];
        $sql = 'SELECT * FROM yj_collection_category';
        $query = mysqli_query($this->dbConn, $sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $newData[] = $row;
        }
        mysqli_free_result($query);
        mysqli_close($this->dbConn);
        return $newData;

    }

}