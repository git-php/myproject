<?php
namespace Home\Controller;
use Think\Controller;
//用户模块控制器
class UserController extends Controller{


	//用户中心方法
	function usercenter(){
		// 分配样式文件
		$this->assign(array(
			'title'=>'用户中心页面',		
			'css'=>array('home.css','user.css'),		
			'js'=>array('home.js'),		
		));
		$this->display();
	}
	// 用户登出方法
	function logout(){
		session(null);
		$this->success('退出成功',U('login'));exit;
	}
	// 用户登陆方法
	function login(){
		if(IS_POST){
			// doubi($_POST);exit;
			// 接收数据
			$user=I('post.username');
			$pass=I('post.password');
			$pass=md5($pass);
			$code=I('post.captcha');
			//检测验证码
			$verify = new \Think\Verify();
			if(!$verify->check($code)){
				$this->success('验证码错误',U('login'));exit;
			}
			//检测用户名和密码
			$userinfo=D('User')->where("email='$user' and password='$pass'")->find();
			if(!$userinfo){
				$this->success('用户名或者密码错误',U('login'));exit;
			}
			// 登录成功，保存用户信息到session里面
			session('user',$userinfo['email']);
			session('userid',$userinfo['id']);
			$this->success('登录成功',U('Index/index'));exit;
		}
		//显示登陆表单，传递页面头信息
		$this->assign(array(
			'title'=>'用户登录页面'
		));
		$this->display();
	}

	// 用户注册页面方法
	function reg(){
		if(IS_POST){
			$user=new \Model\UserModel();
			if($user->create()){
				// doubi($_POST);exit;
				$user->addtime=date('Y-m-d H:i:s',time());
				$user->email_code_time=time();
				$user->email_code=md5(uniqid());
				$user->password=md5($_POST['password']);
				if($user->add()){
					$this->success('注册成功',U('login'));exit;
				}
			}
			$this->success($user->getError());exit;
		}
		$this->assign(array(
			'title'=>'用户注册页面'
		));
		$this->display();
	}
	// 验证码生成
	function captcha(){
		$Verify = new \Think\Verify();
		/*$config =    array(    
			'fontSize'    =>    30,    // 验证码字体大小    
			'length'      =>    3,     // 验证码位数    
			'useNoise'    =>    true, // 关闭验证码杂点
		);*/
		$Verify->fontSize = 30;
		$Verify->length   = 3;
		$Verify->useNoise = false;
		$Verify->entry();
	}
	//检测用户注册邮箱的秘钥是否通过
	public function emailCheck(){
		$code=I('get.code');
		// 取得用户发过来的数据，和数据库里面的数据对比
		if($code){
			$res=D('User')->where("email_code='$code'")->find();
			// echo D('User')->getLastSql();
			// doubi($res);exit;
			if($res){
				// 继续检测验证码是否过期
				if((time() - $res['email_code_time']) > C('EMAIL_CHK_TIME_EXPIRE')){
					D('User')->delete($res['id']);
    				$this->error('验证码已过期，请重新注册！');
				}else{
					$this->success('验证成功！现在可以登录！', U('login'));
    				exit;
				}

			}else{
				$this->error('验证码不对！');
			}
		}else{
			$this->error('参数无效！');
		}
	}
	//end
}