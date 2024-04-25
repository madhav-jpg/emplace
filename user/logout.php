<?php
		session_start();
		if(isset($_SESSION['user']))
		{		
			// session_destroy();
			unset($_SESSION['user']);
			// unset($_COOKIE['mob_num']); 
   //  		setcookie('mob_num', null, -1, '/'); 
		}
		header("Location:../index.php");
?>