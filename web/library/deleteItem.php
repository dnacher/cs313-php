<?php
require("dbconnect.php");
$db = get_db();

$id = $_POST['id_item'];

try{
	$query = 'DELETE item WHERE id_item=$id';
	
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	echo $query;
	echo $statement;
	/*$statement->execute();*/
}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
//header("Location: main.php");
die(); 
?>