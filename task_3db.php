<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Mist";

$conn= new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}

$Name=$_POST['Name'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];

$sql="INSERT INTO task_3(Name,Contact_number,E-mail) VALUES($Name,$Contact,$Email)";

	if(!mysqli_query($conn,$sql))
		{
			echo "Not inserted";
		}
	else
		{
			echo "Inserted";
		}
$conn->close();

?>