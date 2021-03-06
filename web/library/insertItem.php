<?php
  require("dbconnect.php");
  $db = get_db();

?>
<!DOCTYPE html>
<html>

<head>
  <title>Insert Item</title>
  <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>

</head>

<body>
  <h2>Item</h2>
  
<form action="addItem.php" method="POST">

      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name of the item">
      </div>
      <div class="form-group">
        <label for="txtDescription">Description</label>
        <textarea class="form-control" id="txtDescription" name="txtDescription" placeholder="Description of the item" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="cmbItemType">Item Type</label>
        <select class="form-control" id="cmbItemType" name="cmbItemType">
          <?php
            $statement = $db->prepare("SELECT item_type_id, name FROM item_type WHERE active=true");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
              echo '<option  value=' .$row[item_type_id] . '>' . $row['name'] . '</option>';
            }

          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="cmbAuthor">Author</label>
        <select class="form-control" id="cmbAuthor" name="cmbAuthor">
          <?php
            $statement = $db->prepare("SELECT author_id, name FROM author");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
              echo '<option  value=' .$row[author_id] . '>' . $row['name'] . '</option>';
            }
          ?>
        </select>
      </div>
      <input type="submit" class="btn btn-primary" value="Add Item">
</form>

</body>
</html>
