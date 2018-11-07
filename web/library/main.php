<?php
  require("dbconnect.php");
  $db = get_db();
  session_start();
  $txtUser = $_SESSION['user'];
  $txtUserType = $_SESSION['userType'];
  $user_id = $_SESSION['user_id'];
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

  <?php
    if($txtUserType==1 || $txtUserType==4){
      echo "<form action='/library/manageItem.php' style='width: 50%' method='POST'>";
      echo "<button type='submit' class='btn alert-success' style='width:auto;'>Manage Items</button><br><br>";
      echo "</form>";

      echo "<form action='/library/manageItemType.php' style='width: 50%' method='POST'>";
      echo "<button type='submit' class='btn alert-success' style='width:auto;'>Manage Items Type</button><br><br>";
      echo "</form>";

      echo "<form action='/library/manageAuthor.php' style='width: 50%' method='POST'>";
      echo "<button type='submit' class='btn alert-success' style='width:auto;'>Manage Authors</button><br><br>";
      echo "</form>";

    }  

    if($txtUserType==3){
      echo "<form action='/library/RentItem.php' style='width: 50%' method='POST'>";
      echo "<button type='submit' class='btn alert-success' style='width:auto;'>Rent an Item</button><br><br>";
      echo "</form>";      
    }

  ?>
  
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