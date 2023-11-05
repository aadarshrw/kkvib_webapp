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
    $valuenew=$_POST['valuenew'];
    $name=$_POST['name'];
    $table = $_SESSION['table'];
    $sql="UPDATE $table SET Rate = '$valuenew' WHERE Name = '$name'";
    if ($conn->query($sql) == TRUE) 
	{
        $error = 'Updation Successful';
    }
    else
    {
        $error = 'Updation Failed';        
    }
?>
<html>
    <head>
        <title>KKVIB | Parameters Update</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    echo'<a href="../Home.php">Home</a>';
                }
            ?>
        </div>
    </body>
</html>