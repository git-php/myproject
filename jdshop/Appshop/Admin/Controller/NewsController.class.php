<?php
namespace Admin\Controller;
use Think\Controller;
// 新闻模块控制器
class NewsController extends BaseController{
	//增加方法--------------
	function add(){
		if(IS_POST){
			$model=new \Model\NewsModel();
			$model->id=null;
			
			if($model->create()){
				$model->add_time=time();
				if($model->add()){
					$this->success('添加成功','index');exit;
				}
			}
			$this->success($model->getError());exit;
		}
		//取出关联数据显示
		$this->display();
	}
	//删除方法-------------
	function del($id){
		$model=D('News');
		if($model->delete($id)){
			$this->success('删除成功',U('index'));exit;
		}else{
			$this->success('删除失败',U('index'));exit;
		}
	}
	//修改方法-------------
	function edit(){
		$id=I('get.id');
		$model=new \Model\NewsModel();
		if(IS_POST){
			
			if($model->create()){
				// 隐藏域id
				if($model->save()){
					$this->success('更新成功',U('News/index'));exit;
				}
			}
			$this->success('修改失败','index');exit;
		}
// 		显示修改表单
		$this->data=$model->find($id);
		$this->display();
	}
	//显示方法---------------
	function index(){
		//分页
		$n = M('News'); // 实例化User对象
		$count = $n->count();
		// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,5);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('header','个会员');
		$Page->setConfig('first','首页');
		$Page->setConfig('end','末页');
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$str  = $Page->show();
		
		// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $n->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$str);// 赋值分页输出
		$this->display(); // 输出模板
	}



}