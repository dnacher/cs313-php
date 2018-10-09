<?php
	include('header.php');
?>
	<body class="body">
		<?php echo '<h1>This is my main page from php!</h1>'; ?>
		<div class="alert alert-primary" role="alert">
		  Shopping Cart
		</div>

	<div class="button-center">
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


	</div>
<?php include('footer.php') ?>
