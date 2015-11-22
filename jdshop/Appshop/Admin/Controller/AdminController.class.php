<?php
namespace Admin\Controller;
use Think\Controller;
// 这个控制器是不需要基础基本Base的，因为这个页面不需要权限验证啊
class AdminController extends Controller{
	// 显示管理员信息
	function show(){
		$data=D('Admin')->select();
		$this->data=$data;
		$this->display();
	}
	/**
	 * 退出登陆
	 * return [type] [description]
	 */
	public function logout(){
		session(null);
		$this->redirect('Admin/login');
	}
/**
	 * 登陆方法，验证数据
	 * return [type] [description]
	 */
	public function login(){
		if(IS_POST){
			$model = new \Model\AdminModel();
			if($model->create()){
				// doubi($model);
				if($model->checkUser()){
					// 登陆成功
					$this->success('登陆成功',U('Index/index'));exit;
				}else{
					$this->success($model->getError(),'login/login');exit;
				}

			}else{
				// 表单验证失败的时候
				$this->success($model->getError(),'login/login');exit;
			}
		}else{
			// 没有表单提交的时候
			$this->display();
		}
		
	}

	/**
	 * 验证码
	 * return [type] [description]
	 */
	function captcha(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 40;
		$Verify->length   = 2;
		$Verify->useNoise = false;
		$Verify->codeSet = '0123456789';
		$Verify->entry();
	}

	// 空操作方法
	function _empty(){
		echo "<img src='".A_IMG."404.gif' alt=''>";
	}
}