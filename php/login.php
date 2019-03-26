<?php
	session_start();
	include 'db_login.php';
	
	$username=$_POST['uname'];
	$password=$_POST['pw'];
	
	$sql="SELECT * FROM userinfo WHERE UserName='$username' AND Password='$password'";
	$result = sqlsrv_query($conn,$sql);
	if (!$row=sqlsrv_fetch_array($result)){
		echo "<script>alert('your username or pas7sword is either incorrect!!');</script>";
	}else{
		$cookie_name1="user";
		$cookie_username=$username;
		setcookie($cookie_name1,$cookie_username,time()+(86400*30),"/");
		echo @$_COOKIE['user'];
		echo "<script>alert('Welcome Back!!');</script>";
	}

	echo "<script>window.history.back();</script>";
	
?>