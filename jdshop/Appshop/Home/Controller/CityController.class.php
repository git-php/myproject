<?php
namespace Home\Controller;
use Think\Controller;
class CityController extends Controller {
	//返回省
	function prov($id=1){
		$c=new \Model\CityModel();
		$data=$c->getCity($id);
		doubi($data);
		//把数据用ajax返回到下拉框
	}
	
	//返回区
	function area($id=240){
		$c=new \Model\CityModel();
		$data=$c->getCity($id);
		doubi($data);
	}
	
	
	
	
	
	//end
}