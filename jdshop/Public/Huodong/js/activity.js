var email =false;
	var phone =false;
	var code =false;
	function BlurEmail() {

		var txt = "#bindEmail";
		var td = "#dvEmail";
		var pat = new RegExp("^[\\w-]+(\\.[\\w-]+)*@[\\w-]+(\\.[\\w-]+)+$", "i");
		var str = $(txt).val();
		if (!pat.test(str)) {

			$(td).html('Email格式错误');
			$(td).show();
			//return false;
		}else{
			email =true;

		}
	}
	function BlurPhone() {
		var txt = "#bindPhone";
		var td = "#dvPhone";
		var pat = new RegExp("1[3|4|5|7|8|][0-9]{9}", "i");
		var str = $(txt).val();
		if (!pat.test(str)) {

			$(td).html('手机号格式错误');
			$(td).show();
			//return false;
		}else{
			phone =true;

		}
	}
	
	function AsyncVerCode(data) {
		var td = "#dvCode";
	    if (data != "1") {

	    	$(td).html('验证码错误');
	    	$(td).show();
	    	//return false;
	    }else{
			code =true;

			alert(data);
		}
	    
	}
	
	function bindSubmit() {
		BlurPhone();
	    BlurEmail();	    
	    if(email && phone){
	    	document.bindForm.submit();
	    }else{
	    	return false;
	    }

    }
	
	function focusphone(){
		var td = "#dvPhone";
		$(td).html('');
		$(td).hide();
	}
	function focusemail(){
		var td = "#dvEmail";
		$(td).html('');
		$(td).hide();
	}
