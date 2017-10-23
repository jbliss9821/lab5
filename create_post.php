<?php
	$user = $_POST["username"];
	$post_content = $_POST["post_content"];
	$server = "mysql.eecs.ku.edu";
	$username = "jbliss";
	$password = "jbliss";
	$dbname = "jbliss";
	
	$mysqli = new mysqli($server, $username, $password, $dbname);
	
	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}
	
	if (empty($user)) {
		echo 'Not added.  Missing username.';
	}
	else if (empty($post_content)) {
		echo 'Not added.  Missing post content.';
	}
	else {
		
		if ($result = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$user'")) {
			$row_count = $result->num_rows;
			if ($row_count != 0) {
				$query = "INSERT INTO Posts (content, author_id) VALUES ('$post_content', '$user' );";

				if ($mysqli->query($query) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $query . "<br>" . $mysqli->error;
				}
			}
			else {
				echo "No user exists with that username";
			}
			$result->close();
		}
		
		/* close connection */
		$mysqli->close();
	}
?>