<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email];

	if (!empty($username) || !empty($password) || !empty(gender) || !empty($email) {
		
	} else {
		echo "ALL field required";
		die();
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "onionwallet;
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if (mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
		} else {
			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register (username, password, gender, email) values(?,?,?,?)";
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum=$stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $username, $password, $gender, $email);
				$stmt->execute();
				echo "new record insert";
			} else {
				echo "someone register liao la"
			}
			$stmt->close();
			$conn->close();
		}
	}else {
		echo "all field required";
		die();
		
	}
?>