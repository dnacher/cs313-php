<?php
require("dbconnect.php");
$db = get_db();

$txtname = $_POST['txtName'];
$txtDescription = $_POST['txtDescription'];
$cmbItemType = $_POST['cmbItemType'];
$cmbAuthor = $_POST['cmbAuthor'];

echo $txtName;
echo $txtDescription;
echo $cmbItemType;
echo $cmbAuthor;
/*try{
	
	$query = 'DE item WHERE id_item=:id';
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	
	$statement->execute();
}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die();*/ 
?>