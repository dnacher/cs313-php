<!DOCTYPE html>
<html>
	<head>
		<title>Form Get</title>
		<link rel="stylesheet" href="/css/style.css">
		
		<!-- BEGIN bootstrap -->		 
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap.min.js">
		<!-- END   bootstrap -->
		<script src="/js/js.js"></script>		
	</head>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

		<form action="Index.php">
			<button type="submit" class="btn btn-primary">Index</button>
		</form>

</body>
</html>