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
    $name=$_POST['name'];
    $valuenew=$_POST['valuenew'];
    $columnnew=$_POST['columnnew'];
    $sql="UPDATE centers SET $columnnew = '$valuenew' WHERE Name = '$name'";
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
        <title>KKVIB | Centers Update</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Updation Successful')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Centers u.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>