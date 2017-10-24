<?php
	$user = $_POST["username"];
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);

	$query = "SELECT author_id, content FROM Posts";
	
	if ($result = $mysqli->query($query) ) {
		echo "<table><th>Author</th><th>Post</th>";
		while ($row = $result->fetch_assoc()) {
			echo"<tr><td>".$row['author_id']."</td>";
			echo "<td> | ".$row['content']."</td></tr>";
		}
		$result->free();
	} 
	else {
		echo "Error: " . $query . "<br>" . $mysqli->error;
	}
		
	/* close connection */
	$mysqli->close();
?>
