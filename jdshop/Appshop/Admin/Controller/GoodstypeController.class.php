<?php
namespace Admin\Controller;
use Think\Controller;

class GoodstypeController extends BaseController{
	
	public function index(){
		$this->data=D('Goodstype')->select();
		$this->display();
	}
	
	// 	添加
	function add(){
		if(IS_POST){
			$model=D('Goodstype');
			$model->type_id=null;
			if($model->create()){
				if($model->add()){
					$this->success('添加成功',U('Goodstype/index'));exit;
				}
			}
			$this->success('添加错误');exit;
		}
		$this->display();
	}
	function del($id){
		$this->success('分类是不可以删除的',U('Goodstype/index'));exit;
	}
	
	function edit(){
		$id=I('get.id');
		if(IS_POST){
			if(D('Goodstype')->create()){
				if(D('Goodstype')->save()){
					$this->success('修改成功',U('Goodstype/index'));exit;
				}
			}
			$this->success('修改错误');exit;
		}
		$this->data=D('Goodstype')->find($id);
		$this->display();
	}
	
	//end
}