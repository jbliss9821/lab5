<?php
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);

	$query = "SELECT user_id FROM Users";
	
	if ($result = $mysqli->query($query) ) {
		echo "Users:<br>";
		echo "<table>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			printf ("%s\n", $row["user_id"]);
			echo "</tr>";
		}
		$result->free();
		echo "</table>";
	} 
	else {
		echo "Error: " . $query . "<br>" . $mysqli->error;
	}
		
	/* close connection */
	$mysqli->close();
?>
