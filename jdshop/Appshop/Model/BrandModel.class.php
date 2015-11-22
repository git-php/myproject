<?php
namespace Model;
use Think\Model;
class BrandModel extends Model{
// 	定义表单验证
	protected $_validate=array(
			array('b_name','require','品牌名为空'),
			array('b_url','require','品牌url为空'),
	);
	
	public function _before_insert(&$data, $options){
	// 判断用户是否有上传图片
		if(isset($_FILES['b_logo']) && $_FILES['b_logo']['error']==0){
			//获取配置文件
			$upload = new \Think\Upload();
			$upload->maxSize = 3145728;
			$upload->exts = array('jpg','png','gif','jpeg');
			$upload->rootPath = './Uploads/';
			$upload->savePath = 'Brand/';
			$upload->autoSub  = false;
			// 上传文件
			$info = $upload->upload();
			if($info){
				$data['b_logo'] = $info['b_logo']['savename'];
			}else{
				$this->error=$upload->getError();
				return false;
			}
			
		}
		
	}
	
	
	//类末
}