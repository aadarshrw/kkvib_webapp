<html>
    <head>
        <link rel="stylesheet" href="CSS/spinning.css">
        <link rel="icon" href="assets/gandhi.png">
        <title>KKVIB | Spinning</title>
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
            $_SESSION['table'] = "params_sp";                                
        ?>
    </head>
    <body>
        <a href="Home.php"><img src="assets/back.png"></a>
        <div class="loginbox"><br>
            <h1>Spinning</h1><br>
            <form method="post" action="http://localhost/MainProject/PHP/parameters.php">
                <p>Name</p><br>
                <select name="name">
                    <?php
                        $sql = "SELECT Name FROM params_sp";
                        $res = mysqli_query($conn,$sql);
                        $num = mysqli_num_rows($res);

                        if($num > 0)
                        {
                            while($row = mysqli_fetch_array($res))
                            {
                                echo "<option>".$row['Name']."</option>";
                            };
                        }
                        else
                        {
                            echo "</select>";
                        }
                    ?>
                </select>
                <br><p>New Value</p><br>
                <input type="text" name="valuenew" placeholder="Enter the new value"><br><br>
                <input type="submit" value="Update">
            </form>
        </div>
    </body>
</html>