<?php
   session_start();
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
	
	header("Location: https://salty-falls-70357.herokuapp.com/items_list.php");
	die();
?>