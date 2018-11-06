<?php
  require("dbconnect.php");
  $db = get_db();
  session_start();
  $txtUser = $_POST['user'];
  $txtUserType = $_POST['userType'];
  if(isset($txtUser)){
    echo $txtUser . "<br>";
    echo $txtUserType . "<br>";
    echo 'correct';    
  }else{
    echo $txtUser . "<br>";
    echo $txtUserType . "<br>";
    /*header("Location: index.php");
    die();*/
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
  <div>

    <h1>Books Available</h1><br>

    <form action="/library/insertItem.php" style="width: 50%">
      <button type="submit" class="btn alert-success">Add Item</button><br><br>        
    </form>
    <form action="/library/insertAuthor.php" style="width: 50%">
      <button type="submit" class="btn alert-success">Add Author</button><br><br>        
    </form>
    <form action="/library/insertItemType.php" style="width: 50%">
      <button type="submit" class="btn alert-success">Add Item Type</button><br><br>        
    </form>

    <?php

        $statement = $db->prepare("SELECT i.item_id as item_id, it.name as item_type_name,i.name as item_name, au.name as author_name
                                   FROM item i
                                   JOIN author au on au.author_id=i.author_id
                                   JOIN item_type it on i.item_type_id=it.item_type_id");
        $statement->execute();
        echo '<div class="list-group" style="width: 50%">';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){          
          echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">';
          echo '<div class="d-flex justify-content-between">';
          echo        '<small>' . $row['item_id'] . '</small>';
          echo        '<h5 class="mb-1">' . $row['item_name'] . '</h5>';
          echo '</a>';          
          echo  '</div>';
          echo  '<p class="mb-1">' . $row['author_name'] . '</p>';
          echo  '<small>' . $row['item_type_name']. '</small>';          
          echo '<form action="deleteItem.php" method=POST>
                <input type="hidden" value="'. $row['item_id'].'" name="id_item" />
                  <button type="submit" class="btn btn-danger">Delete</button><br><br>        
                </form>';
        }
        echo '</div>';
    ?>

  </div>