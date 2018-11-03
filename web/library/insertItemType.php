<?php
  require("dbconnect.php");
  $db = get_db();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Insert Item Type</title>
    <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>
  </head>

  <body>
    <h2>Item Type</h2>

    <form action="addItemType.php" method="POST">

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name of the item">
          </div>
          <div class="form-group">
            <label for="txtDescription">Description</label>
            <textarea class="form-control" id="txtDescription" name="txtDescription" placeholder="Description of the item" rows="3"></textarea>
          </div>
          <input type="submit" value="Add Item">
    </form>

  </body>
</html>