<?php
	include('header.php');
	session_start();
	$productCount = 5;
	$prices = array(14.50, 8.50, 7.00, 23.70, 50.00);
	$products = array("Rubik Cube 3x3x3", "Rubik 2x2x2", "Axis Cube", "Megaminx", "Rubik cube 9x9x9");

?>
	<body class="body">
		<?php echo '<h1>Items</h1>'; ?>
		<div class="alert alert-primary" role="alert">
		  	Shopping Cart
		  	<!-- Information -->
			<h6>You have <?php echo count($_SESSION['myproducts']); ?> item(s) in your cart</h6>
		</div>

		<!-- Cart button -->
		<form action="cart.php">
			<button type="submit" class="btn btn-primary">Go to Cart</button><br><br>    		
		</form>
		<!-- checkout button -->
		<form action="checkout.php">
			<button type="submit" class="btn btn-primary">Checkout</button><br><br>    		
		</form><br><br><br>
		<!-- search button -->
		<form action="browse.php" method="get">
    		Search: <input type="text" name="search"> value="<?php echo $_GET["search"] ?>">
    		<input type="submit" class="btn btn-secondary" value="Search">
		</form>

		<!-- fill the table with products -->
		<?php
  			for ($x = 0; $x < $productCount; $x++) {
    			$found = strpos(strtolower($products[$x]), strtolower($_GET["search"]));
    			if (!isset($_GET["search"]) || empty($_GET["search"]) || $found !== false ) {
        			echo '<div class="product">
			        <h3>' . ucfirst($products[$x]) . '</h3>
			        <h4> $' . number_format($prices[$x], 2) . '</h4>
			        <form action="addToCart.php" method="get">
			        	<input type="hidden" name="product" value="' . $products[$x] . '"></input>
			        	<input type="submit" class="btn btn-primary"> value="add to cart"></input>
        			</form>
        			</div>';
    			}
  			}
		?>


<?php include('footer.php') ?>