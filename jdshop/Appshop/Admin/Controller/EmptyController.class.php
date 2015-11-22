<?php
namespace Admin\Controller;
use Think\Controller;
class EmptyController extends BaseController{
    function _empty(){
        echo "<img src='".A_IMG."404.gif' alt=''>";
    }
}