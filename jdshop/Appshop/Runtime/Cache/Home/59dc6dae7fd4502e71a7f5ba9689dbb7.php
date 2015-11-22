<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?php echo ($data["bid"]); echo ($data["name"]); echo ($data["color"]); echo ($data["version"]); ?></title>
 	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="/Public/Home/css/pshow.css" />
 	<link rel="stylesheet" type="text/css" href="/Public/Home/css/item.css" />
 	<link rel="stylesheet" type="text/css" href="/Public/Home/css/base.css" />
 </head>
 <body>
 	<div id="shortcut-2013">
    <div class="w">
        <ul class="fl lh">
            <li class="fore1 ld"><b></b><a href="#">收藏京东</a>
            </li>
        </ul>
        <script type="text/javascript">
            function login(){
                window.location="/index.php/Home/public/login";
            }
            function regist(){
                 window.location="/index.php/Home/public/reg";
            }
        </script>
        <ul class="fr lh">
            <?php if(!empty($_SESSION['user']['username'])): ?><li class="fore1" id="loginbar">您好！ <?php echo ($_SESSION["user"]['username']); ?>----欢迎来到京东！&nbsp;<a href="/index.php/Home/Public/logout">[退出]</a>
                </li>
                <li class="fore2 ld">
                    <s></s>
                    <a href="/index.php/Home/order/orderlist" rel="nofollow">我的订单</a>
                </li>
            <?php else: ?>
                <li class="fore1" id="loginbar">您好！ 欢迎来到京东！<a href="javascript:login()">[登录]</a>&nbsp;<a href="javascript:regist()">[免费注册]</a>
                </li>
                <li class="fore2 ld">
                    <s></s>
                    <a href="/index.php/Home/public/login" rel="nofollow">我的订单</a>
                </li><?php endif; ?>
            <li class="fore3 ld menu" id="app-jd" data-widget="dropdown">
                <s></s><i></i>
                <span class="outline"></span>
                <span class="blank"></span>
                <a href="#" target="_blank">手机京东</a><b></b>
                <div class="dd lh">
                    <div class="qr-info"></div>
                    <div class="qr-item qr-jd-app">
                        <div class="qr-img">
                            <img id="app-qrcode-img" data-img="1" trigger-lazy-img="done" class="err-product" width="76" height="76" alt="手机京东" src="/Public/Home/images/index/54237c80Nbc2c77a4.jpg">
                        </div>
                        <div class="qr-ext">
                            <strong>京东客户端</strong>
                            <a clstag="homepage|keycount|home2013|01d01" href="javascript:void(0)" target="_blank" class="btn-app-apple"></a>
                            <a clstag="homepage|keycount|home2013|01d02" href="javascript:void(0)" target="_blank" class="btn-app-android"></a>
                        </div>
                    </div>
                    <div class="qr-item qr-jd-jr">
                        <div class="qr-img">
                            <img id="app-qrcode-img" data-img="1" trigger-lazy-img="done" class="err-product" width="76" height="76" alt="网银钱包客户端" src="/Public/Home/images/index/rBEhUlNfWZwIAAAAAAEASBZlCNAAAMoggAwdV8AAQBg657.png">
                        </div>
                        <div class="qr-ext">
                            <strong>网银钱包客户端</strong>
                            <a clstag="homepage|keycount|home2013|01d03" href="javascript:void(0)" target="_blank" class="btn-app-apple"></a>
                            <a clstag="homepage|keycount|home2013|01d04" href="javascript:void(0)" target="_blank" class="btn-app-android"></a>
                        </div>
                    </div>
                </div>
            </li>
            <script type="text/javascript">
                    $("#app-jd").mouseover(function(){
                        $(this).addClass("hover");
                    });
                    $("#app-jd").mouseout(function(){
                        $(this).removeClass("hover");
                    });
            </script>
            <li class="fore4 ld menu" id="biz-service" data-widget="dropdown">
                <s></s>
                <span class="outline"></span>
                <span class="blank"></span>
                客户服务
                <b></b>
                <div class="dd">
                    <div><a href="#" target="_blank">帮助中心</a>
                    </div>
                    <div><a href="#" target="_blank" rel="nofollow">售后服务</a>
                    </div>
                    <div><a href="#" target="_blank" rel="nofollow">在线客服</a>
                    </div>
                    <div><a href="#" target="_blank" rel="nofollow">投诉中心</a>
                    </div>
                    <div><a href="#" target="_blank">客服邮箱</a>
                    </div>
                </div>
            </li>
             <script type="text/javascript">
                    $("#app-service").mouseover(function(){
                        $(this).addClass("hover");
                    });
                    $("#app-service").mouseout(function(){
                        $(this).removeClass("hover");
                    });
            </script>
        </ul>
        <span class="clr"></span>
    </div>
</div>
 	<!-- 导航栏js -->
<style type="text/css" src="/Public/Home/css/index.css"></style>
<script type="text/javascript" src="/Public/Home/js/header.js"></script>
<div id="o-header-2013">
    <div class="w" id="header-2013">
        <div id="url" style="display:none">/index.php/Home</div>
        <div id="root" style="display:none"></div>
        <div id="logo-2013" class="ld"><a href=""><b></b><img src="/Public/Home/images/logo-201305.png" width="270" height="60" alt="商城"></a>
        </div>
        <!--logo end-->
        <div id="search-2013">
            <div class="i-search ld">
                <ul id="shelper" class="hide">
                </ul>
                <div class="form">
                    <input type="text" class="text" accesskey="s" id="key" autocomplete="off" onkeydown="">
                    <input type="button" value="搜索" class="button" onclick="search();return false;">
                </div>
            </div>
            <div id="hotwords"></div>
        </div>
        <!--search end-->

        <div id="my360buy-2013">
            <dl class="" load="1">
                <dt class="ld">
                    <s></s><a href="#">我的商城</a><b></b>
                </dt>
                <dd>
                    <div class="loading-style1"><b></b>加载中，请稍候...</div>
                </dd>
            </dl>
        </div>
        <!--my360buy end-->
        <div id="settleup-2013">
            <dl class="" load="1">
                <dt class="ld">
                    <s></s>
                    <span class="shopping">
                        <span id="shopping-amount">0</span>
                    </span><a href="/index.php/Home/cart" id="settleup-url">去购物车结算</a>  <b></b> 
                </dt>
                <dd>
                    <div class="prompt">
                        <div class="loading-style1"><b></b>加载中，请稍候...</div>
                    </div>
                </dd>
            </dl>
        </div>
        <!--settleup end-->
    </div>
    <!--header end-->
    <div class="wo">
        <div id="nav-fixed">
            <div id="treasure"></div>
            <ul id="navitems-fixed">
                <li class="curr" id="nav-home"><a href="">手机首页</a>
                </li>
                <li class="fore2" id="nav-fashion"><a href="/index.php/Home/search/index/bid/1">苹果</a>
                </li>
                <li class="fore3" id="nav-chaoshi"><a href="/index.php/Home/search/index/bid/3">魅族</a>
                </li>
                <li class="fore4" id="nav-tuan"><a href="/index.php/Home/search/index/bid/4">小米</a>
                </li>
                <li class="fore5" id="nav-auction"><a href="/index.php/Home/search/index/bid/8">联想</a>
                </li>
                <li class="fore6" id="nav-shan"><a href="/index.php/Home/search/index/bid/6">三星</a>
                </li>
                <li class="fore7" id="nav-jinrong"><a href="/index.php/Home/search/index/bid/2">华为</a>
                </li>
                <li class="fore8" id="nav-jinrong"><a href="/index.php/Home/huodong/index">活动</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<style>
#navitems-fixed .curr a,
#navitems-fixed .hover a {
    background: none repeat scroll 0% 0% #A40000;
}
.wo {
    width: 100%     ;
    overflow: hidden;
    margin: 0px auto;
}
#nav-fixed {
    margin-bottom: 0;
    height: 40px;
    padding-left: 210px;
    margin-bottom: 0px;
    background: #E4393C;
    list-style: none outside none;
}
#navitems-fixed li {
    list-style-type: none;
    float: left;
    position: relative;
    width: 83px;
    left:-10px;
}
#navitems-fixed li a {
    width: 83px;
    height: 40px;
    top: 0px;
    left: 0px;
    width: 85px;
    text-align: center;
    color: #FFF;
    font: 700 15px/40px"microsoft yahei";
    text-decoration: none;
    display: block;
}
#treasure {
    position: absolute;
    right: 0;
    top: 0;
}
#navitems-fixed {
    background: -moz-linear-gradient(top, #E64346, #E13335);
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#E64346), to(#E13335));
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#E64346", endColorstr="#E13335");
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#E64346", endColorstr="#E13335")";
}
.fixed {
    position: absolute;
    z-index: 20;
    margin: 0px auto;
}
</style>

    <link rel="stylesheet" type="text/css" href="/Public/Home/css/myjd.common.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/myjd.order.css" media="all" />
 	<div id="main">
 		
 		<div class="part1">
 			<div class="p1l">
 				<div class="bpic">
 					<img src="/<?php echo ($photo[0]); ?>" alt="" id="b_img">
 				</div>
 				<div class="spic">
 					<?php if(is_array($photo)): $k = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><img src="/<?php echo ($vo); ?>" alt="" num="<?php echo ($k); ?>" class="spic<?php echo ($k); ?>">
 						<script type="text/javascript">
 							$(".spic<?php echo ($k); ?>").mouseover(function(){
 								$("#b_img").replaceWith('<img src="/<?php echo ($vo); ?>" alt="" id="b_img">')
 							});							
 						</script><?php endforeach; endif; else: echo "" ;endif; ?>
 				</div>
 			</div>
 			<div class="p1r">
 				<span class="name">
 						<h1><?php echo ($data["bid"]); ?>  <?php echo ($data["name"]); ?>(<?php echo ($data["color"]); ?>) <?php echo ($data["version"]); ?> </h1>
 						<strong><?php echo ($data["specials"]); ?> 飞速4G/3G网络，快人一步！</strong>								
 				</span>
 				<!-- name end -->
 				<div class="clearfix">
 					<ul id="summary">
 						<li id="summary-price">
 							<div class="dt">京 东 价：</div>
 							<div class="dd">
 								<strong class="p-price" id="jd-price">￥<?php echo ($data["price"]); ?></strong>	
 							</div>
 						</li>
 						<li id="summary-market">
 							<div class="dt">商品编号：</div>
 							<div class="dd">
 								<span><?php echo ($data["Id"]); ?></span>
 							</div>
 						</li>
 						<li id="summary-number">
 							<div class="dt">商品库存：</div>
 							<div class="dd">
 								<span><?php echo ($data["number"]); ?> 台</span>
 							</div>
 						</li>
 						<li id="summary-grade">
							<div class="dt">商品评分：</div>
							<div class="dd">
								<span class="star" num="<?php echo ($data["score"]); ?>"></span>
								<a href="#product-detail-4" clstag="shangpin|keycount|product|pingjiabtn" style="float: left;">(已有1325<?php echo ($data["comment"]); ?>人评论)</a>
							</div>
						</li>
 					</ul>
 					<ul id="choose" clstag="shangpin|keycount|product|choose">
						<li id="choose-color" class="choose-color-shouji">
							<div class="dt">选择颜色：</div>
							<div class="dd">
							<?php if(is_array($color)): $i = 0; $__LIST__ = $color;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$color): $mod = ($i % 2 );++$i;?><div class="item" pid="<?php echo ($color["color"]); ?>">
									<script type="text/javascript">
										$("#choose-color .item[pid='<?php echo ($se_co); ?>']").addClass("selected1");
										$("#choose-color .item[pid='<?php echo ($se_co); ?>']").css("borderColor","red");
									</script>
									<b></b>
									<a href="/index.php/Home/Goods/index/name/<?php echo ($data["name"]); ?>/color/<?php echo ($color["color"]); ?>" title="<?php echo ($color["color"]); ?>">
										<img data-img="1" src="/<?php echo ($color["pic"]); ?>" width="25" height="25" alt="<?php echo ($data["color"]); ?> ">
										<i><?php echo ($color["color"]); ?></i>
									</a>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li id="choose-version" class="">
							<div class="dt">选择版本：</div>
							<div class="dd">
								<?php if(is_array($version)): $k = 0; $__LIST__ = $version;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ve): $mod = ($k % 2 );++$k;?><div class="item" pid="<?php echo ($ve); ?>">
									<script type="text/javascript">
										$("#choose-version .item[pid='<?php echo ($se_ve); ?>']").addClass("selected1");
										$("#choose-version .item[pid='<?php echo ($se_ve); ?>']").css("borderColor","red");
										<?php if(is_array($no_version)): $i = 0; $__LIST__ = $no_version;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no_version): $mod = ($i % 2 );++$i;?>$("#choose-version .item[pid=<?php echo ($no_version); ?>]").hide();<?php endforeach; endif; else: echo "" ;endif; ?>
									</script>
										<b></b>
										<a href="/index.php/Home/Goods/index/name/<?php echo ($data["name"]); ?>/version/<?php echo ($ve); ?>/color/<?php echo ($se_co); ?>" title="<?php echo ($data["carrieroperator"]); ?>(<?php echo ($data["rom_size"]); ?> ROM)" style="cursor: pointer;"><?php echo ($ve); ?></a>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>								
							</div>
						</li>
						<li id="summary-service">
							<div class="dt">
								服　　务：</div>
							<div class="dd">
								由 商城 发货并提供售后服务。
								<span id="promise-ico">
									支持：
									<a href="http://psfw.jd.com/help/distribution-768-1-2901-4135-0-1413266782037.html" target="_blank" class="sendpay_211" title="上午下单，下午送达">　</a>
									<a href="http://psfw.jd.com/help/distribution-768-1-2901-4135-0-1413266782037.html" target="_blank" class="jingdou_xiankuan" title="百元以上自营实物订单，先款多赚京豆">　</a>
									<a href="http://psfw.jd.com/help/distribution-768-1-2901-4135-0-1413266782037.html" target="_blank" class="special_ziti" title="自提免运费，支持自提点，自助提货柜，移动自提车等自提服务。">　</a>
								</span>
							</div>
						</li>
						<li id="choose-btns">
							<div class="choose-amount">
								<div class="wrap-input">
								<a class="btn-reduce">-</a>
								<a class="btn-add">+</a>
								<script type="text/javascript">
									$(".btn-reduce").click(function(){
										var a = $("#buy-num").attr("value");
										if(a>1){
											$("#buy-num").attr("value",--a);	
										}
										url_change(a);

									});
									$(".btn-add").click(function(){
										var a = $("#buy-num").attr("value");
										$("#buy-num").attr("value",++a);
										url_change(a);

									})

									$("#buy-num").live("blur",function(){
										var a = $("#buy-num").attr("value");
										if(a<0){a=1;}
										url_change(a);
									})
									
									function url_change(a){
										$("#choose-btn-append a").attr("href","/index.php/Home/cart/add/Id/<?php echo ($data["Id"]); ?>/num/"+a);
										$(".nav-minicart-btn>a").attr("href","/index.php/Home/cart/add/Id/<?php echo ($data["Id"]); ?>/num/"+a);
									}
								</script>
								<input class="text" id="buy-num" value="1">
								</div>
							</div>
							<div id="choose-btn-append" class="btn">
								<a class="btn-append " id="InitCartUrl" href="/index.php/Home/cart/add/Id/<?php echo ($data["Id"]); ?>/num/1">
									加入购物车
									<b></b>
								</a>
							</div>
						</li>
					</ul>
 				</div>
 			</div>
 		</div>                      
 		<div class="part2">
 			<div class="p2l">
 				<div class="left">
					<div id="view-buy" class="m m2 related-buy hide" style="display: block;">
						<div class="mt">
							<h2>新品推荐</h2>
						</div>
						<div class="mc">
							<ul>
							<?php if(is_array($pro_like)): $i = 0; $__LIST__ = $pro_like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fore<?php echo ($i); ?>">
									        <div class="p-img">
									                  <a target="_blank" title="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" href="/index.php/Home/goods/index/id/<?php echo ($vo["Id"]); ?>"><img height="100" width="100" alt="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" src="/<?php echo ($vo["picture"]); ?>" class="loading-style2"></a>
									        </div>      
									        <div class="p-name">
									                  <a target="_blank" title="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" href="/index.php/Home/goods/index/id/<?php echo ($vo["Id"]); ?>"><?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?></a>      
									        </div>      
									        <div class="p-price">
									                  <strong class="J-p-1199748">￥<?php echo ($vo["price"]); ?></strong>      
									        </div>  
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
					<div id="view-buy" class="m m2 related-buy hide" style="display: block;">
						<div class="mt">
							<h2>浏览历史</h2>
						</div>
						<div class="mc">
							<ul>
							<?php if(is_array($history)): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fore<?php echo ($i); ?>">
									        <div class="p-img">
									                  <a target="_blank" title="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" href="/index.php/Home/goods/index/id/<?php echo ($vo["Id"]); ?>"><img height="100" width="100" alt="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" src="/<?php echo ($vo["picture"]); ?>" class="loading-style2"></a>
									        </div>      
									        <div class="p-name">
									                  <a target="_blank" title="<?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?>" href="/index.php/Home/goods/index/id/<?php echo ($vo["Id"]); ?>"><?php echo ($vo["name"]); ?>(<?php echo ($vo["color"]); ?>)<?php echo ($vo["version"]); ?></a>      
									        </div>      
									        <div class="p-price">
									                  <strong class="J-p-1199748">￥<?php echo ($vo["price"]); ?></strong>      
									        </div>  
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>
				</div>
					<!--view-buy end-->
			</div>
 			
 			<div class="p2r">
 				<div id="product-detail" class="m m1" data-widget="tabs" load="true">
					<div class="float-nav-wrap" style="height: 30px;">
					<script type="text/javascript">	
				 		$(window).scroll( function() {
				 			if($(this).scrollTop()>733){
				 				$("#product-detail>.float-nav-wrap>.mt").addClass("nav-fixed");
				 				$("#product-detail>.float-nav-wrap>.mt").css("top","45px");
				 			}else{
				 				$("#product-detail>.float-nav-wrap>.mt").removeClass("nav-fixed");
				 			}
				 		} );
				 	</script>
						<div class="mt" >
							<ul class="tab">
								<li class="sel" pro="1"><a href="" onclick="javascript:return false;" class="a_hover">商品介绍</a></li>
								<li pro="2"><a href="" onclick="javascript:return false;">规格参数</a></li>
								<li pro="3"><a href="" onclick="javascript:return false;">包装清单</a></li>
								<li pro="4"><a href="" onclick="javascript:return false;">商品评价(<span style="color:blue;">1325<?php echo ($data["score_num"]); ?></span>)</a></li>
								<li pro="5"><a href="" onclick="javascript:return false;">售后保障</a></li>
							</ul>
							<script type="text/javascript">
								$(".tab>li").click(function(){
									// $(this).css()
									$(".tab>li").removeClass("sel");
									$(this).addClass("sel");
									$(window).scrollTop(745);
									var a = $(this).attr("pro");
									if(a==1){
										$("#product-detail-1").removeClass("hide");
										$("#product-detail-1").css("display","block");
										$("#product-detail-2").css("display","");
										$("#product-detail-2").addClass("hide");
										$("#product-detail-3").css("display","");
										$("#product-detail-3").addClass("hide");
										$("#product-detail-4").css("display","");
										$("#product-detail-4").addClass("hide");
										$("#product-detail-5").css("display","");
										$("#product-detail-5").addClass("hide");
									}else if(a==2){
										$("#product-detail-2").removeClass("hide");
										$("#product-detail-2").css("display","block");
										$("#product-detail-1").css("display","none");
										$("#product-detail-1").addClass("hide");
										$("#product-detail-3").css("display","");
										$("#product-detail-3").addClass("hide");
										$("#product-detail-4").css("display","");
										$("#product-detail-4").addClass("hide");
										$("#product-detail-5").css("display","");
										$("#product-detail-5").addClass("hide");
									}else if(a==3){
										$("#product-detail-3").removeClass("hide");
										$("#product-detail-3").css("display","block");
										$("#product-detail-1").css("display","none");
										$("#product-detail-1").addClass("hide");
										$("#product-detail-2").css("display","");
										$("#product-detail-2").addClass("hide");
										$("#product-detail-4").css("display","");
										$("#product-detail-4").addClass("hide");
										$("#product-detail-5").css("display","");
										$("#product-detail-5").addClass("hide");
									}else if(a==4){
										$("#product-detail-4").removeClass("hide");
										$("#product-detail-4").css("display","block");
										$("#product-detail-1").css("display","none");
										$("#product-detail-1").addClass("hide");
										$("#product-detail-3").css("display","");
										$("#product-detail-3").addClass("hide");
										$("#product-detail-2").css("display","");
										$("#product-detail-2").addClass("hide");
										$("#product-detail-5").css("display","");
										$("#product-detail-5").addClass("hide");
									}else if(a==5){
										$("#product-detail-5").removeClass("hide");
										$("#product-detail-5").css("display","block");
										$("#product-detail-1").css("display","none");
										$("#product-detail-1").addClass("hide");
										$("#product-detail-3").css("display","");
										$("#product-detail-3").addClass("hide");
										$("#product-detail-4").css("display","");
										$("#product-detail-4").addClass("hide");
										$("#product-detail-2").css("display","");
										$("#product-detail-2").addClass("hide");
									}
								});
							</script>
							<div id="nav-minicart">
			               			<div class="nav-minicart-inner">
			               			<script type="text/javascript">
									$(".nav-minicart-inner").mouseover(function(){
										$(".nav-minicart-con").css("display","block");
									}).mouseout(function(){
										$(".nav-minicart-con").css("display","none");
									});
								</script>
									<div class="nav-minicart-btn ">
										<a  href="/index.php/Home/cart/add/Id/<?php echo ($data["Id"]); ?>/num/1" clstag="shangpin|keycount|product|floatebuy">加入购物车</a>
									</div>
							       	<div class="nav-minicart-con">
					                       	<div class="p-img">
					                                <img src="/<?php echo ($photo[0]); ?>" data-img="1" width="100" height="100">
										</div>
				                      			<div class="p-name">
				                      				<a href="/index.php/Home/Goods/index/id/<?php echo ($data["Id"]); ?>"><?php echo ($data["bid"]); ?>  <?php echo ($data["name"]); ?>(<?php echo ($data["color"]); ?>) <?php echo ($data["version"]); ?></a>
				                      			</div>
				                            		<div class="p-price">
				                                		<em>商城价：</em>
		                           			  		 <strong class="p-price" id="mini-jd-price">￥<?php echo ($data["price"]); ?></strong>
		                     			   		</div>
		                     			 	</div>
		               				   	<div class="clb"></div>
		                  			</div>
		                			</div>
						</div>
					</div>
					<div class="mc" id="product-detail-1">
							<?php echo ($data["dog"]); ?>
					</div>
					<div class="mc hide" data-widget="tab-content" id="product-detail-2">
						<?php echo ($data["sap"]); ?>
					</div>
					<div class="mc hide" id="product-detail-3">
						<?php echo ($data["p_list"]); ?>
					</div>
					<div id="product-detail-4" class="mc">
					    <div class="mt">
					        <ul class="tab">
					            <li data-widget="tab-item" class="curr" clstag="shangpin|keycount|product|allpingjia"><a href="javascript:;">全部评价<em>(16540)</em></a>
					            </li>
					            <li data-widget="tab-item" clstag="shangpin|keycount|product|haoping"><a href="javascript:;">好评<em>(15757)</em></a>
					            </li>
					            <li data-widget="tab-item" clstag="shangpin|keycount|product|zhongping"><a href="javascript:;">中评<em>(447)</em></a>
					            </li>
					            <li data-widget="tab-item" clstag="shangpin|keycount|product|chaping"><a href="javascript:;">差评<em>(336)</em></a>
					            </li>
					            <li data-widget="tab-item" clstag="shangpin|keycount|product|shaidantab"><a href="javascript:;">有晒单的评价<em>(678)</em></a>
					            </li>
					            <li class="tab-last"></li>
					        </ul>
					        <div id="comment-sort" class="extra">
					            <select>
					                <option value="3">热度排序</option>
					                <option value="1">时间排序</option>
					            </select>
					        </div>
					    </div>
					    <div id="comment-0" class="mc" data-widget="tab-content">
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <img height="50" width="50" upin="147723149" src="http://misc.360buyimg.com/lib/img/u/b62.gif" alt="zflovectt">
					                </div>
					                <div class="u-name">z***t</div>
					                <span class="u-level">
					                    <span style="color:#088000">金牌会员</span>
					                    <span class="u-address">广东</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_90dd380e-ded8-4127-b1ef-545fc95883d6_1.html" target="_blank">2014-09-28 11:05</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_90dd380e-ded8-4127-b1ef-545fc95883d6_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="2825134" class="comm-tags" href="#none">
					                                <span>外观漂亮</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825135" class="comm-tags" href="#none">
					                                <span>音质好</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>还是不错的，价格也还可以接受</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-07-31</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="433759641" href="#none">回复(<em>128</em>)</a> 
					                    <div class="useful fr" id="90dd380e-ded8-4127-b1ef-545fc95883d6"> <a name="agree" class="btn-agree" title="51" href="#none">有用(51)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="4" href="#none">没用(4)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="z***t" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-433759641" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">z***t ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="zflovectt" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="433759641">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="128" data-name="jd133928bfs" data-uid="126936560">
					                    <strong>128</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/126936560-1-1.html">                              jd133928bfs                          </a> ：</span>
					                            <span class="u-con">会不会发热很严重啊</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 15:14</span> <a class="p-bfc btn-toggle hl_blue" data-id="33221462" href="#none" style="visibility: hidden;">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33221462" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd133928bfs：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd133928bfs" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="33221462">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="127" data-name="jd138133ixe" data-uid="494010678">
					                    <strong>127</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/494010678-1-1.html">                              jd138133ixe                          </a> ：</span>
					                            <span class="u-con">求解，怎么分期！！</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 11:59</span> <a class="p-bfc btn-toggle hl_blue" data-id="33214362" href="#none" style="visibility: hidden;">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33214362" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd138133ixe：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd138133ixe" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="33214362">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="126" data-name="jd182592eau" data-uid="452795618">
					                    <strong>126</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/452795618-1-1.html">                              jd182592eau                          </a> ：</span>
					                            <span class="u-con">你能用4G吗 我怎么用不了</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 11:44</span> <a class="p-bfc btn-toggle hl_blue" data-id="33211762" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33211762" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd182592eau：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd182592eau" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="33211762">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="125" data-name="jd_5f0d78ffdb7e5" data-uid="31050836">
					                    <strong>125</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/31050836-1-1.html">                              jd_5f0d78ffdb7e5                          </a> ：</span>
					                            <span class="u-con">看贴总是不回，一直没提升等级和增加经验；现在我明白了，反正回贴可以升级，也可以赚经验，而升级又需要经验，我就把这句话复制下来，遇贴就回，捞经验就闪</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 10:48</span> <a class="p-bfc btn-toggle hl_blue" data-id="33205445" href="#none" style="visibility: hidden;">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33205445" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_5f0d78ffdb7e5：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_5f0d78ffdb7e5" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="33205445">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="124" data-name="班服T恤订做" data-uid="111440448">
					                    <strong>124</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/111440448-1-1.html">                              班服T恤订做                          </a> ：</span>
					                            <span class="u-con">看贴总是不回，一直没提升等级和增加经验；现在我明白了，反正回贴可以升级，也可以赚经验，而升级又需要经验，我就把这句话复制下来，遇贴就回，捞经验就闪</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 10:31</span> <a class="p-bfc btn-toggle hl_blue" data-id="33205410" href="#none" style="visibility: hidden;">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33205410" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">班服T恤订做：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="班服T恤订做" data-guid="90dd380e-ded8-4127-b1ef-545fc95883d6" data-replyid="33205410">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="ac"> <a class="hl_blue" href="http://club.jd.com/repay/1023433_90dd380e-ded8-4127-b1ef-545fc95883d6_1.html" title="查看全部回复" target="_blank">查看全部回复&gt;&gt;</a> 
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/30250893.html" target="_blank">
					                        <img height="50" width="50" upin="雅虎购物吧" src="http://storage.jd.com/i.imageUpload/d1c5bba2b9baceefb0c931333739323039323238353335_sma.jpg" alt="雅虎购物吧">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/30250893.html" target="_blank">           雅虎购物吧 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:#088000">金牌会员</span>
					                    <span class="u-address">北京</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_785626f6-c127-42d5-a1ab-4e15d24a5242_1.html" target="_blank">2014-09-28 11:02</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_785626f6-c127-42d5-a1ab-4e15d24a5242_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="2825074" class="comm-tags" href="#none">
					                                <span>信号稳定</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825075" class="comm-tags" href="#none">
					                                <span>系统流畅</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825076" class="comm-tags" href="#none">
					                                <span>外观漂亮</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825077" class="comm-tags" href="#none">
					                                <span>分辨率高</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>刚才查了苹果客服4006272273，证明是国行正品，比水机市场价格优惠！</dd>
					                    </dl>
					                    <dl>
					                        <dt>用户晒单：</dt>
					                        <dd>
					                            <div class="comment-show-pic">
					                                <table cellspacing="10">
					                                    <tbody>
					                                        <tr>
					                                            <td>
					                                                <a class="comment-show-pic-wrap" href="http://club.jd.com/bbsDetail/1023433_df091aed-525c-4d7b-ac70-8d70340788d0_1.html" target="_blank" clstag="shangpin|keycount|product|shaipic">
					                                                    <img alt="" src="http://img30.360buyimg.com/shaidan/s128x96_jfs/t358/286/596352558/35659/682e5896/54277a78N21538667.jpg">
					                                                </a>
					                                            </td>
					                                            <td>
					                                                <a class="comment-show-pic-wrap" href="http://club.jd.com/bbsDetail/1023433_df091aed-525c-4d7b-ac70-8d70340788d0_1.html" target="_blank" clstag="shangpin|keycount|product|shaipic">
					                                                    <img alt="" src="http://img30.360buyimg.com/shaidan/s128x96_jfs/t274/202/872744188/35659/682e5896/54277a81Nb7f372c8.jpg">
					                                                </a>
					                                            </td>
					                                            <td>
					                                                <a class="comment-show-pic-wrap" href="http://club.jd.com/bbsDetail/1023433_df091aed-525c-4d7b-ac70-8d70340788d0_1.html" target="_blank" clstag="shangpin|keycount|product|shaipic">
					                                                    <img alt="" src="http://img30.360buyimg.com/shaidan/s128x96_jfs/t397/130/644044249/35595/838a8a23/54277a85N694fcf6c.jpg">
					                                                </a>
					                                            </td>
					                                        </tr>
					                                    </tbody>
					                                </table>
					                                <span clstag="shangpin|keycount|product|shaitext">
					                                    <em class="fl" style="color:#9C9A9C;margin-right:5px;">共3张图片</em><a href="http://club.jd.com/bbsDetail/1023433_df091aed-525c-4d7b-ac70-8d70340788d0_1.html" target="_blank" class="p-simsun">查看晒单&gt;</a>
					                                </span>
					                            </div>
					                        </dd>
					                        <div class="dl-extra">
					                            <dl>
					                                <dt>颜色：</dt>
					                                <dd>金</dd>
					                            </dl>
					                            <dl>
					                                <dt>型号：</dt>
					                                <dd>移动4G(16G ROM)</dd>
					                            </dl>
					                        </div>
					                        <s class="clr"></s>
					                        <dl>
					                            <dt>购买日期：</dt>
					                            <dd>2014-09-27</dd>
					                        </dl>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="433755061" href="#none">回复(<em>49</em>)</a> 
					                    <div class="useful fr" id="785626f6-c127-42d5-a1ab-4e15d24a5242"> <a name="agree" class="btn-agree" title="16" href="#none">有用(16)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="1" href="#none">没用(1)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="雅虎购物吧" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-433755061" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">雅虎购物吧 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="雅虎购物吧" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="433755061">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="49" data-name="jd_韩妮Li" data-uid="76239506">
					                    <strong>49</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/76239506-1-1.html">                              jd_韩妮Li                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/1046526-1-1.html">280031088-</a> ：</span>
					                            <span class="u-con">really？双11会降么</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 12:09</span> <a class="p-bfc btn-toggle hl_blue" data-id="33215204" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33215204" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_韩妮Li：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_韩妮Li" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="33215204">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="48" data-name="jd_韩妮Li" data-uid="76239506">
					                    <strong>48</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/76239506-1-1.html">                              jd_韩妮Li                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/1046526-1-1.html">280031088-</a> ：</span>
					                            <span class="u-con">reall？双11会降价吗</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 12:09</span> <a class="p-bfc btn-toggle hl_blue" data-id="33212343" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33212343" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_韩妮Li：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_韩妮Li" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="33212343">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="47" data-name="AD1988" data-uid="12532025">
					                    <strong>47</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/12532025-1-1.html">                              AD1988                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/1046526-1-1.html">280031088-</a> ：</span>
					                            <span class="u-con">再降价恐怕就全部是官方翻新机了，估计现在已经是最后一批新机器了，就像4S，现在的全部是官方翻新机，只有买错，没有卖错的，</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-20 18:37</span> <a class="p-bfc btn-toggle hl_blue" data-id="33184206" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33184206" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">AD1988：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="AD1988" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="33184206">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="46" data-name="尼玛俊" data-uid="42964092">
					                    <strong>46</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/42964092-1-1.html">                              尼玛俊                          </a> ：</span>
					                            <span class="u-con">是正的</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-20 16:28</span> <a class="p-bfc btn-toggle hl_blue" data-id="33178531" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33178531" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">尼玛俊：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="尼玛俊" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="33178531">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="45" data-name="jd_1246841" data-uid="128774660">
					                    <strong>45</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/128774660-1-1.html">                              jd_1246841                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/1046526-1-1.html">280031088-</a> ：</span>
					                            <span class="u-con">这手机可以分期不？</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-19 19:45</span> <a class="p-bfc btn-toggle hl_blue" data-id="33144571" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33144571" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_1246841：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_1246841" data-guid="785626f6-c127-42d5-a1ab-4e15d24a5242" data-replyid="33144571">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="ac"> <a class="hl_blue" href="http://club.jd.com/repay/1023433_785626f6-c127-42d5-a1ab-4e15d24a5242_1.html" title="查看全部回复" target="_blank">查看全部回复&gt;&gt;</a> 
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/427688467.html" target="_blank">
					                        <img height="50" width="50" upin="珂里斯蒂娜" src="http://storage.jd.com/i.imageUpload/e7e6c0efcbb9b5d9c4c831343131383730343838313230_sma.jpg" alt="珂里斯蒂娜">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/427688467.html" target="_blank">           珂里斯蒂娜 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:">银牌会员</span>
					                    <span class="u-address">上海</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_2b2db81e-afed-4c2e-81f5-dc852edf27c4_1.html" target="_blank">2014-09-28 10:59</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_2b2db81e-afed-4c2e-81f5-dc852edf27c4_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="2825009" class="comm-tags" href="#none">
					                                <span>通话质量好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825010" class="comm-tags" href="#none">
					                                <span>性价比高</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825011" class="comm-tags" href="#none">
					                                <span>分辨率高</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825012" class="comm-tags" href="#none">
					                                <span>音质好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="2825013" class="comm-tags" href="#none">
					                                <span>外观漂亮</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>才用3天，配送速度很快，是正品行，货希望后面不会出什么问题，后面用的好会再追评</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-09-24</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="433751662" href="#none">回复(<em>32</em>)</a> 
					                    <div class="useful fr" id="2b2db81e-afed-4c2e-81f5-dc852edf27c4"> <a name="agree" class="btn-agree" title="7" href="#none">有用(7)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="6" href="#none">没用(6)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="珂里斯蒂娜" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-433751662" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">珂里斯蒂娜 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="珂里斯蒂娜" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="433751662">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="32" data-name="Di调De淡Ding" data-uid="129911435">
					                    <strong>32</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/129911435-1-1.html">                              Di调De淡Ding                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/28765307-1-1.html">尘封51620</a> ：</span>
					                            <span class="u-con">它要是说3400弄不好还有人上当，1400除了SB没人会受骗的，只要全新未拆，任何一个手机店的收购价都不会低于2500，本人……就是卖手机的……</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-20 12:35</span> <a class="p-bfc btn-toggle hl_blue" data-id="33165271" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33165271" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">Di调De淡Ding：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="Di调De淡Ding" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="33165271">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="31" data-name="尘封51620" data-uid="28765307">
					                    <strong>31</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/28765307-1-1.html">                              尘封51620                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/166605005-1-1.html">jd131470uog</a> ：</span>
					                            <span class="u-con">1400? 正品未拆？</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-18 12:59</span> <a class="p-bfc btn-toggle hl_blue" data-id="33101946" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33101946" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">尘封51620：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="尘封51620" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="33101946">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="30" data-name="jd131470uog" data-uid="166605005">
					                    <strong>30</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/166605005-1-1.html">                              jd131470uog                          </a> ：</span>
					                            <span class="u-con">一直相信商城的产品与质量，实在对美国货不感兴趣，喜欢大大屏的国产，下面送的一个5S ，全新未拆，箱说票全，1400转了，有需要的加我扣扣 2780500656</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-17 21:02</span> <a class="p-bfc btn-toggle hl_blue" data-id="33087211" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33087211" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd131470uog：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd131470uog" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="33087211">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="29" data-name="kzh133" data-uid="188212249">
					                    <strong>29</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/188212249-1-1.html">                              kzh133                          </a> 
					                                <em>回复</em> <a target="_blank" href="http://club.jd.com/userreview/113831338-1-1.html">jd_349159370</a> ：</span>
					                            <span class="u-con">确实</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-17 11:27</span> <a class="p-bfc btn-toggle hl_blue" data-id="33057368" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33057368" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">kzh133：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="kzh133" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="33057368">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="28" data-name="jd_chipmu312" data-uid="102027296">
					                    <strong>28</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/102027296-1-1.html">                              jd_chipmu312                          </a> ：</span>
					                            <span class="u-con">apple watch</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-16 23:29</span> <a class="p-bfc btn-toggle hl_blue" data-id="33046182" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33046182" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_chipmu312：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_chipmu312" data-guid="2b2db81e-afed-4c2e-81f5-dc852edf27c4" data-replyid="33046182">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="ac"> <a class="hl_blue" href="http://club.jd.com/repay/1023433_2b2db81e-afed-4c2e-81f5-dc852edf27c4_1.html" title="查看全部回复" target="_blank">查看全部回复&gt;&gt;</a> 
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/165230225.html" target="_blank">
					                        <img height="50" width="50" upin="jd_64c51790c4c5c" src="http://misc.360buyimg.com/lib/img/u/b61.gif" alt="jd_182407ejq">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/165230225.html" target="_blank">           jd_182407ejq </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:">银牌会员</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="1f61487f-acd5-4edb-ad20-48a166dad7e2" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_1f61487f-acd5-4edb-ad20-48a166dad7e2_1.html" target="_blank">2014-10-21 17:01</a>
					                        <em class="fr hl_blue"><a href="http://app.jd.com/android.html" target="_blank">来自商城Android客户端</a>
					                        </em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_1f61487f-acd5-4edb-ad20-48a166dad7e2_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>东西太好了，昨天订的今天就到了</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-20</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452680626" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="1f61487f-acd5-4edb-ad20-48a166dad7e2"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="jd_182407ejq" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452680626" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_182407ejq ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="jd_182407ejq" data-guid="1f61487f-acd5-4edb-ad20-48a166dad7e2" data-replyid="452680626">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/229426031.html" target="_blank">
					                        <img height="50" width="50" upin="hxmwsudu" src="http://misc.360buyimg.com/lib/img/u/b61.gif" alt="hxmwsudu">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/229426031.html" target="_blank">           hxmwsudu </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:">银牌会员</span>
					                    <span class="u-address">四川</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="4fe628ee-0629-4542-aa74-07c17060d677" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_4fe628ee-0629-4542-aa74-07c17060d677_1.html" target="_blank">2014-10-21 17:00</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_4fe628ee-0629-4542-aa74-07c17060d677_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041315" class="comm-tags" href="#none">
					                                <span>分辨率高</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>送客户的礼品，虽然没看到，但是经常在商城买东西，很放心。</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-09-28</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452680811" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="4fe628ee-0629-4542-aa74-07c17060d677"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="hxmwsudu" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452680811" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">hxmwsudu ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="hxmwsudu" data-guid="4fe628ee-0629-4542-aa74-07c17060d677" data-replyid="452680811">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/105716997.html" target="_blank">
					                        <img height="50" width="50" upin="jd_7d6f8586f0c0e" src="http://storage.jd.com/i.imageUpload/6a645f3764366638353836663063306531343036393634323637303534_sma.jpg" alt="星缘网络">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/105716997.html" target="_blank">           星缘网络 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:#088000">金牌会员</span>
					                    <span class="u-address">四川</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="9e30b1bd-51e9-4a6d-8010-de7f20e6284e" data-top="">
					                <div class="o-topic">
					                    <span class="star sa4"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_9e30b1bd-51e9-4a6d-8010-de7f20e6284e_1.html" target="_blank">2014-10-21 16:58</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_9e30b1bd-51e9-4a6d-8010-de7f20e6284e_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041306" class="comm-tags" href="#none">
					                                <span>双卡双待</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>双卡双待，超长待机，信号爆表</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-19</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452678113" href="#none">回复(<em>1</em>)</a> 
					                    <div class="useful fr" id="9e30b1bd-51e9-4a6d-8010-de7f20e6284e"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="星缘网络" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452678113" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">星缘网络 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="星缘网络" data-guid="9e30b1bd-51e9-4a6d-8010-de7f20e6284e" data-replyid="452678113">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <div class="item-reply hide-default" data-index="1" data-name="jd_Z 、先生" data-uid="436150946">
					                    <strong>1</strong>
					                    <div class="reply-list">
					                        <div class="reply-con">
					                            <span class="u-name"> <a target="_blank" href="http://club.jd.com/userreview/436150946-1-1.html">                              jd_Z 、先生                          </a> ：</span>
					                            <span class="u-con">卧槽？双卡的？</span>
					                        </div>
					                        <div class="reply-meta">
					                            <span class="reply-left fl">2014-10-21 17:04</span> <a class="p-bfc btn-toggle hl_blue" data-id="33230760" href="#none">回复</a> 
					                        </div>
					                        <div id="btn-toggle-0-33230760" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">jd_Z 、先生：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc" data-nick="jd_Z 、先生" data-guid="9e30b1bd-51e9-4a6d-8010-de7f20e6284e" data-replyid="33230760">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/120008399.html" target="_blank">
					                        <img height="50" width="50" upin="18362640793_p" src="http://misc.360buyimg.com/lib/img/u/b62.gif" alt="183*****793">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/120008399.html" target="_blank">           183*****793 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:#088000">金牌会员</span>
					                    <span class="u-address">江苏</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="0018ad4e-5409-4bad-a24d-bd7a2ff6c737" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_0018ad4e-5409-4bad-a24d-bd7a2ff6c737_1.html" target="_blank">2014-10-21 16:52</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_0018ad4e-5409-4bad-a24d-bd7a2ff6c737_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041249" class="comm-tags" href="#none">
					                                <span>照相不错</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041250" class="comm-tags" href="#none">
					                                <span>外观漂亮</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041251" class="comm-tags" href="#none">
					                                <span>音质好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041252" class="comm-tags" href="#none">
					                                <span>分辨率高</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041253" class="comm-tags" href="#none">
					                                <span>待机时间长</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>不用多少说好吧，买来送人的，一次性买2部，俺不是土豪</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-16</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452671936" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="0018ad4e-5409-4bad-a24d-bd7a2ff6c737"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="183*****793" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452671936" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">183*****793 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="183*****793" data-guid="0018ad4e-5409-4bad-a24d-bd7a2ff6c737" data-replyid="452671936">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/20712952.html" target="_blank">
					                        <img height="50" width="50" upin="彬大" src="http://misc.360buyimg.com/lib/img/u/b62.gif" alt="彬大">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/20712952.html" target="_blank">           彬大 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:#088000">金牌会员</span>
					                    <span class="u-address">湖北</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="64d0709c-8163-4526-8b07-f0558633b858" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_64d0709c-8163-4526-8b07-f0558633b858_1.html" target="_blank">2014-10-21 16:51</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_64d0709c-8163-4526-8b07-f0558633b858_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041240" class="comm-tags" href="#none">
					                                <span>照相不错</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041241" class="comm-tags" href="#none">
					                                <span>软件也不错</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041242" class="comm-tags" href="#none">
					                                <span>外观漂亮</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>送给媳妇儿的生日礼物.拿到后没有失望,外观漂亮,操作流畅,显示清晰,软件丰富.试用几天发现一处不足就是屏幕卡顿,偶尔失灵,这点让人很头痛,虽不是很明显很频繁,但一出现就让人不爽,很影响操作体验.不知道这点算不算三包范围内?还有就是商城的东西包装简陋,就是在苹果盒子外面套一层薄膜和一个塑料袋子,让人没有安全感.</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-16</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452671076" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="64d0709c-8163-4526-8b07-f0558633b858"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="彬大" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452671076" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">彬大 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="彬大" data-guid="64d0709c-8163-4526-8b07-f0558633b858" data-replyid="452671076">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <img height="50" width="50" upin="me聆溪" src="http://misc.360buyimg.com/lib/img/u/b61.gif" alt="me聆溪">
					                </div>
					                <div class="u-name">m***溪</div>
					                <span class="u-level">
					                    <span style="color:">银牌会员</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="151f3998-b0e9-4d50-bc49-3b5a2797d52a" data-top="">
					                <div class="o-topic">
					                    <span class="star sa5"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_151f3998-b0e9-4d50-bc49-3b5a2797d52a_1.html" target="_blank">2014-10-21 16:50</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_151f3998-b0e9-4d50-bc49-3b5a2797d52a_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041227" class="comm-tags" href="#none">
					                                <span>后盖很漂亮</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041228" class="comm-tags" href="#none">
					                                <span>音质好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041229" class="comm-tags" href="#none">
					                                <span>通话质量好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041230" class="comm-tags" href="#none">
					                                <span>反应快</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041231" class="comm-tags" href="#none">
					                                <span>信号稳定</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>响应速度块，无卡顿，很喜欢，外观漂亮</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-10</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452670625" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="151f3998-b0e9-4d50-bc49-3b5a2797d52a"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="m***溪" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452670625" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">m***溪 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="me聆溪" data-guid="151f3998-b0e9-4d50-bc49-3b5a2797d52a" data-replyid="452670625">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="item">
					            <div class="user">
					                <div class="u-icon">
					                    <a title="查看TA的全部评价" href="http://me.jd.com/488388432.html" target="_blank">
					                        <img height="50" width="50" upin="qjtzyf8858" src="http://misc.360buyimg.com/lib/img/u/b61.gif" alt="凌天傲地我为皇">
					                    </a>
					                </div>
					                <div class="u-name"><a href="http://me.jd.com/488388432.html" target="_blank">           凌天傲地我为皇 </a>
					                </div>
					                <span class="u-level">
					                    <span style="color:">银牌会员</span>
					                    <span class="u-address">重庆</span>
					                </span>
					            </div>
					            <div class="i-item" data-guid="1210b1dc-eafa-4bcd-82b5-3a4f89a30ce1" data-top="">
					                <div class="o-topic">
					                    <span class="star sa4"></span>
					                    <span><a class="date-comment" title="查看评价详情" href="http://club.jd.com/repay/1023433_1210b1dc-eafa-4bcd-82b5-3a4f89a30ce1_1.html" target="_blank">2014-10-21 16:48</a>
					                        <em class="fr hl_blue"></em>
					                    </span>
					                    <strong class="topic">
					                        <a href="http://club.jd.com/repay/1023433_1210b1dc-eafa-4bcd-82b5-3a4f89a30ce1_1.html" target="_blank"></a>
					                    </strong>
					                </div>
					                <div class="comment-content">
					                    <dl>
					                        <dt>标　　签：</dt>
					                        <dd>
					                            <q data-tid="3041197" class="comm-tags" href="#none">
					                                <span>音质好</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041198" class="comm-tags" href="#none">
					                                <span>反应快</span>
					                                <em></em>
					                            </q>
					                            <q data-tid="3041199" class="comm-tags" href="#none">
					                                <span>性价比高</span>
					                                <em></em>
					                            </q>
					                        </dd>
					                    </dl>
					                    <dl>
					                        <dt>心得：</dt>
					                        <dd>不错 暂无发现缺点</dd>
					                    </dl>
					                    <div class="dl-extra">
					                        <dl>
					                            <dt>颜色：</dt>
					                            <dd>金</dd>
					                        </dl>
					                        <dl>
					                            <dt>型号：</dt>
					                            <dd>移动4G(16G ROM)</dd>
					                        </dl>
					                    </div>
					                    <s class="clr"></s>
					                    <dl>
					                        <dt>购买日期：</dt>
					                        <dd>2014-10-10</dd>
					                    </dl>
					                </div>
					                <div class="btns"> <a class="btn-reply btn-toggle fr" data-id="452669442" href="#none">回复(<em>0</em>)</a> 
					                    <div class="useful fr" id="1210b1dc-eafa-4bcd-82b5-3a4f89a30ce1"> <a name="agree" class="btn-agree" title="0" href="#none">有用(0)</a> 
					                        <!--<a name="oppose" class="btn-oppose" title="0" href="#none">没用(0)</a>-->
					                    </div>
					                </div>
					                <div class="item-reply reply-lz" data-name="凌天傲地我为皇" data-uid="{list.uid}">
					                    <strong></strong>
					                    <div class="reply-list">
					                        <div id="btn-toggle-0-452669442" class="replay-form none">
					                            <div class="arrow">
					                                <em>◆</em>
					                                <span>◆</span>
					                            </div>
					                            <div class="reply-wrap">
					                                <p>
					                                    <em>回复</em>
					                                    <span class="u-name">凌天傲地我为皇 ：</span>
					                                </p>
					                                <div class="reply-input">
					                                    <div class="fl">
					                                        <input type="text">
					                                    </div> <a href="#none" class="reply-btn btn-gray p-bfc reply-btn-lz" data-nick="凌天傲地我为皇" data-guid="1210b1dc-eafa-4bcd-82b5-3a4f89a30ce1" data-replyid="452669442">回复</a> 
					                                    <div class="clr"></div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="corner tl"></div>
					        </div>
					        <div class="clearfix">
					            <div class="fl" style="padding:8px 0 0 120px;"><a href="http://club.jd.com/review/1023433-0-1-0.html" target="_blank" class="hl_blue">[查看全部评价]</a>
					            </div>
					            <div class="pagin fr" clstag="shangpin|keycount|product|fanye" id="commentsPage0"><a href="javascript:void(0)" class="current">1</a><a href="#comments-list">2</a><a href="#comments-list">3</a><a href="#comments-list">4</a><a href="#comments-list">5</a>
					                <span>...</span><a href="#comments-list">1653</a><a href="#comments-list">1654</a><a href="#comments-list" class="next">下一页</a>
					            </div>
					        </div>
					    </div>
					    <!-- 全部 -->
					    <div id="comment-1" class="mc none" data-widget="tab-content">
					        <div class="iloading">正在加载中，请稍候...</div>
					    </div>
					    <!-- 好评 -->
					    <div id="comment-2" class="mc none" data-widget="tab-content">
					        <div class="iloading">正在加载中，请稍候...</div>
					    </div>
					    <!-- 中评 -->
					    <div id="comment-3" class="mc none" data-widget="tab-content">
					        <div class="iloading">正在加载中，请稍候...</div>
					    </div>
					    <!-- 差评 -->
					    <div id="comment-4" class="mc none" data-widget="tab-content">
					        <div class="iloading">正在加载中，请稍候...</div>
					    </div>
					    <!-- 有晒单 -->
					</div>

					<div class="mc hide" id="product-detail-5">
						<?php echo ($data["customer_service"]); ?>
					</div>
				</div>
 			</div>
 		</div>
 	</div>
 	<div class="w">
    <div id="service-2013">
        <dl class="fore1">
            <dt><b></b>
                <strong>购物指南</strong>
            </dt>
            <dd>
                <div><a href="http://help.jd.com/help/question-56.html" target="_blank">购物流程</a>
                </div>
                <div><a href="http://help.jd.com/help/question-57.html" target="_blank">会员介绍</a>
                </div>
                <div><a href="http://help.jd.com/help/question-181.html" target="_blank">团购/机票</a>
                </div>
                <div><a href="http://help.jd.com/help/question-61.html" target="_blank">常见问题</a>
                </div>
                <div><a href="http://help.jd.com/help/question-63.html" target="_blank">大家电</a>
                </div>
                <div><a href="http://help.jd.com/index.html" target="_blank">联系客服</a>
                </div>
            </dd>
        </dl>
        <dl class="fore2">
            <dt><b></b>
                <strong>配送方式</strong>
            </dt>
            <dd>
                <div><a href="http://help.jd.com/help/question-64.html" target="_blank">上门自提</a>
                </div>
                <div><a href="http://help.jd.com/help/question-360.html" target="_blank">211限时达</a>
                </div>
                <div><a href="http://help.jd.com/help/distribution-768.html" target="_blank">配送服务查询</a>
                </div>
                <div><a href="http://help.jd.com/help/question-892.html#help2215" target="_blank">配送费收取标准</a>
                </div>
                <div><a href="http://market.jd.com/giftcard/index.html#one5" target="_blank">如何送礼</a>
                </div>
                <a href="http://en.jd.com/chinese.html" target="_blank">海外配送</a>
            </dd>
        </dl>
        <dl class="fore3">
            <dt><b></b>
                <strong>支付方式</strong>
            </dt>
            <dd>
                <div><a href="http://help.jd.com/help/question-67.html" target="_blank">货到付款</a>
                </div>
                <div><a href="http://help.jd.com/help/question-68.html" target="_blank">在线支付</a>
                </div>
                <div><a href="http://help.jd.com/help/question-71.html" target="_blank">分期付款</a>
                </div>
                <div><a href="http://help.jd.com/help/question-69.html" target="_blank">邮局汇款</a>
                </div>
                <div><a href="http://help.jd.com/help/question-70.html" target="_blank">公司转账</a>
                </div>
            </dd>
        </dl>
        <dl class="fore4">
            <dt><b></b>
                <strong>售后服务</strong>
            </dt>
            <dd>
                <div><a href="http://myjd.jd.com/afs/help/afshelp.action" target="_blank">售后政策</a>
                </div>
                <div><a href="http://help.jd.com/help/question-99.html" target="_blank">价格保护</a>
                </div>
                <div><a href="http://help.jd.com/help/question-100.html" target="_blank">退款说明</a>
                </div>
                <div><a href="http://myjd.jd.com/repair/repairs.action" target="_blank">返修/退换货</a>
                </div>
                <div><a href="http://help.jd.com/help/question-881.html" target="_blank">取消订单</a>
                </div>
            </dd>
        </dl>
        <dl class="fore5">
            <dt><b></b>
                <strong>特色服务</strong>
            </dt>
            <dd>
                <div><a href="http://help.jd.com/help/question-79.html" target="_blank">夺宝岛</a>
                </div>
                <div><a href="http://help.jd.com/help/question-86.html" target="_blank">DIY装机</a>
                </div>
                <div><a href="http://fuwu.jd.com/" target="_blank">延保服务</a>
                </div>
                <div><a href="http://giftcard.jd.com/market/index.action" target="_blank">京东E卡</a>
                </div>
                <div><a href="http://help.jd.com/help/question-91.html" target="_blank">节能补贴</a>
                </div>
                <div><a href="http://mobile.jd.com/" target="_blank">京东通信</a>
                </div>
            </dd>
        </dl>
        <span class="clr"></span>
    </div>
</div>
 	<div class="w">
    <div id="footer-2013">
        <div class="links"><a href="http://www.jd.com/intro/about.aspx" target="_blank">关于我们</a>|<a href="http://www.jd.com/contact/" target="_blank">联系我们</a>|<a href="http://zhaopin.jd.com/" target="_blank">人才招聘</a>|<a href="http://www.jd.com/contact/joinin.aspx" target="_blank">商家入驻</a>|<a href="http://sale.jd.com/act/y3surX7qpM.html" target="_blank">广告服务</a>|<a href="http://app.jd.com/" target="_blank">手机京东</a>|<a href="http://club.jd.com/links.aspx" target="_blank">友情链接</a>|<a href="http://cps.jd.com/" target="_blank">销售联盟</a>|<a target="_blank" href="http://club.jd.com/">京东社区</a>|<a target="_blank" href="http://gongyi.jd.com">京东公益</a>
        </div>
        <div class="copyright">北京市公安局朝阳分局备案编号110105014669&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;互联网药品信息服务资格证编号(京)-非经营性-2011-0034
            <br><a target="_blank" href="http://misc.360buyimg.com/skin/df/i/com/f_music.jpg">音像制品经营许可证苏宿批005号</a>&nbsp;&nbsp;|&nbsp;&nbsp;出版物经营许可证编号新出发(苏)批字第N-012号&nbsp;&nbsp;|&nbsp;&nbsp;互联网出版许可证编号新出网证(京)字150号
            <br><a target="_blank" href="http://misc.360buyimg.com/wz/wlwhjyxkz.jpg">网络文化经营许可证京网文[2011]0168-061号</a>&nbsp;&nbsp;Copyright&nbsp;&copy;&nbsp;2004-2014&nbsp;&nbsp;京东JD.com&nbsp;版权所有
            <br />京东旗下网站：<a target="_blank" href="http://en.jd.com/">English Site</a>
        </div>
        <div class="authentication">
            <a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026" target="_blank">
                <img src="/Public/Home/images/108_40_zZOKnl.gif" width="108" height="40" alt="经营性网站备案中心">
            </a>
            <a href="https://ss.cnnic.cn/verifyseal.dll?sn=2008070300100000031&ct=df&pa=294005" tabindex="-1" id="urlknet" target="_blank">
                <img alt="&#x53EF;&#x4FE1;&#x7F51;&#x7AD9;" name="CNNIC_seal" border="true" src="/Public/Home/images/rBEHaFCFC5QIAAAAAAASVQX9RAYAACb2wHUV1kAABJt760.gif" width="108" height="40" oncontextmenu="return false;" onclick="CNNIC_change('urlknet')" />
            </a>
            <a href="http://www.bj.cyberpolice.cn/index.do" target="_blank">
                <img src="/Public/Home/images/rBEIDE_nzcIIAAAAAAB30mYXo5QAACrhACj22IAAHfq378.png" width="108" height="40" alt="朝阳网络警察">
            </a>
             <a href="https://search.szfw.org/cert/l/CX20120111001803001836" target="_blank">
                 <img src="/Public/Home/images/112_40_WvArIl.png" width="112" height="40">
            </a>
        </div>
    </div>
</div>
<!-- footer end -->
 </body>
 </html>