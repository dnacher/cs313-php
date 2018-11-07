<?php
require("dbconnect.php");
$db = get_db();

$id = $_POST['author_id'];

try{
	$query = 'DELETE FROM author WHERE author_id=:id';
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