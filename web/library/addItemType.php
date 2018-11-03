<?php
require("dbconnect.php");
$db = get_db();

$txtName = $_POST['txtName'];
$txtDescription = $_POST['txtDescription'];

try{
	
	$query = "INSERT INTO item_type (name, description, active)
	 VALUES ('$txtName', '$txtDescription', true)";

	$statement = $db->prepare($query);
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die();
?>