<?php 
include "../autoload/autoload.php";

	unset($_SESSION['admin_name']);
	unset($_SESSION['admin_id']);

	header("location: /../index.php");

?>