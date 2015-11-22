<?php
namespace Admin\Controller;
use Think\Controller;
// 所有控制器的中间类控制器
class BaseController extends Controller{
	// 构造方法，用于权限验证
	public function __construct(){
		// 验证session是否存在
		if(session('?admin')){
			parent::__construct();
		}else{
			$this->redirect('Admin/login');
		}
	}



}