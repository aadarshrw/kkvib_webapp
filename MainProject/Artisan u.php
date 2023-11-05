<html>
    <head>
        <link rel="stylesheet" href="CSS/Artisan u.css">
        <link rel="icon" href="assets/gandhi.png">
        <title>KKVIB | Artisan Update</title>
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
            <form method="post" action="http://localhost/MainProject/PHP/artisan upd.php">
                <p>ID</p><br>
                <select name="id">
                    <?php
                        $sql = "SELECT id FROM artisans";
                        $res = mysqli_query($conn,$sql);
                        $num = mysqli_num_rows($res);

                        if($num > 0)
                        {
                            while($row = mysqli_fetch_array($res))
                            {
                                echo "<option>".$row['id']."</option>";
                            };
                        }
                        else
                        {
                            echo "</select>";
                        }
                    ?>
                    </select>
                <br><p>New Value</p><br>
                <select name="columnnew">
                    <option value="Name">Name</option>
                    <option value="Address">Address</option>
                    <option value="Phone">Phone Number</option>
                    <option value="Aadhar">Aadhar</option>
                    <option value="IFSC">IFSC</option>
                    <option value="AccNo">Account Number</option>
                    <option value="Bank">Bank</option>
                </select>
                <input type="text" name="valuenew" placeholder="Enter the new value"><br><br>
                <input type="submit" value="Edit">
            </form>
        </div>
    </body>
</html>