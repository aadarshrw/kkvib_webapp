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
    $vouno = $_POST['vouno'];
    $elec = $_POST['elec'];
    $water = $_POST['water'];
    $spare = $_POST['spare'];
    $roof = $_POST['roof'];
    $plumb = $_POST['plumb'];
    $weigh = $_POST['weigh'];
    $statio = $_POST['statio'];
    $train = $_POST['train'];
    $other = $_POST['other'];
    $repair = $_POST['repair'];

    $sql = "SELECT * FROM instructors WHERE Name = '$name'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    
    $center = $row['Center'];

    $total= $elec + $water + $spare + $roof + $plumb + $weigh + $statio + $train + $other + $repair; 
    $sql = "INSERT INTO contigency(`Center`,`Name`, `Vou No`, `Electricity`, `Water`, `Spare`, `Roof`, `Plumbing`, `Weighting`,`Stationary`, `Inauguration`, `Other`, `Repair`, `Total`) VALUES('$center','$name','$vouno','$elec','$water','$spare','$roof','$plumb','$weigh','$statio','$train','$other','$repair','$total')";
    if ($conn->query($sql) == TRUE) 
	{
  	    $error = 'Contigency entered';
    }
    else
    {
        $error = 'Error!!';       
    }
?>
<html>
    <head>
        <title>KKVIB | Contigency</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Contigency entered')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Contigency.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>