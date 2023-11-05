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
    $id=$_POST['id'];
    $sql="DELETE FROM artisans WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) 
	{
        $error = 'Deletion Successful';
    }
    else
    {
        $error = 'Deletion Failed';        
    }
?>
<html>
    <head>
        <title>KKVIB | Artisan Delete</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Deletion Successful')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Artisan d.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>