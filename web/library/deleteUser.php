<?php
require("dbconnect.php");
$db = get_db();

$id = $_POST['user_id'];

try{
	$query = 'DELETE FROM users WHERE user_id=:id';
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