<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>贪吃蛇</title>
<style type="text/css">
	div{
		width:1000px;
		margin: 0 auto;
	}

</style>
<script>
	//定义全局map对象
	var map;
	//定义食物对象food
	var food;
	//定义全局snake对象
	var snake;
	//定义全局定时器
	var timer;
	//定义地图类
	function Map() {
		this.width = 800;
		this.height = 400;
		this.color = '#DDDDDD';
		this.position = 'absolute';
		//定义一个公有属性，用来创建div层对象
		this._map = null;
		
		//定义显示方法
		this.show = function() {
			//创建一个div层对象
			this._map = document.createElement('div');
			//为div对象添加属性
			this._map.style.width = this.width+'px';
			this._map.style.height = this.height+'px';
			this._map.style.backgroundColor = this.color;
			this._map.style.position = this.position;
			//把div层对象追加到body元素中
			document.getElementsByTagName('body')[0].appendChild(this._map);
		}
	}
	
	//创建食物类
	function Food() {
		//定义属性
		this.width = 20;
		this.height = 20;
		this.color = 'green';
		this.position = 'absolute';
		this._food = null
		
		//定义显示方法
		this.show = function() {
			if(this._food==null) {
				//创建div层对象添加属性
				this._food = document.createElement('div');
				this._food.style.width = this.width+'px';
				this._food.style.height = this.height+'px';
				this._food.style.backgroundColor = this.color;
				this._food.style.position = this.position;
				map._map.appendChild(this._food);
			}
				//随机出现的位置
				this.x = Math.floor(Math.random()*40);   //横向不能跑出40个格子
				this.y = Math.floor(Math.random()*20);   //纵向不能跑出20个格子
				this._food.style.left = this.x*20+'px';
				this._food.style.top = this.y*20+'px';
		}
	}
	
	//定义蛇类
	function Snake() {
		//定义属性
		this.width = 20;
		this.height = 20;
		this.position = 'absolute';
		//定义默认移动位置
		this.direct = 'right';
		
		//定义蛇身
		this.body = [[3,2,'red',null],[2,2,'blue',null],[1,2,'blue',null]];
		
		//定义蛇运动方向
		this.setDirect=function(code) {
			switch(code) {
				//判断键值
				case 37:
					this.direct='left';
				break;
				case 38:
					this.direct='top';
				break;
				case 39:
					this.direct='right';
				break;
				case 40:
					this.direct='down';
				break;
			}
		}
		
		//定义显示方法
		this.show = function() {
			//创建蛇节
			var length = this.body.length;
			for(var i=0;i<length;i++) {
				if(this.body[i][3]==null) {
					this.body[i][3] = document.createElement('div');
					this.body[i][3].style.width = this.width+'px';
					this.body[i][3].style.height = this.height+'px';
					this.body[i][3].style.position = this.position;
					this.body[i][3].style.backgroundColor = this.body[i][2];
					//追加div元素到地图对象中
					map._map.appendChild(this.body[i][3]);
				}
				//设置蛇节的横纵坐标
				this.body[i][3].style.left = this.body[i][0]*20+'px';
				this.body[i][3].style.top  = this.body[i][1]*20+'px';
			}
		}
		
		//定义移动方法
		this.move = function() {
			//判断是否吃到食物
			if(this.body[0][0]==food.x && this.body[0][1]==food.y) {
				//alert('吃到食物');
				this.body.push([0,0,'blue',null]);
				food.show();
			}
			
			var length = this.body.length;
			for(var i=length-1;i>0;i--) {
				this.body[i][0] = this.body[i-1][0];
				this.body[i][1] = this.body[i-1][1];
			}
			
			if(this.direct=='right') {
				this.body[0][0] += 1;
			}
			
			if(this.direct=='left') {
				this.body[0][0] -= 1;
			}
			
			if(this.direct=='top') {
				this.body[0][1] -= 1;
			}
			
			if(this.direct=='down') {
				this.body[0][1] += 1;
			}
			
			//判断撞墙死情况
			if(this.body[0][0]==-1||this.body[0][0]==40||this.body[0][1]==-1||this.body[0][1]==20) {
				alert('盗墓娘，死掉了，卧槽！~~');
				clearTimeout(timer);
				return;
			}
			
			//判断吃到自己死
			for(var i=1;i<length;i++) {
				if(this.body[0][0]==this.body[i][0] && this.body[0][1]==this.body[i][1]) {
					alert('Game Over');
					clearTimeout(timer);
					return;
				}
			}
			
			this.show();
		}
	}
	
	window.onload = function() {
		//创建地图对象 
		map = new Map();
		//显示地图对象
		map.show();
		
		//创建食物类对象
		food = new Food();
		food.show();
		
		//创建蛇类对象
		snake = new Snake();
		snake.show();
		
		//定时器
		timer = setInterval('snake.move()',100);
		document.onkeydown = function(event) {
			var code;
			if(window.event) {
				//IE浏览器
				code = window.event.keyCode;
			} else {
				//W3C浏览器
				code = event.keyCode;
			}
			snake.setDirect(code);
		}
	}
</script>
</head>
<body>
<a href="/index.php">返回网站首页</a>
	
</body>
</html>