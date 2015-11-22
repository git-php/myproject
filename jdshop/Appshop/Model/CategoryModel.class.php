<?php
namespace Model;
use Think\Model;
class CategoryModel extends Model{
	// 定义验证规则
	protected $_validate=array(
			array('c_name','require','分类为空'),
			array('c_pid','require','请选择父级分类'),
			array('c_unit','require','填写单位'),
			array('c_sort','require','选择排序'),
			array('c_desc','require','描述为空'),
	);
	//---------------------Home------------------
	// 构建导航分类栏目三维数组
	function getNav(){
		//取出顶级分类，pid=0
		$data=$this->where("c_pid=0")->select();
		//遍历顶级分类，继续取出二级分类
		foreach ($data as $k=>$v){
			$data[$k]['child']=$this->where('c_pid='.$v['c_id'])->select();
			//继续二次遍历
			foreach($data[$k]['child'] as $k1=>$v1){
				$data[$k]['child'][$k1]['child']=$this->where('c_pid='.$v1['c_id'])->select();
			}
		}
		// 返回构建好的三维数组
		return $data;
	}
	
	
	// 前置删除操作------------------------------------------admin------
	function _before_delete($data,$options){
		$id=$data['where']['c_id'];
		// 根据id取出他的父c_pid;
		// $c_pid = $this->where("c_id=$id")->getField('c_pid');
		$res=$this->where("c_pid=$id")->select();
		if($res){
			$this->error='先删除子分类啊';
			return false;
		}else{
			return true;
		}
	}
	//getAll
	function getAll(){
		$arr=$this->select();
		return $this->tree($arr);
	}
	
	// 无线分类方法
	private function tree($arr,$pid=0,$lev=0){
		static $tree=array();
		foreach ($arr as $key=>$val) {
			if($val['c_pid']==$pid){
				$val['lev']=$lev;
				$tree[]=$val;
				unset($arr[$key]);
				// 递归
				$this->tree($arr,$val['c_id'],$lev+1);
			}
		}
		// 返回排列好的数组
		return $tree;
	}
// 	取出某个分类下面的所有子分类、
	function getchilds($pid){
		$arr=$this->select();
		return $this->getZi($arr,$pid);
	}
// 	获取子
	private function getZi($arr,$pid,$lev=0){
		static $tree=array();
		foreach ($arr as $key=>$val) {
			if($val['c_pid']==$pid){
				$val['lev']=$lev;
				$tree[]=$val;
				unset($arr[$key]);
				// 递归
				$this->getzi($arr,$val['c_id'],$lev+1);
			}
		}
		// 返回排列好的数组
		return $tree;
	}
	
	//-----------取出所有子分类的ids--------------
	public function getIds($pid){
		$arr=$this->select();
		return $this->getTreeId($arr,$pid);
	}
	//收集所有子分类的ids的值
	protected function getTreeId($arr,$pid){
		static $cats=array();
		foreach ($arr as $key => $val) {
			if($val['c_pid']==$pid){
				$cats[]=$val['c_id'];
				unset($arr[$key]);
				$this->getTreeId($arr,$val['c_id']);
			}
		}
		return $cats;
	}
	
	// end
}