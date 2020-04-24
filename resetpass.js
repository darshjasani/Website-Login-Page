function validate(){
		var psw = document.getElementById("pass");
		var con = document.getElementById("confirm");
		if(psw.value.trim()==""){
				psw.style.border = "solid 2px red";
				document.getElementById("pvaild").style.visibility="visible";
				return false;
		}
		else if(psw.value.trim().length <6){
				alert("Password too short");
				return false;
		}
		else if(con.value.trim()==""){
				con.style.border = "solid 2px red";
				document.getElementById("confi").style.visibility="visible";
				return false;
		}
		else{
			return true;
		}
}