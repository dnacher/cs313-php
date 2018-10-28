<?php
  require("dbconnect.php");
  $db = get_db();

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

    <h1>Books Available</h1>

    <?php

        $statement = $db->prepare("SELECT i.item_id, it.name,i.name, au.name, 
                                   FROM item i
                                   JOIN author au on au.author_id=i.author_id
                                   JOIN item_type it on i.item_type_id=it.item_type_id");
        $statement->execute();
        echo '<div class="list-group">';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
          echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">';
          echo '<div class="d-flex w-100 justify-content-between">';
          echo        '<h5 class="mb-1">' . $row['name'] . '</h5>';
          echo        '<small>' . $row['it.name'] . '</small>';
          echo  '</div>';
          echo  '<p class="mb-1">' . $row[au.name] . '</p>';
          echo  '<small>' . $row[item_type_id]. '</small>';
          echo '</a>';
        }
        echo '</div>';
    ?>
  </div>