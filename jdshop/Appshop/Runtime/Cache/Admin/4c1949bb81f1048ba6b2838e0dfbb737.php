<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>

<h1>
<span class="action-span"><a href="/index.php/Admin/Brand/index">商品品牌</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加品牌 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
<form method="post" action="/index.php/Admin/Brand/add" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <td class="label">品牌名称</td>
    <td><input type="text" name="b_name" maxlength="60" value=""><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">品牌网址</td>
    <td><input type="text" name="b_url" maxlength="60" size="40" value=""></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="点击此处查看提示信息">
        <img src="/Public/Admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>品牌LOGO</td>
    <td><input type="file" name="b_logo" id="logo" size="45">    <br><span class="notice-span" style="display:block" id="warn_brandlogo">
        请上传图片，做为品牌的LOGO！        </span>
    </td>
  </tr>
  <tr>
    <td class="label">品牌描述</td>
    <td><textarea name="b_desc" id="b_desc" cols="60" rows="4"></textarea></td>
  </tr>
  <tr>
    <td class="label">排序</td>
    <td><input type="text" name="b_sort" maxlength="40" size="15" value="50"></td>
  </tr>
  <tr>
    <td class="label">是否显示</td>
    <td><input type="radio" name="b_show" value="1" checked="checked"> 是        <input type="radio" name="b_show" value="0"> 否        (当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)
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