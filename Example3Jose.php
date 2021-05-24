<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enrolling_of_Subjects";
	
	$conn = new mysqli ($servername, $username, $password, $dbname);
	
	if ($conn->connect_error){
		die("Connection Failed: " . $conn->connect_error);
		}
		
	$sql = "create table SubjectsInfo(
		SubjectCode varchar(10) primary key,
		SectionSubject varchar(50) not null,
		Unit int(10) not null,
		Room varchar(20) not null,
		Days varchar(15) not null,
		SubjectTime varchar(20) not null,
		NameOfProfessor varchar(30) not null)";
		
		if($conn->query($sql) === true) {
			echo "Table created successfully";
		}else {
			echo "Error creating table:" . $conn->error;
		}
		$conn->close();
?>