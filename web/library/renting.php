<?php
require("dbconnect.php");
$db = get_db();
session_start();
  $txtUser = $_SESSION['user'];
  $txtUserType = $_SESSION['userType'];
  $user_id = $_SESSION['user_id'];
  if(isset($txtUser)){
  	if($txtUserType!=3){
  		//this page is only for students.
  		header("Location: index.php");
    	die();	
  	}
    echo $txtUser . "<br>";
    echo $txtUserType . "<br>";
    echo 'correct';    
  }else{
    header("Location: index.php");
    die();
  }    

$user_id = $_POST['user_id'];
$item_id = $_POST['item_id'];

try{
	$date1 = date("y.m.d");
	$date2 = $d=strtotime("+3 Days");
	echo "d1 $date1 <br>";
	echo "d2 $date2 <br>";
	echo "uid $user_id <br>";
	echo "iid $item_id <br>";
	$query = "INSERT INTO rent_table (user_id, item_id, date_start, date_end)
	 VALUES ('$user_id', '$item_id', date1, date2)";

	$statement = $db->prepare($query);
	$statement->execute();

}catch (Exception $ex){
	echo "Error with DB. Details: $ex";
	die();
}
/*header("Location: main.php");
die();*/
?>