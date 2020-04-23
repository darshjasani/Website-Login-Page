
		function validate(){
			var uname = document.getElementById("uname");
			var pass1 = document.getElementById("pass");
			if(uname.value.trim() == ""){
				uname.style.border = "solid 2px red";
				document.getElementById("uvaild").style.visibility="visible";
				return false;
			}
			else if(pass1.value.trim()==""){
				pass1.style.border = "solid 2px red";
				document.getElementById("pvaild").style.visibility="visible";
				return false;
			}
			else if (pass1.value.trim().length <6){
				alert("Password too short");
				return false;
			}
			else
				return true;
		}