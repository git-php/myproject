<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 文章管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>

<h1>
<span class="action-span"><a href="/index.php/Admin/News/index">文章列表</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加文章 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
<form method="post" action="/index.php/Admin/News/add" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <td class="label">文章标题</td>
    <td><input type="text" name="title" maxlength="60" size="50" value=""><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">文章作者</td>
    <td><input type="text" name="author" maxlength="60"  value=""></td>
  </tr>
  
  <tr>
    <td class="label">文章内容</td>
    <td><textarea name="content" id="b_desc" cols="60" rows="4"></textarea></td>
  </tr>
  
  <tr>
    <td class="label">是否显示</td>
    <td><input type="radio" name="is_show" value="1" checked="checked"> 是        <input type="radio" name="is_show" value="0"> 否     （默认显示在首页）
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br>
      <input type="submit" class="button" value=" 确定 ">
      
    </td>
  </tr>
</tbody></table>
</form>
</div>


<div id="footer">
	版权所有 &copy; 2006-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html>
<script type="text/javascript">
  
  UE.getEditor('b_desc', {
    "initialFrameWidth" : "600",
    "initialFrameHeight" : '200',
    "maximumWords" : 30000,
  });
</script>