<?php
		// Prints the current PHP verison
		echo "Current PHP version: " . phpversion() . "<br>";
		$host = "localhost";
    	$user = "test";
    	$pass = "t3st3r123";
   		$db = "test";
    	// Create connection
		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT ID, Eesnimi, Perekonnanimi FROM Andmed";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "ID: " . $row["ID"]. " - Eesnimi: " . $row["Eesnimi"]. " - Perekonnanimi: " . $row["Perekonnanimi"]."<br>";
    		}
    	} else {
    		echo "No data to be found";
		}
		$conn->close();
	?>