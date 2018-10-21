<?php

$dbUser = 'xrobtfjaujboos';
$dbPassword = '92dbd43bccca8eb7c543e1664382c228f6627ded37010f312ffe0e057c572842';
$dbName = 'd68l84sh86peu';
$dbHost = 'ec2-23-21-171-249.compute-1.amazonaws.com';
$dbPort = '5432';
try
{
  // Create the PDO connection
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  // this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
  // If this were in production, you would not want to echo
  // the details of the exception.
  echo "Error connecting to DB. Details: $ex";
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
    <link rel="stylesheet" href="/library/css/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>
</head>

<body>
<div>

<h1>Books Available</h1>

<?php

$statement = $db->prepare("SELECT item_id, item_type_id,name, description FROM item");
$statement->execute();
echo '<div class="list-group">';
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">';
  /*d-flex w-100 justify-content-between*/
  echo '<div class="d-flex w-100 justify-content-between">';
  echo        '<h5 class="mb-1">' . $row['name'] . '</h5>';
  echo        '<small>' . $row['item_id'] . '</small>';
  echo  '</div>';
  echo  '<p class="mb-1">' . $row[description] . '</p>';
  echo  '<small>' . $row[item_type_id]. '</small>';
  echo '</a>';
}
echo '</div>';
?>


</div>