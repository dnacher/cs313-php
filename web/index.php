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
		<form action="introduction.php">
			<button type="submit" class="btn btn-primary">Introduction</button><br><br>    		
		</form>

		<form action="projects.php">
			<button type="submit" class="btn btn-primary">Prjects for cs313</button>
		</form>
	</div>

	</body>
</html>