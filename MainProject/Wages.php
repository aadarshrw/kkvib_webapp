<html>
    <head>
        <link rel="stylesheet" href="CSS/Wages.css">
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
        <div class="content">
            <div class="sidebox">
                <h1>WAGES</h1>
                <div class="form">
                <form action="http://localhost/MainProject/PHP/wages.php" method="get" target="_parent">
                    <p>YEAR</p>
                    <select name="year">
                        <?php
                            $sql = "SELECT DISTINCT Year FROM wages";
                            $res = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($res);

                            if($num > 0)
                            {
                                while($row = mysqli_fetch_array($res))
                                {
                                    echo "<option>".$row['Year']."</option>";
                                };
                            }
                            else
                            {
                                echo "</select>";
                            }
                        ?>
                    </select>
                    <p>MONTH</p>
                    <select name="month">
                        <?php
                            $sql = "SELECT DISTINCT Month FROM wages";
                            $res = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($res);

                            if($num > 0)
                            {
                                while($row = mysqli_fetch_array($res))
                                {
                                    echo "<option>".$row['Month']."</option>";
                                };
                            }
                            else
                            {
                                echo "</select>";
                            }
                        ?>
                    </select>
                    <p>SELECT CENTER</p>
                    <select name="center">
                        <?php
                            $sql = "SELECT DISTINCT Center FROM wages";
                            $res = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($res);

                            if($num > 0)
                            {
                                while($row = mysqli_fetch_array($res))
                                {
                                    echo "<option>".$row['Center']."</option>";
                                };
                            }
                            else
                            {
                                echo "</select>";
                            }
                        ?>
                    </select>
                    <br>
                    <input type="submit" value="SUBMIT">
                    <input type="reset" value="CLEAR">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>