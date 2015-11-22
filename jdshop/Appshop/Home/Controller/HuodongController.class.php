<?php
namespace Home\Controller;
use Think\Controller;

class HuodongController extends Controller{

	/**
	 * 显示活动【抽奖】主页
	 * return [type] [description]
	 */
	public function index(){
		// 获取省市级三级联动
		$this->display();
	}
	// 贪吃蛇小游戏
	public function snake(){
		$this->display();
	}
	//返回省市区
    function city($id){
    	$c=new \Model\CityModel();
    	$data=$c->getCity($id);
    	$this->ajaxReturn($data);
    }
    //
    function ajaxAddUser(){
    	//用ajax接收用户的提交的个人信息，入数据库操作
    	

    }
    //end
}