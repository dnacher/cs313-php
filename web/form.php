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

<?php
	$nameErr = $emailErr = "";
	$name = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	  }	

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	  }
	}
?>

		<form action="form_get.php" method="get">
			Form Get <br>
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
		<input type="submit">
		</form>	

		<form action="form_post.php" method="post">
			Form Post <br>
			Name: <input type="text" name="name"><br>
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email"><br>
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
		<input type="submit">
		</form>

		<form action="Index.php">
			<button type="submit" class="btn btn-primary">Index</button>
		</form>
	</body>
</html>