<?php
require("dbconnect.php");
$db = get_db();

$id = $_POST['id_item'];

try{
	$query = 'DELETE FROM item WHERE item_id=:id';
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