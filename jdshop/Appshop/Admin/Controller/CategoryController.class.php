<?php
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends BaseController{
	/**
	 * 修改分类信息
	 * return [type] [description]
	 */
	function edit(){
		$id=$_GET['id'];$c=new \Model\CategoryModel();
		if(!empty($_POST)){
			//假如有数据提交的话，就验证数据
// 			doubi($_POST);exit;
			if($c->create()){
				if($c->save()){
					$this->success('修改成功',U('index'));exit;
				}
			}
			$this->success('修改失败',U('index'));exit;//失败
		}
		// 假如没有数据的话，就直接显示修改表单
		$data=$c->where("c_id=$id")->find();
		$this->datas=$c->getAll();//获取所有分类
		//获取当前分类的所有子ids
		$this->ids=$c->getIds($id);
// 		doubi($this->ids);
		$this->assign('data',$data);//获取当前分类
		$this->display();
	}
	/**
	 * delete商品分类,要先判断是否有子分类，有就不可以删除
	 * param  [type] $id [description]
	 * return [type]     [description]
	 */
	function del($id){
		// 删除的时候判断前置方法，有子分类不可以删除
		$c=new \Model\CategoryModel();
		if($c->delete($id)){
			$this->success('删除成功',U('index'));
		}else{
			$this->error($c->getError());
		}
	}

	/**
	 * add 分类，添加无线分类
	 */
	function add(){

		$c=new \Model\CategoryModel();
		// 判断逻辑
		if(IS_POST){
			$c->c_id=null;
			
			//判断后面的是否没有选中
			if(I('post.c_pid')==-1){
				$_POST['c_pid']=$_POST['c_two'];
			}
			if(I('post.c_two')==-1){
				$c->c_pid=I('post.c_one');
			}
			if(I('post.c_pid')==-1 && I('post.c_two')==-1){
				$_POST['c_pid']=$_POST['c_one'];
			}
			if($c->create()){
// 				doubi($_POST);exit;
				if($c->add()){
					$this->success('添加成功','index');exit;
				}
			}
			$this->success($c->getError());exit;
		}else{
			//显示提交表单
			$this->p_cat=$c->where('c_pid=0')->select();	//获得一级分类列表
			$this->display();
		}
		
	}
	// 显示全部分类信息，分类信息无需分页显示
	function index(){
		$c=new \Model\CategoryModel();
		$this->data=$c->getAll();

		$this->display();
	}


	/**
	 * 根据id获取他的第一级分类名称
	 * param  [type] $id [description]
	 * return [type]     [description]
	 */
	function getcat($id){
		$data=D('Category')->where("c_pid=$id")->select();
		// ajax返回数据
		$this->ajaxReturn($data);
	}
	//根据id获取他下面的所有子分类想信息，ajax方法
	function getchild($id){
		$c=new \Model\CategoryModel();
		$data=$c->getchilds($id);
// 		doubi($data);exit;
		$this->ajaxReturn($data);
	}
	
	
	
	
	
	
	
	
// 	end
}