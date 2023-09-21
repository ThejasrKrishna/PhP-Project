<?php
	$Email = $_POST['Email'];
	$Name = $_POST['Name'];
	
	$conn =new mysqli('localhost','root','','data');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	$stmt = $conn->prepare("insert into t1(Email, Name) values(?, ?)");
		$stmt->bind_param("ss", $Email, $Name);
		$execval = $stmt->execute();
		 header ('location: http://localhost/t/index.php');
		$stmt->close();
		$conn->close();
	}
?>
	

