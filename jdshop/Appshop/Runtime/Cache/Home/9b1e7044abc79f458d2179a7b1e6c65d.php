<?php if (!defined('THINK_PATH')) exit();?><!--取出数据库的分类栏目信息，并遍历到导航分类栏目-->
<?php
 $c=new \Model\CategoryModel(); $navs=$c->getNav(); $a=new \Model\ArctypeModel(); $footernavs=$a->getArc(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="/Public/Home/style/base.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/global.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/header.css" type="text/css">
<?php foreach ($css as $v):?>
	<link rel="stylesheet" href="/Public/Home/style/<?php echo $v;?>" type="text/css">
<?php endforeach;?>
	<link rel="stylesheet" href="/Public/Home/style/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/style/footer.css" type="text/css">

	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/header.js"></script>
<?php foreach ($js as $v):?>	
	<script type="text/javascript" src="/Public/Home/js/<?php echo $v;?>"></script>
<?php endforeach;?>
</head>
<body>
	<!-- 顶部导航 start -->
	<div class="topnav">
		<div class="topnav_bd w1210 bc">
			<div class="topnav_left">
				
			</div>
			<div class="topnav_right fr">
				<ul>

				<?php  if(session('?user')){ $user=session('user'); echo "<li>您好， 【 $user 】 欢迎来到聚鹿商城！[<a href='/index.php/Home/User/usercenter'>用户中心</a>]  [<a href='/index.php/Home/User/logout'>退出</a>] </li>"; }else{ echo "<li>您好，欢迎来到聚鹿！[<a href='/index.php/Home/Order/login'>登录</a>] [<a href='/index.php/Home/Order/reg'>免费注册</a>] </li>"; } ?>


					<li class="line">|</li>
					<li><a href='/index.php/Home/Order/index'>我的订单</a></li>
					<li class="line">|</li>
					<li>客户服务</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部导航 end -->
	
	<div style="clear:both;"></div>

	<!-- 头部 start -->
	<div class="header w1210 bc mt15">
		<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
		<div class="logo w1210">
			<h1 class="fl"><a href="index.html"><img src="/Public/Home/images/logo.png" alt="聚鹿商城"></a></h1>
			<!-- 头部搜索 start -->
			<div class="search fl">
				<div class="search_form">
					<div class="form_left fl"></div>
					<form action="" name="serarch" method="get" class="fl">
						<input type="text" class="txt" value="请输入商品关键字" /><input type="submit" class="btn" value="搜索" />
					</form>
					<div class="form_right fl"></div>
				</div>
				
				<div style="clear:both;"></div>

				<div class="hot_search">
					<strong>用户搜索:</strong>
					
					<a href="/index.php/Home/Goods/index/cid=1">Lenovo笔记本</a>
					<a href="/index.php/Home/Goods/index/cid=6">iphone 6</a>
					<a href="/index.php/Home/Goods/index/cid=11">小米5</a>
					<a href="/index.php/Home/Goods/index/cid=16">魅族手机</a>
					<a href="/index.php/Home/Goods/index/cid=18">蓝牙</a>
					<a href="/index.php/Home/Goods/index/cid=19">矿泉水</a>
					<a href="/index.php/Home/Goods/index/cid=0">查看所有商品</a>
					
				</div>
			</div>
			<!-- 头部搜索 end -->

			<!-- 用户中心 start-->
			<div class="user fl">
				<dl>
					<dt>
						<em></em>
						<a href="/index.php/Home/User/usercenter">用户中心</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							
				<?php  if(session('?user')){ $user=session('user'); echo "<li>您好， 【 ".$user." 】</li>"; }else{ echo "<li>您好，请[<a href='/index.php/Home/Order/login'>登录</a>] </li>"; } ?>
						</div>
						<div class="uclist mt10">
							<ul class="list1 fl">
								<li><a href="/index.php/Home/User/usercenter">用户信息></a></li>
								<li><a href="/index.php/Home/Order/index">我的订单></a></li>
								<li><a href="">收货地址></a></li>
								<li><a href="">我的收藏></a></li>
							</ul>

							<ul class="fl">
								<li><a href="">我的留言></a></li>
								<li><a href="">我的红包></a></li>
								<li><a href="/index.php/Home/Huodong/index">商城活动></a></li>
								<li><a href="">资金管理></a></li>
							</ul>

						</div>
						<div style="clear:both;"></div>
						<div class="viewlist mt10">
							<h3>最近浏览的商品：</h3>
							<ul>
								<li><a href=""><img src="/Public/Home/images/view_list1.jpg" alt="" /></a></li>
								<li><a href=""><img src="/Public/Home/images/view_list2.jpg" alt="" /></a></li>
								<li><a href=""><img src="/Public/Home/images/view_list3.jpg" alt="" /></a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<!-- 用户中心 end-->

			<!-- 购物车 start -->
			<div class="cart fl">
				<dl>
					<dt>
						<a href="/index.php/Home/cart/">去购物车结算</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							购物车中还没有商品，赶紧选购吧！
						</div>
					</dd>
				</dl>
			</div>
			<!-- 购物车 end -->
		</div>
		<!-- 头部上半部分 end -->
		
		<div style="clear:both;"></div>

		<!-- 导航条部分 start -->
		<div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl <?php echo $nav?'':'cat1'?>"> 
			<!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd <?php echo $nav?'':'off'?>">  
				<!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
				
				<div class="cat_bd <?php echo $nav?'':'none'?>">

				<?php foreach($navs as $v):?>			
					<div class="cat item1">
						<h3><a href="/index.php/Home/Goods/index/cid/<?php echo $v['c_id']; ?>"><?php echo $v['c_name']?></a> <b></b></h3>
						<div class="cat_detail">
						<?php foreach ($v['child'] as $vv):?>
							<dl class="dl_1st">
								<dt><a href="/index.php/Home/Goods/index/cid/<?php echo $vv['c_id']; ?>"><?php echo $vv['c_name']?></a></dt>
								<dd>
							<?php foreach($vv['child'] as $vvv):?>
									<a href="/index.php/Home/Goods/index/cid/<?php echo $vvv['c_id']; ?>"><?php echo $vvv['c_name']?></a>
							<?php endforeach;?>						
								</dd>
							</dl>
						<?php endforeach;?>
						</div>
					</div>
				<?php endforeach;?>

	

				</div>

			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="/index.php">首页</a></li>
					<li><a href="">品牌手机</a></li>
					<li><a href="">品牌家电</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="/index.php/Home/Huodong/snake">小游戏</a></li>
					<li><a href="/index.php/Home/Huodong/index">抽奖活动</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div>
		<!-- 首页导航条部分 end -->
	</div>
	<!-- 头部 	 end-->

	
	
	<div style="clear:both;"></div>

	<!-- 页面主体 start -->
	<div class="main w1210 bc mt10">
		<div class="crumb w1210">
			<h2><strong>我的XX </strong><span>> 我的订单</span></h2>
		</div>
		
		<!-- 左侧导航菜单 start -->
		<div class="menu fl">
			<h3>我的XX</h3>
			<div class="menu_wrap">
				<dl>
					<dt>订单中心 <b></b></dt>
					<dd class="cur"><b>.</b><a href="">我的订单</a></dd>
					<dd><b>.</b><a href="">我的关注</a></dd>
					<dd><b>.</b><a href="">浏览历史</a></dd>
					<dd><b>.</b><a href="">我的团购</a></dd>
				</dl>

				<dl>
					<dt>账户中心 <b></b></dt>
					<dd><b>.</b><a href="">账户信息</a></dd>
					<dd><b>.</b><a href="">账户余额</a></dd>
					<dd><b>.</b><a href="">消费记录</a></dd>
					<dd><b>.</b><a href="">我的积分</a></dd>
					<dd><b>.</b><a href="">收货地址</a></dd>
				</dl>

				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">返修/退换货</a></dd>
					<dd><b>.</b><a href="">取消订单记录</a></dd>
					<dd><b>.</b><a href="">我的投诉</a></dd>
				</dl>
			</div>
		</div>
		<!-- 左侧导航菜单 end -->

		<!-- 右侧内容区域 start -->
		<div class="content fl ml10">
			<div class="order_hd">
				<h3>我的订单</h3>
				<dl>
					<dt>便利提醒：</dt>
					<dd>待付款（0）</dd>
					<dd>待确认收货（0）</dd>
					<dd>待自提（0）</dd>
				</dl>

				<dl>
					<dt>特色服务：</dt>
					<dd><a href="">我的预约</a></dd>
					<dd><a href="">夺宝箱</a></dd>
				</dl>
			</div>

			<div class="order_bd mt10">
				<table class="orders">
					<thead>
						<tr>
							<th width="10%">订单号</th>
							<th width="20%">订单商品</th>
							<th width="10%">收货人</th>
							<th width="20%">订单金额</th>
							<th width="20%">下单时间</th>
							<th width="10%">订单状态</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="">852592106</a></td>
							<td><a href=""><img src="/Public/Home/images/order1.jpg" alt="" /></a></td>
							<td>王超平</td>
							<td>￥35.00 货到付款</td>
							<td>2013-11-12 16:28:14</td>
							<td>已取消</td>
							<td><a href="">查看</a> | <a href="">删除</a></td>
						</tr>
						<tr>
							<td><a href="">852571653</a></td>
							<td><a href=""><img src="/Public/Home/images/order2.jpg" alt="" /></a></td>
							<td>王超平</td>
							<td>￥35.00 在线支付</td>
							<td>2013-11-13 19:28:14</td>
							<td>已完成</td>
							<td><a href="">查看</a> | <a href="">删除</a></td>
						</tr>
						<tr>
							<td><a href="">471196680</a></td>
							<td><a href=""><img src="/Public/Home/images/order2.jpg" alt="" /></a></td>
							<td>王超平</td>
							<td>￥169.00 货到付款</td>
							<td>2013-02-20 23:00:00</td>
							<td>已完成</td>
							<td><a href="">查看</a> | <a href="">删除</a></td>
						</tr>
					</tbody> 
				</table>
			</div>
		</div>
		<!-- 右侧内容区域 end -->
	</div>
	<!-- 页面主体 end-->

	<div style="clear:both;"></div>

	


	<!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt10">
		<?php foreach($footernavs as $k=>$v):?>
			<div class="bnav<?php echo $k+1;?>">
				<h3><b></b> <em><?php echo $v['type_name']?></em></h3>
				<ul>
				<?php foreach($v['child'] as $vv):?>
					<li><a href=""><?php echo $vv['type_name']?></a></li>
				<?php endforeach;?>
				</ul>
			</div>
		<?php endforeach;?>
	</div>
	<!-- 底部导航 end -->

	<div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于聚鹿</a> |
			<a href="">联系聚鹿</a> |
			<a href="">聚鹿招聘</a> |
			<a href="">入驻聚鹿</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">聚鹿论坛</a>
		</p>
		<p class="copyright">
			 © 2004-2015 聚鹿网上商城 版权所有，QQ:4873473，  ICP备案证书号:粤ICP证011111号 
		</p>
		<p class="auth">
			<a href=""><img src="/Public/Home/images/xin.png" alt="" /></a>
			<a href=""><img src="/Public/Home/images/kexin.jpg" alt="" /></a>
			<a href=""><img src="/Public/Home/images/police.jpg" alt="" /></a>
			<a href=""><img src="/Public/Home/images/beian.gif" alt="" /></a>
		</p>
	</div>
	<!-- 底部版权 end -->

</body>
</html>