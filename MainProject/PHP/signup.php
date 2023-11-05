<?php
	session_start();
  
	$servername = "localhost";
	$username = "root";
	$pword = "";
	$dbname="kkvib";

	$conn = new mysqli($servername, $username, $pword, $dbname);

	if ($conn->connect_error) 
	{
		echo "<script>alert('Connection failed');</script>";
	}
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $sql = "INSERT INTO admin(`username`, `password`) VALUES('$username','$password')";
    if ($conn->query($sql) == TRUE) 
	{
  	    $error = 'Account created';
    }
    else
    {
        $error = 'Account creation failed';       
    }
?>
<html>
    <head>
        <title>KKVIB | Sign Up</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Account created')
                    {
                        echo'<a href="../Login.php">Login</a>';
                    }
                    else
                    {
                        echo'<a href="../Sign Up.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>