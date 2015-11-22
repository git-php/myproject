<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/Public/Admin/js/utils.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/selectzone.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/colorselector.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/calendar.php?lang="></script>
	<script src="/Public/Admin/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<!--时间插件-->
<script src="/Public/datepicker/jquery-ui-1.9.2.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/datepicker/jquery-ui-1.9.2.custom.min.css">

<script type="text/javascript">
	$(function(){
		$('#pcat').change(function(){
			//改变事件的时候，发送ajax请求
			// alert($(this).val());
			var data={id:$(this).val(),_:new Date().getTime()};
			$.get('/index.php/Admin/Goods/getcat',data,function(msg){
				// alert(msg);
				// 清空、
				$('#childCat')[0].length=0;
				// 遍历
				$(msg).each(function(i,item){
					// alert(item.c_name);
                    // 追加二级分类到下一个select下拉框
                    var op=new Option(item.c_name,item.c_id);
                    // op.options(item.c_name,item.c_id);
                    $('#childCat')[0].options.add(op);

				});
			});
		});
		// 第二次ajax请求,获取孙子分类以及其以下的所有分类
		$('#childCat').change(function(){
			//改变事件的时候，发送ajax请求
			// alert($(this).val());
			var data={id:$(this).val(),_:new Date().getTime()};
			// alert($(this).val());
			$.get('/index.php/Admin/Goods/getchild',data,function(msg){
				// 清空、
				$('#sunCat')[0].length=1;
				// 遍历
				// alert(msg);
				$(msg).each(function(i,item){
					// alert(item.c_name);
                    // 追加二级分类到下一个select下拉框
                    var op=new Option(item.c_name,item.c_id);
                    // op.options(item.c_name,item.c_id);
                    $('#sunCat')[0].options.add(op);

				});
			});
		});

	//点击类型的时候，生成ajax属性列表
	$('#attrr').change(function(){
		//
		var id=$(this).val();
		var data={id:id};
		$.post('/index.php/Admin/Goods/ajaxAttr',data,function(msg){
			$('#attribues').empty();
			//返回ajax结果
			$('#attribues').append(msg);
		});
	});


	});
</script>
</head>
<body>
<h1>
	<span class="action-span"><a href="/index.php/Admin/Goods/index">商品列表</a></span>
	<span class="action-span1"><a href="/index.php/Admin">SHOP 管理中心 </a> </span><span id="search_id" class="action-span1"> - 编辑商品信息 </span>
	<div style="clear:both"></div>
</h1>

<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span>
		<span class="tab-back" id="detail-tab">详细描述</span>
		<span class="tab-back" id="mix-tab">其他信息</span>
		<span class="tab-back" id="properties-tab">商品属性</span>
		<span class="tab-back" id="gallery-tab">商品相册</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="/index.php/Admin/Goods/add" method="post" name="theForm"> 
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
		 
		 <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center" style="display: table;">
			<tbody>
				<tr>
					<td class="label">商品名称：</td>
					<td><input type="text" name="g_name" value="诺基亚N85" size="30"><span class="require-field">*</span></td>
				</tr>
				<tr>
					<td class="label">商品货号： </td>
					<td><input type="text" name="g_sn" value="" size="20" onblur="checkGoodsSn(this.value,'32')"><span id="goods_sn_notice"></span><br>
					<span class="notice-span" style="display:block" id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
			</tr>
			<tr>
				<td class="label">商品分类：</td>
				<td>
					父分类：<select name='c_one' id='pcat'>
								<option value='-1'>--选择父类--</option>
				<?php foreach($p_cat as $v):?>
						<option value="<?php echo $v['c_id']?>"><?php echo $v['c_name']?></option>
				<?php endforeach;?>		         
					</select>  
	====》子分类：<select name='c_two' id='childCat'>
						<option value='-1'>--选择子类--</option>
					</select>
	====》孙分类：<select name='cat_id' id='sunCat'>
						<option value='-1'>--选择子类--</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label">商品品牌：</td>
				<td>
					<select name="brand_id" onchange="hideBrandDiv()">
						<option value="-1">请选择...</option>
					<?php foreach($brands as $v):?>
						<option value="<?php echo $v['b_id']?>"><?php echo $v['b_name']?></option>
					<?php endforeach;?>
					</select>
				</td>
			</tr>
            
            <tr>
				<td class="label">本店售价：</td>
				<td><input type="text" name="shop_price" value="1010.00" size="20" onblur="priceSetted()">
				<input type="button" value="按市场价计算" onclick="marketPriceSetted()">
				<span class="require-field">*</span></td>
			</tr>
			<tr>
            <td class="label">市场价：</td>
            <td><input type="text" name="market_price" value="3010.00" size="20" onblur="priceSetted()"></td>
          </tr>

          <tr>
            <td class="label">促销价格：</td>
            <td><input type="text" name="promote_price" value="612.00" size="20">
              
            </td>
          </tr>
    
          
          <tr id="promote_4">
            <td class="label" id="promote_5">促销日期：</td>
            <td id="promote_6">
              <input name="promote_start_time" type="text" id="stime" size="12" value="2015-04-01" readonly="readonly"> ---到-- >>
              <input name="promote_end_time" type="text" id="etime" size="12" value="2015-6-30" readonly="readonly">
            </td>
          </tr>
          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="g_img" size="35">
              <img src="/Public/Admin/images/yes.gif" border="0">
                            
            </td>
          </tr>
          
        </tbody></table>

        <!-- 详细描述 -->

        <table width="90%" id="detail-table" style="display: none;">

          <tbody><tr>
            <td>
				<textarea name='g_desc' id='g_desc'></textarea>
            </td>
          </tr>
        </tbody></table>

        <!-- 其他信息 -->
        <table width="90%" id="mix-table" style="display: none;" align="center">
            <tbody>

          <tr>
            <td class="label">商品库存数量：</td>
            <td><input type="text" name="g_number" value="" size="20"><br></td>
          </tr>
          <tr>
            <td class="label">商品点击数量：</td>
            <td><input type="text" name="g_click" value="" size="20"><br></td>
          </tr>
         
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="is_best" value="1" checked="checked">精品 <input type="checkbox" name="is_new" value="1" checked="checked">新品 <input type="checkbox" name="is_hot" value="1" checked="checked">热销<input type="checkbox" name="is_promote" value="1" checked="checked">是否促销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="is_onsale" value="1" checked="checked"> </td>
          </tr>

          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="g_brief" cols="40" rows="3"></textarea></td>
          </tr>
          
        </tbody></table>

        <!-- 商品属性 -->
         <table width="90%" id="properties-table" style="display: none;" align="center">
			<tbody>
				<tr>
					<td class="label">商品类型：</td>
					<td>
						<select name="type_id" id='attrr' onchange="getAttrList(32)">
							<option value="-1">请选择商品类型</option>
						<?php foreach($types as $v):?>
							<option value="<?php echo $v['type_id']?>"><?php echo $v['type_name']?></option>
						<?php endforeach;?>
						</select><br>
						<span class="notice-span" style="display:block" id="noticeGoodsType">请选择商品的所属类型，进而完善此商品的属性</span>
					</td>
				</tr>


				<tr>
				<td id="tbody-goodsAttr" colspan="2" style="padding:0">
					<table width="100%" id="attrTable">
						<tbody id='attribues'>
								<!--存放ajax返回的属性值列表-->
						</tbody>
					</table>
					</td>
			 </tr>
        </tbody>
	</table>
        
        <!-- 商品相册 -->
        <table width="90%" id="gallery-table" style="display: none;" align="center">
          <tbody><tr>
            <td>
				<div id="gallery_41" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
                <a href="javascript:;" onclick="if (confirm('您确实要删除该图片吗？')) dropImg('41')">[-]</a><br>
                <a href="goods.php?act=show_image&amp;img_url=/Public/Admin/images/200905/goods_img/32_P_1242110760641.jpg" target="_blank">
                <img src="/Public/Admin/images/ecshop_logo.gif" width="100" height="100" border="0">
                </a><br>
              </div>
                          </td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td>
              <a href="javascript:;" onclick="addImg(this)">[+]</a>
             
              上传文件 <input type="file" name="imgs[]">-->商品图片信息
              
            </td>
          </tr>
        </tbody></table>

        <div class="button-div">
          <input type="submit" value=" 确定 " class="button">
          <input type="reset" value=" 重置 " class="button">
        </div>
      </form>
    </div>
</div>


<div id="footer">
	版权所有 &copy; 2006-2013 传智播客 - PHP培训 - 
</div>
<script type="text/javascript" src="/Public/Admin/js/tab.js"></script>
<script type="text/javascript">
	function addImg(obj){
      var src  = obj.parentNode.parentNode;
      var idx  = rowindex(src);
      var tbl  = document.getElementById('gallery-table');
      var row  = tbl.insertRow(idx + 1);
      var cell = row.insertCell(-1);
      cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  	}

    function removeImg(obj){
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('gallery-table');
      tbl.deleteRow(row);
  	}

   	function dropImg(imgId){
    	Ajax.call('goods.php?is_ajax=1&act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");
  	}

  	function dropImgResponse(result){
      if (result.error == 0){
          document.getElementById('gallery_' + result.content).style.display = 'none';
      }
  	}

</script>
</body>
</html>
<!--百度编辑器插件-->
<script type="text/javascript">
  
  UE.getEditor('g_desc', {
    "initialFrameWidth" : "600",
    "initialFrameHeight" : '200',
    "maximumWords" : 30000,
  });
</script>
<!--时间插件-->
<script type="text/javascript">
	$.datepicker.regional['zh-CN'] = {
	        clearText: '清除',
	        clearStatus: '清除已选日期',
	        closeText: '关闭',
	        closeStatus: '不改变当前选择',
	        prevText: '<上月',
	        prevStatus: '显示上月',
	        prevBigText: '<<',
	        prevBigStatus: '显示上一年',
	        nextText: '下月>',
	        nextStatus: '显示下月',
	        nextBigText: '>>',
	        nextBigStatus: '显示下一年',
	        currentText: '今天',
	        currentStatus: '显示本月',
	        monthNames: ['一月','二月','三月','四月','五月','六月', '七月','八月','九月','十月','十一月','十二月'],
	        monthNamesShort: ['一','二','三','四','五','六', '七','八','九','十','十一','十二'],
	        monthStatus: '选择月份',
	        yearStatus: '选择年份',
	        weekHeader: '周',
	        weekStatus: '年内周次',
	        dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
	        dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
	        dayNamesMin: ['日','一','二','三','四','五','六'],
	        dayStatus: '设置 DD 为一周起始',
	        dateStatus: '选择 m月 d日, DD',
	        dateFormat: 'yy-mm-dd',
	        firstDay: 1,
	        initStatus: '请选择日期',
	        isRTL: false
	    };
	$.datepicker.setDefaults($.datepicker.regional['zh-CN']);
	$('#stime').datepicker();
    	//开班时间
	$("#etime").datepicker();
</script>