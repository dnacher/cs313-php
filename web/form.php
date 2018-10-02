<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" href="/css/style.css">
		
		<!-- BEGIN bootstrap -->		 
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap.min.js">
		<!-- END   bootstrap -->
		<script src="/js/js.js"></script>


		
	</head>
	<body class="body">
		<form action="form_get.php" method="get">
			Form Get <br>
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
		<input type="submit">
		</form>	

		<form action="form_post.php" method="post">
			Form Post <br>
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
		<input type="submit">
		</form>
	</body>
</html>