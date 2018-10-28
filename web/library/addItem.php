<?php
require("dbconnect.php");
$db = get_db();

$txtName = $_POST['txtName'];
$txtDescription = $_POST['txtDescription'];
$cmbItemType = $_POST['cmbItemType'];
$author = $_POST['cmbAuthor'];
$id = 1;
$active = true;


//try{
	echo $txtName;
	/*
	$statement = $db->prepare("select max (item_id) as max from item");
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    	$id = $row['max'];
    }
    $id = $id +1;
    /*$query = 'INSERT INTO item(item_id,item_type_id, name, description, author_id,active) 
    		  VALUES(:id, :cmbItemType, :txtName, :txtDescription, :cmbAuthor,:active)';
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->bindValue(':cmbItemType', $cmbItemType);
	$statement->bindValue(':txtName', $txtName);
	$statement->bindValue(':txtDescription', $txtDescription);
	$statement->bindValue(':cmbAuthor', $cmbAuthor);
	$statement->bindValue(':active', $active);
	
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
//header("Location: main.php");
die(); */
?>