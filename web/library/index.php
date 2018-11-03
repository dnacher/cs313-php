<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" href="/library/css/style.css">
</head>
<body>

<h2>Login</h2>

<button onclick="document.getElementById('loginForm').style.display='block'" style="width:auto;">Login</button>

<div id="loginForm" class="modal">
  
  <form class="modal-content animate" action="/library/main.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('loginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/library/images/login_icon.png" alt="Avatar" class="avatar" width="150" height="180">
    </div>

    <div class="container">
      <label for="txtUser"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="txtUser" required>

      <label for="txtPass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="txtPass" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('loginForm').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="createUser.php">create user</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('loginForm');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
