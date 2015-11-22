<?php
namespace Model;
use Think\Model;
class NewsModel extends Model{
	//定义验证规则
	protected $_validate=array(
			array('title','require','标题为空'),
			array('author','require','作者不能为空'),
			array('content','require','内容不能为空'),
	);
}