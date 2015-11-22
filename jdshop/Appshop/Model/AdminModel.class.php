<?php
namespace Model;
use Think\Model;
class AdminModel extends Model{
	// 自定义一个添加用户的验证规则
	protected $_yanzheng=array(
		array('a_username','require','用户名不能为空'),
		array('a_password','require','密码不能为空',2),
		array('a_password','6-16','密码长度不符',1,'length',1),
		array('a_rpassword','a_password','密码一致',0,'confirm',1),
		array('role_id','require','角色为空'),
	);
	//定义验证规则
	protected $_validate=array(
		array('a_username','require','用户名不能为空'),
		array('a_password','require','密码不能为空'),
		array('captcha','require','验证码不能为空'),
	);

	// 创建用户名和密码验证的方法
	public function checkUser(){
		$user=I('post.a_username');
		$pass=I('post.a_password');
		$code=I('post.captcha');
		// 验证码验证
		$verify = new \Think\Verify();    
		if(!$verify->check($code)){
			$this->error='验证码错误';
			return false;
		}

		$userinfo=$this->where("a_username='$user'")->find();
		// doubi($userinfo);
		if($userinfo){
			//用户名正确
			if($userinfo['a_password']==md5($pass)){
				// 保存用户信息到session
				session('admin',$user);
				session('userid',$userinfo['a_id']);
				return ture;
			}else{
				$this->error='密码错误';
				return false;
			}
		}else{
			$this->error='用户名不存在';
			return false;
		}
	}
	
	
	//end
}