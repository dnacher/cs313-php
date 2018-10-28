<?php

function get_db() {
	$db = NULL;
	try {
			$dbUser = 'xrobtfjaujboos';
			$dbPassword = '92dbd43bccca8eb7c543e1664382c228f6627ded37010f312ffe0e057c572842';
			$dbName = 'd68l84sh86peu';
			$dbHost = 'ec2-23-21-171-249.compute-1.amazonaws.com';
			$dbPort = '5432';
			$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
			// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
			$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}catch (PDOException $ex) {		
			echo "Error connecting to DB. Details: $ex";
			die();
		}
	return $db;
}

?>