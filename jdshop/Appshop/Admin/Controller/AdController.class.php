<?php
namespace Admin\Controller;
use Think\Controller;
// 广告控制器
class AdController extends BaseController{
	//增加方法--------------
	function add(){
		if(IS_POST){
			doubi($_POST);exit;
			if($model->create()){
				if($model->add()){
					$this->success('添加成功','index');exit;
				}
			}
			$this->error($model->getError());
		}
		//取出关联数据显示
		$this->display();
	}
	//删除方法-------------
	function del($id){
		if($model->delete($id)){
			$this->success('删除成功','index');exit;
		}else{
			$this->success('删除失败','index');exit;
		}
	}
	//修改方法-------------
	function edit(){
		if(IS_POST){
			doubi($_POST);exit;
			if($model->create()){
				// 隐藏域id
				if($model->save()){
					$this->success('更新成功','index');exit;
				}
			}
			$this->success('修改失败','index');exit;
		}
		$this->display();
	}
	//显示方法---------------
	function index(){
		//分页
		$User = M('User'); // 实例化User对象
		$count      = $User->where('status=1')->count();
		// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,25);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();
		// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where('status=1')->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}



}