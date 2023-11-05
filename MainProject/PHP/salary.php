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
    $nmc = $_POST['nmc'];
    $muslin = $_POST['muslin'];
    $total = $nmc + $muslin;
    $salary = $_POST['salary'];

    $sql = "SELECT * FROM artisans WHERE Name = '$name'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    
    $center = $row['Center'];
    $ifsc = $row['IFSC'];
    $accno = $row['AccNo'];
    $bank = $row['Bank'];

    $sql = "INSERT INTO salary(`Center`,`Name`, `NMC`, `MUSLIN`, `TOTAL`, `SALARY`, `IFSC`, `AccNo`, `Bank`) VALUES('$center','$name','$nmc','$muslin','$total','$salary','$ifsc','$accno','$bank')";
    if ($conn->query($sql) == TRUE) 
	{
  	    $error = 'Salary entered';
    }
    else
    {
        $error = 'Error!!';       
    }
?>
<html>
    <head>
        <title>KKVIB | Salary</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Salary entered')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Salary.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>