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
    $center = $_POST['center'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];
    $aadhar = $_POST['aadhar'];
    $ifsc = $_POST['ifsc'];
    $accno = $_POST['accno'];
    $bank = $_POST['bank'];
    $sql = "INSERT INTO artisans(`Center`, `Name`, `Address`, `Phone`, `Aadhar`, `IFSC`, `AccNo`, `Bank`) VALUES('$center', '$name','$address','$phno','$aadhar','$ifsc','$accno','$bank')";
    if ($conn->query($sql) == TRUE) 
	{
  	    $error = 'Details entered successfully';
    }
    else
    {
        $error = 'Error!!';       
    }
?>
<html>
    <head>
        <title>KKVIB | Artisan New</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Details entered successfully')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Artisan n.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>