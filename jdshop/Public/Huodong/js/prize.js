$(function(){
	var timeOut = function(){  //超时函数
		$("#lotteryBtn").rotate({
			angle:0, 
			duration: 10000, 
			animateTo: 2160, //这里是设置请求超时后返回的角度，所以应该还是回到最原始的位置，2160是因为我要让它转6圈，就是360*6得来的
			callback:function(){
				alert('网络超时')
			}
		}); 
	}; 
	var rotateFunc = function(awards,angle,text){  //awards:奖项，angle:奖项对应的角度
		$('#lotteryBtn').stopRotate();
		$("#lotteryBtn").rotate({
			angle:0, 
			duration: 5000, 
			animateTo: angle+1440, //angle是图片上各奖项对应的角度，1440是我要让指针旋转4圈。所以最后的结束的角度就是这样子^^
			callback:function(){
				alert(text)
			}
		}); 
	};
	
	$("#lotteryBtn").rotate({ 
	   bind: 
		 { 
			click: function(){
				rotateFunc(1,157,'恭喜您抽中的一等奖');
			}
		 } 
	   
	});
	
})