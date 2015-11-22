<?php
namespace Model;
use Think\Model;
//城市三级联动模型
class CityModel extends Model{

	//获取城市信息
	function getCity($id){
		//传入当前省份的id,根据id取出下面所有的子城市信息
		return $this->where("c_pid=$id")->select();
	}
	
	
	//end
}