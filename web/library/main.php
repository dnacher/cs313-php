<?php
  require("dbconnect.php");
  $db = get_db();
  session_start();
  $txtUser = $_SESSION['user'];
  $txtUserType = $_SESSION['userType'];
  if(isset($txtUser)){
    echo "<div class='alert alert-success' role='alert'>";
    echo "Welcome $txtUser <br>";
    echo "</div>";
  }else{
    header("Location: index.php");
    die();
  }    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
    <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>

</head>

<body>

  <form action='/library/manageItem.php' style='width: 50%' method="POST">
    <button type='submit' class='btn alert-success' style='width:auto;'>Manage Items</button><br><br>
  </form>
  <form action='/library/manageItemType.php' style='width: 50%' method="POST">
    <button type='submit' class='btn alert-success' style='width:auto;'>Manage Items Type</button><br><br>
  </form>
  <form action='/library/manageAuthor.php' style='width: 50%' method="POST">
    <button type='submit' class='btn alert-success' style='width:auto;'>Manage Authors</button><br><br>
  </form>
  
<?php

//check if the user is admin.
if($txtUserType==1){
  echo "<form action='/library/manageUsers.php' style='width: 50%' method='POST'>";
  echo "<button type='submit' class='btn alert-success' style='width:auto;'>Manage Users</button><br><br>";
  echo "</form>";

  echo "<form action='/library/manageUsersType.php' style='width: 50%' method='POST'>";
  echo "<button type='submit' class='btn alert-success' style='width:auto;'>Manage Users Types</button><br><br>";
  echo "</form>";

}

?>
  
</body>