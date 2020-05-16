<?php
	if (!isset($_SESSION)) session_start();

	unset($_SESSION["admin_login"] );
	header('location: ../admin/admin.php');

?>