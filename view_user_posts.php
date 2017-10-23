<?php
	$user = $_POST["username"];
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);

	$query = "SELECT author_id, content FROM Posts";
	
	if ($result = $mysqli->query($query) ) {
		echo "Posts:<br>";
		while ($row = $result->fetch_assoc()) {
			printf ("%s : %s<br>", $row["author_id"], $row["content"]);
		}
		$result->free();
	} 
	else {
		echo "Error: " . $query . "<br>" . $mysqli->error;
	}
		
	/* close connection */
	$mysqli->close();
?>
