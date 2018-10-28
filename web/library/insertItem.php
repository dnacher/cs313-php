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
  

    <form action="/library/addItem.php">
     
      <div class="form-group">
        <label for="txtName">Name</label>
        <input type="text" class="form-control" id="txtName" placeholder="Name of the item">
      </div>
      <div class="form-group">
        <label for="txtDescription">Description</label>
        <textarea class="form-control" id="txtDescription" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="cmbItemType">Item Type</label>
        <select multiple class="form-control" id="cmbItemType">
          <?php
            $statement = $db->prepare("SELECT item_type_id, name, Description FROM item_type WHERE active=true");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
              echo '<option>' . $row['name'] . '</option>';
            }

          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add item</button>
    </form>

</body>