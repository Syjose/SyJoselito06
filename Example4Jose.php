<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Enrolling_of_Subjects";
	
	$conn = new mysqli ($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
	
	$sql = "insert into SubjectsInfo(SubjectCode, SectionSubject, Unit,
		Room, Days, SubjectTime, NameOfProfessor)
		value('MATH1', 'SBIT1C-Mathematics in the Modern World', '3', 'IC306a', 'Friday', '7:00AM to 10:00AM',
		'Mr.Corazon Law')";
	if($conn->query($sql) === true) {
	echo "new record created successfully";
	}
	else
	{
	echo "Error inserting data: " . "<br>" . $conn->error;
	}
	$conn->close();
?>