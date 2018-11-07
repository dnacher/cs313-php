<?php
require("dbconnect.php");
$db = get_db();

$id = $_POST['item_type_id'];

try{
	$query = 'DELETE FROM item_type WHERE item_type_id=:id';
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die(); 
?>