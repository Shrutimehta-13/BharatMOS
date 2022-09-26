<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	
	$number = $_POST['number'];

	$rate = $_POST['rate'];

	
	$complaint = $_POST['complaint'];

	// Database connection
	$conn = new mysqli('localhost','root','','feed_form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into feedback(firstName, lastName, number, rate, complaint) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiis", $firstName, $lastName, $number, $rate, $complaint);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>











