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
    $command=$_POST['command'];
    $id=$_POST['id']; 
    $valuenew=$_POST['valuenew'];
    $columnnew=$_POST['columnnew'];

    if($command == 'UPDATE')
    {
        $sql="UPDATE instructors SET $columnnew = '$valuenew' WHERE id = '$id'";
        if ($conn->query($sql) == TRUE) 
	    {
            $error = 'Updation Successful';
        }
        else
        {
            $error = 'Updation failed';        
        }
    }
    if($command == 'DELETE')
    {
        $sql="DELETE FROM instructors WHERE id = '$id'";
        if ($conn->query($sql) == TRUE) 
	    {
            $error = 'Deletion Successful';
        }
        else
        {
            $error = 'Deletion failed';       
        }
    }
?>
<html>
    <head>
        <title>KKVIB | Instructor Update/Delete</title>
        <link rel="stylesheet" href="CSS/output.css">
        <link rel="icon" href="../assets/gandhi.png">
    </head>
    <body>
        <div class="text-container">
            <?php
                if(isset($error))
                {
                    echo'<h1>'.$error.'</h1>';
                    if($error == 'Updation Successful' || $error == 'Deletion Successful')
                    {
                        echo'<a href="../Home.php">Home</a>';
                    }
                    else
                    {
                        echo'<a href="../Instructor u.php">Retry</a>';
                    }
                }
            ?>
        </div>
    </body>
</html>