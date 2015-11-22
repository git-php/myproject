<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h1>
<span class="action-span"><a href="/index.php/Admin/News/add">添加文章</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 文章列表 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
     <input type="text" name="brand_name" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th>文章标题</th>
			<th>文章作者</th>
			<th>添加时间</th>
			
			<th>是否显示</th>
			<th>操作</th>
		</tr>
<?php foreach($list as $v):?>
        <tr>
			<td class="first-cell"><span style="float:right"><a href="../data/brandlogo/1240803062307572427.gif" target="_brank"><img src="/Public/Admin/images/picflag.gif" width="16" height="16" border="0" alt="品牌LOGO"></a></span>
			<span onclick="javascript:listTable.edit(this, 'edit_brand_name', 1)" title="点击修改内容" style=""><?php echo $v['title']?></span>
			</td>
			<td width='8%'><?php echo $v['author']?></td>
			<td align="left" width='11%' ><?php echo date('Y-m-d H:i:s',$v['add_time'])?></td>
			
			<td align="center" width='8%'><img id='<?php echo $v['is_show']?>' alt="<?php echo $v['is_show']?>" src="
	<?php if($v['is_show']==1):?>
		/Public/Admin/images/yes.gif
	<?php else:?>
		/Public/Admin/images/no.gif
	<?php endif;?>
			" class='isshow'></td>
			<td align="center" width='18%'>
				<a href="/index.php/Admin/News/edit/id/<?php echo $v['id']?>" title="编辑">编辑</a> |
				<a href="/index.php/Admin/News/del/id/<?php echo $v['id']?>" onclick="return confirm('你确认要删除吗')" title="删除">移除</a> 
			</td>
		</tr>
<?php endforeach;?>
	<!--start，这些都是显示代码，没有格式化，开发时会删除 -->
        
	<!--end，这些都是显示代码，没有格式化，开发时会删除 -->
    <tr>
		<td align="center" nowrap="true" colspan="6">
            <?php echo $page;?>
      </div>
      </td>
    </tr>
  </tbody></table>

<!-- end brand list -->
</div>
</form>


<div id="footer">
	版权所有 &copy; 2006-2013 传智播客 - PHP培训 - </div>
</div>

</body>
</html>