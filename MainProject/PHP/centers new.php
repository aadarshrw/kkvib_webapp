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
    $name = $_POST['name'];
    $short = $_POST['short'];
    $sql = "INSERT INTO centers(`Name`, `SHRT`) VALUES('$name','$short')";
    if ($conn->query($sql) == TRUE) 
	{
  	    $error = 'Center created';
    }
    else
    {
        $error = 'Error!!';       
    }
?>
<html>
    <head>
        <title>KKVIB | Centers New</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Center created')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Centers n.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>