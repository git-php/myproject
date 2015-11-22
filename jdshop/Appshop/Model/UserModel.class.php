<?php

namespace Model;
use Think\Model;

class UserModel extends Model{
	// 验证注册表单规则
	protected $_validate=array(
		array('username','require','用户名为空'),
		array('username','','帐号名称已经存在！',0,'unique',1),
		array('password','require','密码为空'),
		array('rpassword', 'require', '确认密码不能为空！',1),
		array('checkk', 'require', '选择协议！', 1),
		array('email', 'email', '邮箱格式不对！', 1),
		array('email', 'require', 'email不能为空！', 1),
		array('password', 'rpassword', '两次密码输入不一致！', 1, 'confirm'),
		array('password','/^.{6,20}$/','密码6-20位',1),
		array('captcha','checkCode','验证码不正确',1,'callback'),
		array('email', 'chkEmail', '该Email已经被注册！', 1, 'callback'),
	);
	
	//定义要插入数据库的字段
	// protected $insertFields = array('email','password');
	// 
	// 检测验证码对不对
	function checkCode($code, $id = ''){    
		$verify = new \Think\Verify();    
		return $verify->check($code, $id);
	}
	//检测邮箱是否有被注册过
	public function chkEmail($email){
		$has = $this->where("email='$email'")->find();
		if($has){
			// 已经被验证
			if($has['email_code'] == '')
				return FALSE;
			else {
				// 如果还没有验证，那么就判断有没有过期
				if((time() - $has['email_code_time']) > C('EMAIL_CHK_TIME_EXPIRE')){
					//过去了就删除这条记录
					$this->delete($has['id']);
					return TRUE;
				}
				else 
					return FALSE;
			}
		}
		else 
			return TRUE;
	}
	//发送邮件给用户，验证邮箱秘钥
	protected function _after_insert($data, $option){
		// 把验证发邮件到用户邮件
		$content ="请点击以下链接完成验证：<br />
		<a href='http://www.juulu.com/index.php/Home/User/emailCheck
		/code/{$data['email_code']}'>
		http://www.juulu.com/index.php/Home/User/emailCheck/code/
		{$data['email_code']}</a>";
		if(sendMail('Email验证地址',$content,'新用户注册验证',$data['email'])){
			echo '发送成功';
		}else{
			echo '发送失败';
		}
		// send($title,$content,$user,$address)
	}



















//end
}