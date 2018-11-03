<?php
require("dbconnect.php");
$db = get_db();

$txtName = $_POST['txtName'];
$txtDescription = $_POST['txtDescription'];
$cmbItemType = $_POST['cmbItemType'];
$cmbAuthor = $_POST['cmbAuthor'];

echo 'nombre' . $txtName . '<br>';
echo 'descr' . $txtDescription . '<br>';
echo 'cmbitemtype' . $cmbItemType . '<br>';
echo 'cmbauthor' . $cmbAuthor . '<br>';
try{
	
	$query = "INSERT INTO item (name, description, author_id, item_id, active)
	 VALUES ('$txtName', '$txtDesciption', '$cmbitemtype', '$cmbauthor', true)";

	echo $query;

	//$statement = $db->prepare($query);
	//$statement->execute();

}catch (Exception $ex){
/*	echo "Error with DB. Details: $ex";
	die();*/
}
/*header("Location: main.php");
die();*/
?>