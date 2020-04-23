
		function validate(){
			var uname = document.getElementById("uname");
			var pass1 = document.getElementById("pass");
			var male = document.getElementById("m");
			var female = document.getElementById("f");
			var other = document.getElementById("o");
			var pno = document.getElementById("phone");
			var pnoregx = document.getElementById("phone").value;
			var ema = document.getElementById("email")
			var emaregx = document.getElementById("email").value;
			var city = document.getElementById("selectbox");
			var emailregx = /^([a-z 0-9\.-]+)@([a-z 0-9-]+).([a-z]{2,8})(.[a-z]{2,8})/;
			var phoneregx = /^[6-9]\d{9}$/;
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
			else if(male.checked == false && female.checked == false && other.checked == false){
				document.getElementById("gvalid").style.visibility="visible";
				return false;
			}
			else if(!phoneregx.test(pnoregx)){
				pno.style.border = "solid 2px red";
				document.getElementById("pno").style.visibility="visible";
				return false;	
			}
			else if(!emailregx.test(emaregx)){
				ema.style.border = "solid 2px red";
				document.getElementById("evalid").style.visibility="visible";
				return false;	
			}
			else if(city.options[city.selectedIndex].value == "Select your city"){
				document.getElementById("cvalid").style.visibility="visible";
				return false;
			}
			else{
				return true;
			}
		}