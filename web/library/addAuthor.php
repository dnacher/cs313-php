<?php
require("dbconnect.php");
$db = get_db();

$txtName = $_POST['txtAuthorName'];
$txtDescription = $_POST['txtDescription'];

try{
	
	$query = "INSERT INTO author (name, description)
	 VALUES ('$txtName', '$txtDescription')";

	$statement = $db->prepare($query);
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die();
?>