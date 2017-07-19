<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mist3";

$conn= new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

$Name=$_POST['Name'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];

$sql="INSERT INTO task3(Name,Contact_number,email) VALUES('$Name','$Contact','$Email')";

	if($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

	if ($conn->query($sql) === TRUE) 
		{
		    echo "New record created successfully";
		}
		
	else 	
		{
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}


$conn->close();

?>