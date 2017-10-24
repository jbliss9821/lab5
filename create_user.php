<?php
	$user = $_POST["username"];
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);
	
	if (empty($user)) {
		echo 'Not added.  Username empty';
	}
	else {
		echo 'Username: '.$user.'<br>';
		/* check connection */
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}

		$query = "INSERT INTO Users (user_id) VALUES ( '$user' );";

		if ($mysqli->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $mysqli->error;
		}
		
		/* close connection */
		$mysqli->close();
	}
?>