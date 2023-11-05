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
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    
    $s = "SELECT * FROM admin WHERE username = '$user_name' && password = '$password'";
    $res = mysqli_query($conn,$s);
    $num = mysqli_num_rows($res);
    if($num == 1)
    {
        $row = mysqli_fetch_array($res);
        $_SESSION['temp'] = "temp";
        header('location:../Home.php');
    }
    else 
    {
        $error = 'Username/Password is incorrect';
    }
?>
<html>
    <head>
        <title>KKVIB | Login</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    echo'<a href="../Login.php">Retry</a>';
                    
                }
            ?>
        </div>
    </body>
</html>