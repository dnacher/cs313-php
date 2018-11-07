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
  <title>Manage Item</title>
    <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>

</head>
<body>
  <div>

    <h1>Items Type Available</h1><br>
    <a href="/library/main.php">Home</a>
    <form action="/library/insertItemType.php" style="width: 50%">
      <button type="submit" class="btn alert-success">Add Item Type</button><br>        
    </form>

    <?php

        $statement = $db->prepare("SELECT item_type_id, name, description
                                   FROM item_type");
        $statement->execute();
        echo '<div class="list-group" style="width: 50%">';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){          
          echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">';
          echo '<div class="d-flex justify-content-between">';
          echo        '<small>' . $row['item_type_id'] . '</small>';
          echo        '<h5 class="mb-1">' . $row['name'] . '</h5>';
          echo '</a>';          
          echo  '</div>';
          echo  '<p class="mb-1">' . $row['description'] . '</p>';
          echo '<form action="deleteItemType.php" method=POST>
                <input type="hidden" value="'. $row['item_type_id'].'" name="item_type_id" />
                  <button type="submit" class="btn btn-danger">Delete</button><br><br>        
                </form>';
        }
        echo '</div>';
    ?>

  </div>