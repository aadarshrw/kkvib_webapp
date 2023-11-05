<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Salary.css">
    <link rel="icon" href="assets/gandhi.png">
    <title>KKVIB | Salary</title>
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
    <div class="container">
        <header>Salary</header>
        <br>
        <form method="post" action="http://localhost/MainProject/PHP/salary.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Name</label>
                            <select name="name">
                            <?php
                                $sql = "SELECT Name FROM artisans";
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
                        </div>
                        <div class="input-field">
                            <label>NMC</label>
                            <input type="number" name="nmc" placeholder="Enter the NMC" required>
                        </div>
                        <div class="input-field">
                            <label>Muslin</label>
                            <input type="number" name="muslin" placeholder="Enter muslin number" required>
                        </div>
                        <div class="input-field">
                            <label>Salary</label>
                            <input type="text" name="salary" placeholder="Enter the salary" required>
                        </div>
                    </div>
                    <input type="submit" value="Submit">
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
