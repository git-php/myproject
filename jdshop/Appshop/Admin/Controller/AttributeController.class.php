<?php
namespace Admin\Controller;
use Think\Controller;

class AttributeController extends BaseController{
// 	添加属性、
	function add(){
		if(IS_POST){
			$a=new \Model\AttributeModel();
			if($a->create()){
// 				doubi($_POST);exit;
				if($a->add()){
					$this->success('添加成功','add');exit;
				}
			}
			$this->success($a->getError());exit;
		}
		//获取全部类型，展示
		$this->types=D('Goodstype')->select();
		$this->display();
	}
// 显示属性列表
	function index(){
		//取出所有的类型
		$this->types=D('Goodstype')->select();
// 		doubi($this->types);
		//取出所有的属性
		$this->data=D('Attribute')->select();
		$this->display();
	}
	
	// ajax 无刷新分页类使用
	public function ajaxPage($id){
		// 导入分页类  注意导入的是自己写的AjaxPage类
		$a = D('Attribute');
		//获取数据长度
		$count = $a ->where("type_id=$id")-> count();  //计算记录数
		$limitRows = 10;         // 设置每页记录数
		$p = new \page\AjaxPage($count, $limitRows,"ajaxPage"); //第三个参数是你需要调用换页的ajax函数名
		$limit_value = $p->firstRow . "," . $p->listRows;
		$page = $p->show(); // 产生分页信息，AJAX的连接在此处生成
		$this -> assign('page',$page);
		//显示模版
		$this->data=$a->field('a.*,b.type_name')->join('a left join jd_goodstype b on a.type_id=b.type_id')->where("a.type_id=$id")->limit($limit_value)->select();
// 		doubi($this->data);
		$this -> display('page');
	}
	//默认返回ajax第一页的数据，type_id为1的数据
	function getOne(){
		$this->data=D('Attribute')->where("type_id=1")->select();
		$this->display('page');
	}
	
	
	
// 	删除属性----------------------
	function del($id){
		// 删除的时候判断前置方法，有子分类不可以删除
		$c=new \Model\AttributeModel();
		if($c->delete($id)){
			$this->success('删除成功',U('index'));
		}else{
			$this->error($c->getError());
		}
	}
// 	修改属性
	function edit(){
		$id=$_GET['id'];$a=new \Model\AttributeModel();
		if(!empty($_POST)){
			//假如有数据提交的话，就验证数据
// 			doubi($_POST);exit;
			if($a->create()){
				if($a->save()){
					$this->success('修改成功',U('index'));exit;
				}
			}
			$this->success('修改失败',U('index'));exit;//失败
		}
		// 假如没有数据的话，就直接显示修改表单
		//获取全部类型，展示
		$this->types=D('Goodstype')->select();
		$data=$a->where("a_id=$id")->find();
		$this->assign('data',$data);//获取当前分类
		$this->display();
	}
}