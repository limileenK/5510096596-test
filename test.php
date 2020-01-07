<?php 
 


	$name = $_POST["name"]; 
	//echo $name;
	//echo "<br/>";


	$mobile_number = $_POST["mobile_number"]; 
    //echo $mobile_number; 
	//echo "<br/>";
	
	$pwd = $_POST["pwd"];
	//echo $pwd;
	//echo "<br/>";

	$intro = $_POST["intro"];
	//echo $intro;
	//echo "<br/>";

    if($name!="" && $mobile_number!="" && $pwd!="" && $intro!=""){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "shop";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		mysqli_set_charset($conn, "utf8");
		
		//$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sumyfcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมชาย', 'กาญจนบุรี', '#00ff00', '5', '0851243652', '5555', 'สวัสดี')";
		$sql = "INSERT INTO user (suuid, suname, sumobile_number, supwd, suintro) VALUES (NULL, '$name','$mobile_number', '$pwd', '$intro')";
		
		if ($conn->query($sql) === TRUE) {
			<div id="success_insert">
			   successfully </div>
		} else {
			echo "Error creating database: " . $conn->error;
		}
		
		$conn->close();

	}else{
		echo "Invalid Value";
	}


 
?>