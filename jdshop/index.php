<?php
// +----------------------------------------------------------------------
// | isshop [ 我的小小测试商城 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2015 
// +----------------------------------------------------------------------
// | Licensed ( http://www.juuluu.com )
// +----------------------------------------------------------------------
// | Author: 杨 松 <4873473@qq.com>		2015年4月11日19:11:22
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
header('Content-type:text/html;charset=utf-8');


// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Appshop/');

// 定义品牌图片路径地址，图片前面的路径-浏览器用（绝对路径）
define('IMG_URL', 'http://www.juuluu.com/Uploads/');
// 图片在硬盘上的路径（相对路径）
define('IMG_URL_HD', './Uploads/');


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';