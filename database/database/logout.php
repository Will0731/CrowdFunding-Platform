<?php
	session_start();
	include('connect.php');
	session_unset();
	session_destroy();
	echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
	exit();
?>