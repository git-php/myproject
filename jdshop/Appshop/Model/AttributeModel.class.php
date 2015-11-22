<?php
namespace Model;
use Think\Model;
class AttributeModel extends Model{
	// 定义验证规则
	protected $_validate=array(
			array('a_name','require','属性为空'),
			array('type_id','require','请选择分类'),
			array('a_type','0,1,2','选择类型',1,'in'),
			array('a_input_type',array(0,1,2),'选择输入类型',1,'in'),
			array('a_sort','number','选择排序'),
			
	);
	
	
	
	
	
	
	//end
}