<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<script src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript">
/*  jQuery(document).ready(function() {
      $('#typeid').change(function(){
        var id=$(this).val();
        //根据id发送ajax请求数据返回到下面表格
        var data={id:id,_:new Date().getTime()}
        $.get('/index.php/Admin/Attribute/ajaxPage',data,function(msg){
          //处理返回数据
          // alert(msg);
          $('#contentt').html(msg);
          
          
        });
      });
  });*/
  //--------------------
  function ajaxPage(p){    //user函数名 一定要和action中的第三个参数一致上面有
    $('#typeid').change(function(){
        var id=$(this).val();
        var page=p;
        //根据id发送ajax请求数据返回到下面表格
        var data={id:id,'p':page,_:new Date().getTime()}
        $.get('/index.php/Admin/Attribute/ajaxPage',data,function(msg){
          //处理返回数据
          // alert(msg);
          $('#contentt').html(msg);
          
          
        });
      });
  } 
    //调用函数
     $(function(){
      $.get('/index.php/Admin/Attribute/getOne',function(msg){
        $('#contentt').html(msg);
      });

        //调用ajax函数
        ajaxPage(1);
     });
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="/index.php/Admin/Attribute/add">添加属性</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    按商品类型显示：<select name="a_type" id='typeid'>
<?php foreach($types as $v):?>
    <option value="<?php echo $v['type_id']?>"><?php echo $v['type_name']?></option>
<?php endforeach;?>
    </select> 请选择你要查看的商品类型！
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">
  <!-- 下面的div是从ajax返回的分页数据内容 -->
  <div id='contentt'></div>
  

</div>

</form>

<div id="footer">
	版权所有 &copy; 2006-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html>