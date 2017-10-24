<?php
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);

	$query = "SELECT user_id FROM Users";
	
	if ($result = $mysqli->query($query) ) {
		echo "<table>";
		echo "<th>User</th>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row['user_id']."</td></tr>";
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
