<?php
	session_start();
	unset($_SESSION["login"]);
	echo "<script>
		alert('You are logged out from the account');		
		location.href='../myhome.php';
		</script>";
?>