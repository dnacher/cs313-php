<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" href="/library/css/style.css">
    <?php 
      require("dbconnect.php");
      $db = get_db();
      $errorMessage;
      $good= false;
      $userType;
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "aca";
        if (isset($_POST['txtUser']) && isset($_POST['txtPass'])){
          echo "aca2";
          $txtUser = $_POST['txtUser'];
          $txtPass = $_POST['txtPass'];
          $txtPass = hash('ripemd160', $pass);
          $query = 'SELECT name as name, user_type_id as userType
                     FROM users
                     WHERE name=:user
                     AND password=:pass';
          $statement = $db->prepare($query);
          $statement->bindValue(':user', $txtUser);
          $statement->bindValue(':pass', $txtPass);
          $statement->execute();
          while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $userType = row["userType"];  
            $good = true;
          }
          if($good){
            echo "aca3";
            session_start();
            $_SESSION["user"] = $txtUser;
            $_SESSION["userType"] = $userType;
            die();  
          }else{
            $errorMessage = "The user name or password is incorrect";
          }         
        }
      }
    ?> 
</head>
<body>

<h2>Login</h2>


<button onclick="document.getElementById('loginForm').style.display='block'" style="width:auto;">Login</button><br><br>

  <?php
    if($good){
      echo "<form action='/library/main.php' style='width: 50%'>";
      echo "<button type='submit' class='btn alert-success'>Main</button><br><br>";
      echo "</form>";
    }
    echo "<div class='alert alert-danger' role='alert'>" . $errorMessage . "</div>";
  ?>

<div id="loginForm" class="modal">
  
  <form class="modal-content animate" action="/library/index.php" method="POST">
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
