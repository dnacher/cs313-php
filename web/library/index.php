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

		<h2>Login</h2>

		<form action="/action_page.php">
  			<div class="imgcontainer">
    			<img src="img_avatar2.png" alt="Avatar" class="avatar">
  			</div>

			<div class="container">
		    	<label for="uname"><b>Username</b></label>
		    	<input type="text" placeholder="Enter Username" name="uname" required>

		    	<label for="psw"><b>Password</b></label>
		    	<input type="password" placeholder="Enter Password" name="psw" required>
		        
		    	<button type="submit">Login</button>
		    	<label>
		      		<input type="checkbox" checked="checked" name="remember"> Remember me
		    	</label>
		  	</div>

  			<div class="container" style="background-color:#f1f1f1">
			    <button type="button" class="cancelbtn">Cancel</button>
			    <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</body>
</html>