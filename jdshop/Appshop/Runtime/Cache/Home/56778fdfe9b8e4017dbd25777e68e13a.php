<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>聚鹿商城，抽奖活动</title>
	<link rel="stylesheet" href="/Public/Huodong/css/reset.css" type="text/css">
	<link rel="stylesheet" href="/Public/Huodong/css/header.css" type="text/css">
	<link rel="stylesheet" href="/Public/Huodong/css/footer.css" type="text/css">
	<link rel="stylesheet" href="/Public/Huodong/css/activity.css" type="text/css">
	<script type="text/javascript" src="/Public/Huodong/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Huodong/js/jQueryRotate.2.2.js"></script>
	<script type="text/javascript" src="/Public/Huodong/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="/Public/Huodong/js/prize.js"></script>
	<script type="text/javascript" src="/Public/Huodong/js/activity.js"></script>
<script type="text/javascript">
	$(function(){
		getP();
		getc();
		geta();

	});
	// 点击事件获取区域信息
	function geta(){
		$('#city').change(function(){
			$('#area')[0].length=0;
			// $('#childCat')[0].length=0;
			//发送
			// alert($(this).val());
			$.get('/index.php/Home/Huodong/city',{id:$(this).val()},function(msg){
				//
				
				$(msg).each(function(i,item){
					var op=new Option(item.c_name,item.c_id);
					$('#area').append(op);
				});
			});

		});
	}


	// 点击事件获取城市信息
	function getc(){
		$('#prov').change(function(){
			$('#city')[0].length=0;
			// $('#childCat')[0].length=0;
			//发送
			// alert($(this).val());
			$.get('/index.php/Home/Huodong/city',{id:$(this).val()},function(msg){
				//
				
				$(msg).each(function(i,item){
					var op=new Option(item.c_name,item.c_id);
					$('#city').append(op);
				});
			});

		});
	}
	// 页面加载的时候，就取出省份信息
	function getP(){
		$.get('/index.php/Home/Huodong/city',{id:1},function(msg){
			$(msg).each(function(i,item){
				var op=new Option(item.c_name,item.c_id);
				$('#prov').append(op);

			});
		});
	}
	</script>
</head>
<body>
<div id="bd">
	<div class="bd-inner">
		<div class="bd-section1">
			<img src="/Public/Huodong/images/iphone6.png" class="fl iphone">
			<img src="/Public/Huodong/images/jiangpin.png" class="fr">
		</div>
		<div class="cl"></div>
		<div class="bd-info">
			<form action="/index.php/Home/Huodong/userinfo">
				<p class="bd-person">
					<span>您的姓名</span>
					<input type="text" class="xm">
					<input type="radio" name="sex" class="bd-sex"/><span class="sex">先生</span>
		      		<input type="radio" name="sex" class="bd-sex"/><span class="sex">女士</span>
		      		<span class="bd-tel">您的电话</span>
		      		<!-- <input type="text"  class="bd-telephone"> -->
		      		<input type="text" onfocus="focusphone()" onblur="BlurPhone()" class="bindPhone bd-telephone" data-left="340" tabindex="1" id="bindPhone" name="bindPhone" autocomplete="off" />
		      		<input type="button" id='btn' class="xm" value="提交个人信息">
					<div id="dvPhone" class="alert-error" style="display:none;color:#fff">手机号格式错误</div>
		      	</p>
		      	<p class="email">
		      		<span>您的邮箱</span>
		      		<input type="text" class="bd-email"> 
		      		<span>您的地址</span>
		      		<select name=" " id="prov">
		      			<option>省份</option>
		      			
		      		</select>
		      		<select name=" " id="city">
		      			<option>市</option>
		      			
		      		</select>
		      		<select name=" " id="area">
		      			<option>区</option>
		      			
		      		</select>
			      	<input name="imgbtn" type="image" src="/Public/Huodong/images/tj.png" class="tj">
			      	<img src="/Public/Huodong/images/choujiang.png" alt="抽奖">

			    </p>

	      	</form>
		</div>
	    <p class="bd-notice">注：请填写真实有效的姓名以及联系方式</p>
	    <div class="bd-prize">
	    	<img src="/Public/Huodong/images/prize.png">
	    </div>
	    <div class="bd-lottery">
	    	<div class="bd-lottery-left fl">
	    		<!-- 转盘 -->
	    		<div class="ly-plate">
					<div class="rotate-bg"></div>
					<div class="lottery-star"><img src="/Public/Huodong/images/rotate-static.png" id="lotteryBtn"></div>
				</div>
	    		<!-- 转盘 -->
	    		<p>已有<span>20.343.344</span>人中奖</p>
	    	</div>
	    	<div class="bd-lottery-right fr">
	    		<img src="/Public/Huodong/images/zjmd.png">
	    		<!-- 中奖名单公布 -->
	    		 <ol id="roll">
				    <li><a href="#"><span>131****8551</span><span class="iphone">iPhone6</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8552</span><span class="iphone">小米手机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8553</span><span class="iphone">htc手机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8554</span><span class="iphone">iPhone5</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8555</span><span class="iphone">电脑</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8556</span><span class="iphone">手机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8557</span><span class="iphone">iPhone6</span>5月27日<span class="time">15点17分</span></a></li>
				 	<li><a href="#"><span>131****8558</span><span class="iphone">耳机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8559</span><span class="iphone">iPhone6</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8550</span><span class="iphone">笔记本</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8560</span><span class="iphone">音箱</span>5月27日<span class="time">15点17分</span></a></li>
				 	<li><a href="#"><span>131****8561</span><span class="iphone">耳机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8562</span><span class="iphone">ipad</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8563</span><span class="iphone">联想手机</span>5月27日<span class="time">15点17分</span></a></li>
				    <li><a href="#"><span>131****8564</span><span class="iphone">htc手机</span>5月27日<span class="time">15点17分</span></a></li>
				  </ol>
				  <div id="bug"></div>
				  <!-- 中奖名单公布 -->
				  <div class="bd-query">
				  	<p class="bd-zjcx">查询中奖</p>
				  	<p class="bd-information">
				  		<form>
					  		<!-- <input type="text" class="swap_value" placeholder="请输入您的手机号"/>  -->
					  		 <input type="text" onfocus="focusphone()" onblur="BlurPhone()" class="bindPhone" placeholder="请输入您的手机号" data-left="340" tabindex="1" id="bindPhone" name="bindPhone" autocomplete="off" />
							<div id="dvPhone" class="alert-error" style="display:none;color:#fff">手机号格式错误</div>
							<input type="image" src="/Public/Huodong/images/8.png" class="search" /> 
						</form>
				  	</p>
				  </div>
	    	</div>
	    	<div class="cl"></div>
	    	<div class="bd-process">
	    		<img src="/Public/Huodong/images/process.png">
	    	</div>
	    	<div class="bd-prizelist">
	    		<div class="bd-prizelist-left fl">
		    		<p>双十一狂欢节期间，聚鹿商城向投资会员提供价值￥2999元的丰厚大礼包！</p>
		    		<p>其中包含：</p>
		    		<p>高级车载干湿两用吸尘器</p>
		    		<p>轻便无线键鼠套装</p>
		    		<p>等在内的精美礼包！</p>
		    	</div>
		    	<div class="bd-prizelist-right fl">
		    		<img src="/Public/Huodong/images/down.png" class="down">
		    		<p><input type="text" placeholder="请输入您获取的短信编码"></p>
		    	</div>
		    	<div class="cl"></div>
		    	<div class="bd-img">
		    		<ul>
		    			<li><img src="/Public/Huodong/images/img1.jpg"></li>
		    			<li><img src="/Public/Huodong/images/img3.jpg"></li>
		    			<li><img src="/Public/Huodong/images/img4.jpg"></li>
		    			<li><img src="/Public/Huodong/images/img5.jpg"></li>
		    			<li class="mr0"><img src="/Public/Huodong/images/img2.jpg"></li>
		    		</ul>
		    	</div>
		    	<p class="bd-activity">本活动期限为2015年4月18日至6月1日，本活动最终解释权归聚鹿商城所有</p>
	    	</div>
	    </div>
	</div>
</div>
</body>
<script type="text/javascript">
(function(A){
   function _ROLL(obj){
      this.ele = document.getElementById(obj);
	  this.interval = false;
	  this.currentNode = 0;
	  this.passNode = 0;
	  this.speed = 100;
	  this.childs = _childs(this.ele);
	  this.childHeight = parseInt(_style(this.childs[0])['height']);
	      addEvent(this.ele,'mouseover',function(){
				                               window._loveYR.pause();
											});
		  addEvent(this.ele,'mouseout',function(){
				                               window._loveYR.start(_loveYR.speed);
											});
   }
   function _style(obj){
     return obj.currentStyle || document.defaultView.getComputedStyle(obj,null);
   }
   function _childs(obj){
	  var childs = [];
	  for(var i=0;i<obj.childNodes.length;i++){
		 var _this = obj.childNodes[i];
		 if(_this.nodeType===1){
			childs.push(_this);
		 }
	  }   
	  return childs;
   }
	function addEvent(elem,evt,func){
	   if(-[1,]){
		   elem.addEventListener(evt,func,false);   
	   }else{
		   elem.attachEvent('on'+evt,func);
	   };
	}
	function innerest(elem){
      var c = elem;
	  while(c.childNodes.item(0).nodeType==1){
	      c = c.childNodes.item(0);
	  }
	  return c;
	}
   _ROLL.prototype = {
      start:function(s){
	          var _this = this;
			  _this.speed = s || 100;
		      _this.interval = setInterval(function(){
						    _this.ele.scrollTop += 1;
							_this.passNode++;
							if(_this.passNode%_this.childHeight==0){
								  var o = _this.childs[_this.currentNode] || _this.childs[0];
								  _this.currentNode<(_this.childs.length-1)?_this.currentNode++:_this.currentNode=0;
								  _this.passNode = 0;
								  _this.ele.scrollTop = 0;
								  _this.ele.appendChild(o);
							}
						  },_this.speed);
	  },
	  pause:function(){
		 var _this = this;
	     clearInterval(_this.interval);
	  }
   }
    A.marqueen = function(obj){A._loveYR = new _ROLL(obj); return A._loveYR;}
})(window);
marqueen('roll').start(100/*速度默认100*/);
</script>
</html>