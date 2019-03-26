<?php
	session_start();
	$_SESSION["login"] = "false";
	echo "<script>
		alert('You are logged out from the account');		
		location.href='../myhome.php';
		</script>";
?>