<?php
  
	$servername = "localhost";
	$username = "root";
	$pword = "";
	$dbname="kkvib";

	$conn = new mysqli($servername, $username, $pword, $dbname);

	if ($conn->connect_error) 
	{
		echo "<script>alert('Connection failed');</script>";
	}

    session_unset();
    session_destroy();

    header('location:../Login.php');
?>
