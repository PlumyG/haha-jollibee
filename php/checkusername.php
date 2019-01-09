<?php
	include 'db_login.php';
	
	$username=$_POST['username'];

	$sql="SELECT * FROM userinfo WHERE UserName='$username' AND Password='$password'";
	$result = mysqli_query($conn,$sql);
	if (!$row=mysqli_fetch_assoc($result)){
		echo "<script>alert('You can use this username!!');</script>";
	}else{
		echo "<script>alert('it is used, Please use another username!!');</script>";
	}
?>