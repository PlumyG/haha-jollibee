// JavaScript Document
	//Phone Numbers
	function validnumbers(){
		var validformat=/^\(?([96523]{1})\)?[-. ]?([0-9]{7})$/;  
		var input=document.getElementById("input_num");
		var display=document.getElementById("valid_num");
		if (input.value.match(validformat)){
			display.innerHTML="&#10003;";
			display.style.color="#66cc66";
			input.setCustomValidity('');
		}else{ //input is wrong
			input.setCustomValidity("Only Hk number is allowd!! Please provide valid phone number!!");
			display.style.color="#ff6666";
			display.innerHTML="&#x2718 8 digital and valid hk numbers"; 	
		}
	}
	//Email
	function validemail(){
		var validformat=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var input=document.getElementById("input_email");
		var display=document.getElementById("valid_email");
		if (input.value.match(validformat)){
			display.innerHTML="&#10003;";
			display.style.color="#66cc66";
			input.setCustomValidity('');			
		}else{ //input is wrong
			input.setCustomValidity("please follow the format and provide valid email format!! no #%^&&* special character is accepted, except @");		
			display.style.color="#ff6666";
			display.innerHTML="&#x2718 xxxx@xxxx.com"; 		
		} 
	}
	//First Name
	function validfirstname(){
		var input=document.getElementById("input_fn");
		var display=document.getElementById("valid_fn");
		if(input.value.length > 1){ //input correct
			display.innerHTML="&#10003;";
			display.style.color="#66cc66";
			input.setCustomValidity('');			
		}else{ //input is wrong
			input.setCustomValidity("please follow the format!!");		
			display.style.color="#ff6666";
			display.innerHTML="&#x2718 should be at least 2 characters"; 
		}						
	}
	//Last Name
	function validlastname(){
		var input=document.getElementById("input_ln");
		var display=document.getElementById("valid_ln");
		if(input.value.length > 4){
			display.innerHTML="&#10003;";
			display.style.color="#66cc66";
			input.setCustomValidity('');			
		}else{
			input.setCustomValidity("please follow the format!!");			
			display.style.color="#ff6666";
			display.innerHTML="&#x2718 should be at least 5 characters"; 	
		}
	}
	//User Name
	function validusername(){
		var input = document.getElementById("username");
		var display=document.getElementById("valid_uname");
		if (input.value.length>5){
			display.innerHTML="&#10003;";
			display.style.color="#66cc66";
			input.setCustomValidity('');
		}else{
			input.setCustomValidity("please floow the format!!Should at least 5 characters");
			display.style.color="#ff6666";
			display.innerHTML="&#x2718 should be at least 5 characters";
		}
	}
	//password validation
	function validpassword(){
		var validformat=/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){8,24}$/;
		var input=document.getElementById("passwordinput");
		var display=document.getElementById("valid_pw");
		var strlen=input.value.length;
			if (input.value.length<8 || input.value.length>24){
				display.style.color="#ff6666";
				display.innerHTML="&#x2718; 8<=length<=18"
			}else if(input.value.match(validformat)){
				display.style.color="#66cc66";
				display.innerHTML="&#10003;";
			}else{
				display.style.color= "#ff6666";
				display.innerHTML="&#x2718;at least one char and num"							
			}
	}	
	//double entry of password
	function checkpassword(){
		var indication=document.getElementById("valid-indication");
		var password=document.getElementById("passwordinput");
		var confirm=document.getElementById("confirm_password");
		if(password.value!=confirm.value){
				confirm.setCustomValidity("Passwords Don't Match");
				indication.style.color= "#ff6666";
				indication.innerHTML="&#x2718; Passwords do not Match!!"
		} else if (password.value.length>8){
				confirm.setCustomValidity('');
				indication.style.color="#66cc66";
				indication.innerHTML="&#10003; Passwords Match!!"
		}
	}
	//reset labels
	function resetlabels(){
		document.getElementById("valid_pw").innerHTML="";
		document.getElementById("valid_email").innerHTML="";
		document.getElementById("valid_num").innerHTML="";
		document.getElementById("valid_fn").innerHTML="";
		document.getElementById("valid_ln").innerHTML="";
		document.getElementById("valid-indication").innerHTML="";				
	}	