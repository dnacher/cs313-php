<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="/css/style.css">
		
		<!-- BEGIN bootstrap -->		 
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap.min.js">
		<!-- END   bootstrap -->
		<script src="/js/js.js"></script>


		
	</head>
	<body class="body">
		<?php echo '<h1>This is my main page from php!</h1>'; ?>
		<div class="alert alert-primary" role="alert">
		  This is an Alert from bootstrap!
		</div>

	<div class="button-center">

		<form action="/library">
			<button type="submit" class="btn btn-primary">Library</button><br><br>    		
		</form>

		<form action="introduction.php">
			<button type="submit" class="btn btn-primary">Introduction</button><br><br>    		
		</form>

		<form action="projects.php">
			<button type="submit" class="btn btn-primary">Projects for cs313</button><br><br>    	
		</form>

		<form action="form.php">
			<button type="submit" class="btn btn-primary">Form Page</button><br><br> 
		</form>


		<form action="team_week_3.php">
			<button type="submit" class="btn btn-primary">Team 7 Week 3</button><br><br> 
		</form>

		<form action="shopping_cart.php">
			<button type="submit" class="btn btn-primary">Shopping Cart</button><br><br> 
		</form>

	</div>

	</body>
</html>