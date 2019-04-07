<?php
	session_start();
	//include 'db_login.php';
	
	$username=$_POST['uname'];
	$password=$_POST['pw'];
	
	/*$sql="SELECT * FROM userinfo WHERE UserName='$username' AND Password='$password'";
	$result = sqlsrv_query($conn,$sql);
	if (!$row=sqlsrv_fetch_array($result)){
		echo "<script>alert('your username or password is either incorrect!!');</script>";
	}else{*/
		$cookie_name1="user";
		$cookie_username=$username;
		setcookie($cookie_name1,$cookie_username,time()+(86400*30),"/");
		$_SESSION["login"] = "true";
		echo "<script>
			alert('Welcome Back!!');
			location.href='../myhome.php';
			</script>";
		//echo htmlentities($id[''], ENT_QUOTES, 'UTF-8');
	//}
	//echo "<script>window.history.back();</script>";
?>