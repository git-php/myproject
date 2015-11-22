<?php

namespace Model;
use Think\Model;
// 文章分类模型
class ArctypeModel extends Model{

	// 获取二级文章分类数组
	public function getArc(){
		$arr=$this->where('parent_id=0')->select();
		foreach ($arr as $key => $val) {
			$arr[$key]['child']=$this->where('parent_id='.$val['id'])->select();
		}

		return $arr;
	}

	// end
}