<?php
  require("dbconnect.php");
  $db = get_db();
  session_start();
  $txtUser = $_SESSION['user'];
  $txtUserType = $_SESSION['userType'];
  if(isset($txtUser)){
    echo $txtUser . "<br>";
    echo $txtUserType . "<br>";
    echo 'correct';    
  }else{
    header("Location: index.php");
    die();
  }    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Users</title>
    <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>

</head>

<body>
  <div>

    <h1>Users</h1><br>

    <form action="/library/insertUser.php" style="width: 50%">
      <button type="submit" class="btn alert-success">Add User</button><br>        
    </form>

    <?php

        $statement = $db->prepare("SELECT us.user_id, us.name, us.description, ust.name
                                   FROM users us
                                   JOIN user_type ust on us.user_type_id=ust.user_type_id");
        $statement->execute();
        echo '<div class="list-group" style="width: 50%">';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){          
          echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">';
          echo '<div class="d-flex justify-content-between">';
          echo        '<small>' . $row['author_id'] . '</small>';
          echo        '<h5 class="mb-1">' . $row['name'] . '</h5>';
          echo '</a>';          
          echo  '</div>';
          echo  '<p class="mb-1">' . $row['description'] . '</p>';          
          echo '<form action="deleteUser.php" method=POST>
                <input type="hidden" value="'. $row['user_id'].'" name="user_id" />
                  <button type="submit" class="btn btn-danger">Delete</button><br><br>        
                </form>';
        }
        echo '</div>';
    ?>

  </div>