
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','learninghub');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, email, mobile, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $name, $email, $mobile, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo ".....We have recieved your query.....";
		$stmt->close();
		$conn->close();
	}
?>