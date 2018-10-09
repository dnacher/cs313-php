<?php
   session_start();
   include('header.php');
?>

<?php

	if (isset($_SESSION['myproducts'])) {
	    $_SESSION['myproducts'][] = $_GET['product'];
	}
	else {
	    $_SESSION['myproducts'] = array();
	    $_SESSION['myproducts'][] = $_GET['product'];
	}

	print_r($_SESSION['myproducts']);
	die();

	include('footer.php');
?>