<?php
	session_start();
	include 'db_login.php';
	$username=$_POST['uname'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$password=$_POST['pw'];
	$usermail=$_POST['usermail'];
	$phonesno=$_POST['userphone'];
	$gender=$_POST['sex'];
	$useraddress=$_POST['useradd'];
	
	$sql_user="SELECT * FROM userinfo WHERE UserName='$username'";
	$result_user = mysqli_query($conn,$sql_user);
	if (!$row=mysqli_fetch_assoc($result_user)){
	$sql="INSERT INTO userinfo (UserName,FirstName,LastName,Password,Email,PhoneNo,Address,Gender) 
	VALUES('$username','$firstname','$lastname','$password','$usermail','$phonesno',
	'$useraddress','$gender')";
	$result = mysqli_query($conn,$sql);
	echo "<script>alert('Register Successfully!!');</script>";
	echo "<script>window.close();</script>";
	}else{
		echo "<script>alert('it is used, Please use another username!!');</script>";
		echo "<script>window.location.href='../regform.html';</script>";
	}

?>