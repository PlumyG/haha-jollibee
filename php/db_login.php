<?php
	$conn = mysqli_connect("localhost","root","","pizzahahauserinfo");
	
	if(!$conn){
		die("Connection Failed: ".mysqli_connect_error());
	}
?>