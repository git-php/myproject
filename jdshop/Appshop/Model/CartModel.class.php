<?php
namespace Model;
use Think\Model;
//购物车表
class CartModel extends Model{

	public function add($goods_id,$goods_attr_id,$number){
		//判断用户是否登陆
		$userid=session('userid');
		if($userid){
			//已经登陆，购物车保存到数据库里面
			
		}else{
			// 未登陆，商品信息保存到cookie里面，构造数组，array('id-id,id,id,'=>num);
			
		}

	}




// end
}