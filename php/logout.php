<?php
	session_start();
	$cookie_name="user";
	setcookie($cookie_name,"",time()-3600);
	echo "<script>alert('Bye~bye~!!');</script>";
	header("Location: ../index.html");	
?>