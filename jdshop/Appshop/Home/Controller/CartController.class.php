<?php
namespace Home\Controller;
use Think\Controller;
// 购物车控制器
class CartController extends Controller{
	// 添加到购物车方法、、
	function addcart(){
		//接收参数数据
		doubi($_POST);
	}
	// 查看购物车信息
	function index(){

		$this->assign(array(
			'css'=>array('cart.css'),
			'js'=>array('cart1.js'),
		));
		$this->display();
	}
	// 查看购物车信息2步
	function index1(){


		$this->display();
	}
	// 查看购物车信息3步
	function index2(){


		$this->display();
	}





	// end
}