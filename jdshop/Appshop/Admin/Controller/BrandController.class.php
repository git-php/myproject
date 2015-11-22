<?php
namespace Admin\Controller;
use Think\Controller;
// 后台品牌控制器
class BrandController extends BaseController{
// 	ajax请求修改后是否显示品牌信息
	function editshow(){
		$data=I('get.isshow');
		$id=I('get.id');
		if($data==1){
			if(D('Brand')-> where("b_id=$id")->setField('b_show',0)){
				echo '修改成功';
			}
		}else{
			if(D('Brand')-> where("b_id=$id")->setField('b_show',1)){
				echo '修改成功';
			}
		}
		
	}
// 	添加
	function add(){
		if(IS_POST){
			$b_model=new \Model\BrandModel();
			$b_model->b_id=null;
			if($b_model->create()){
				if($b_model->add()){
					$this->success('添加成功',U('Brand/index'));exit;
				}
			}
			$this->success($b_model->getError());exit;
		}
		$this->display();
	}
// 	品牌列表
	function index(){
		$this->data=D('Brand')->select();
		$this->display();
	}
// 	删除品牌
	function del($id){
		$this->success('品牌不可以删除！',U('Brand/index'));exit;
	}
// 	修改品牌
	function edit(){
		$id=I('get.id');
		if(IS_POST){
			$this->success('修改成功',U('Brand/index'));exit;
		}
		$this->data=D('Brand')->find($id);
		$this->display();
	}
	
	
	//
}