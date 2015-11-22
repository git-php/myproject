<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
/**
	 * 主页显示
	 * return [type] [description]
	 */
	public function index(){
		$this->display();
	}

	function top(){
		// 分配时间
		$time=date('Y-m-d H:i:s');
		$this->assign('time',$time);
		$this->display();
	}


	function menu(){
		$this->display();
	}
	function drag(){
		$this->display();
	}

	function main(){
		$this->display();
	}
	

	function error(){
		$this->display();
	}



	
	// 空操作方法
	function _empty(){
		// echo "<img src='".A_IMG."404.gif' alt=''>";
		$this->redirect('Index/error');
	}
}