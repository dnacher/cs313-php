<?php
require("dbconnect.php");
$db = get_db();

$txtName = $_POST['txtName'];
$txtDescription = $_POST['txtDescription'];
$cmbItemType = $_POST['cmbItemType'];
$cmbAuthor = $_POST['cmbAuthor'];

try{
	
	$query = "INSERT INTO item (name, description, author_id, item_type_id, active)
	 VALUES ('$txtName', '$txtDescription', '$cmbAuthor','$cmbItemType', true)";

	$statement = $db->prepare($query);
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die();
?>