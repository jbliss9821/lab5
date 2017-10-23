<?php
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);

	$query = "SELECT user_id FROM Users";
	
	if ($result = $mysqli->query($query) ) {
		echo "Users:<br>";
		while ($row = $result->fetch_assoc()) {
			printf ("%s\n", $row["user_id"]);
		}
		$result->free();
	} 
	else {
		echo "Error: " . $query . "<br>" . $mysqli->error;
	}
		
	/* close connection */
	$mysqli->close();
?>
