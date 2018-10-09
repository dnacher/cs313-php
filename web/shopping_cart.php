<?php
	include('header.php');
?>
	<body class="body">
		<?php echo '<h1>Shopping Cart</h1>'; ?>
		<div class="alert alert-primary" role="alert">
		  Shopping Cart
		</div>

	<div class="button-center">
		
		<form action="items_list.php">
			<button type="submit" class="btn btn-primary">Go to Items List</button><br><br>    		
		</form>

	</div>

<?php include('footer.php') ?>
