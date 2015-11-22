<?php
namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller{

	// 显示订单列表信息
	function index(){

		// 分配样式文件
		$this->assign(array(
			'title'=>'我的订单页面',		
			'css'=>array('home.css','order.css'),		
			'js'=>array('home.js'),		
		));

		$this->display();
	}
}