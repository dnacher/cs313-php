<?php
require("dbconnect.php");
$db = get_db();

$user_id = $_POST['user_id'];
$item_id = $_POST['item_id'];

try{
	$date1 = date();
	$date2 = $d=strtotime("+3 Days");
	$query = "INSERT INTO rent_table (user_id, item_id, date_start, date_end)
	 VALUES ('$user_id', '$item_id', date1, date2)";

	$statement = $db->prepare($query);
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: main.php");
die();
?>