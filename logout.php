<?php
	session_start();
	session_destroy();
	setcookie ("ssetc", "", time()-3600, '/'); 
	header('Location: index.php');
?>
