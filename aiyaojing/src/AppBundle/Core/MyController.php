<?php

/**
 * Created by PhpStorm.
 * User: worm
 * Date: 5/30/16
 * Time: 11:21 PM
 */
namespace AppBundle\Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MyController extends Controller
{
    public  $leftTree;
    function __construct()
    {
        $this->leftTree = 123;
    }
}