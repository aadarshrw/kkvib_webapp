<html>
    <head>
        <link rel="stylesheet" href="CSS/Centers u.css">
        <link rel="icon" href="assets/gandhi.png">
        <title>KKVIB | Centers Update</title>
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
        ?>
    </head>
    <body>
        <a href="Home.php"><img src="assets/back.png"></a>
        <div class="loginbox"><br>
            <h1>Update</h1><br>
            <form method="post" action="http://localhost/MainProject/PHP/centers upd.php">
                <p>Name</p><br>
                <select name="name">
                    <?php
                        $sql = "SELECT Name FROM centers";
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
                <p>New Value</p><br>
                <select name="columnnew">
                    <option value="Name">Name</option>
                    <option value="SHRT">Short</option>
                </select>
                <input type="text" name="valuenew" placeholder="Enter the old value"><br><br>
                <input type="submit" value="Edit">
            </form>
        </div>
    </body>
</html>