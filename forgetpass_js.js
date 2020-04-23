function validate(){
		var pno = document.getElementById("phone");
		var pnoregx = document.getElementById("phone").value;
		var ema = document.getElementById("email")
		var emaregx = document.getElementById("email").value;
		var emailregx = /^([a-z 0-9\.-]+)@([a-z 0-9-]+).([a-z]{2,8})(.[a-z]{2,8})/;
		var phoneregx = /^[6-9]\d{9}$/;
		if(!phoneregx.test(pnoregx)){
			pno.style.border = "solid 2px red";
			document.getElementById("phvaild").style.visibility="visible";
			return false;	
		}
		else if(!emailregx.test(emaregx)){
			ema.style.border = "solid 2px red";			
			document.getElementById("evalid").style.visibility="visible";
			return false;	
		}
		else{
				return true;
		}

}