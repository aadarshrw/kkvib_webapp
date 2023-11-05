<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Contigency.css">
    <link rel="icon" href="assets/gandhi.png">
    <title>KKVIB | Contigency</title>
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
        <header>Contigency</header>
        <br>
        <form method="post" action="http://localhost/MainProject/PHP/contigency.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Name</label>
                            <select name="name">
                            <?php
                                $sql = "SELECT Name FROM instructors";
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
                            <label>Vou No.</label>
                            <input type="text" name="vouno" required>
                        </div>
                        <div class="input-field">
                            <label>Electricity</label>
                            <input type="text" name="elec" required>
                        </div>
                        <div class="input-field">
                            <label>Water Ch./Replacement of meter</label>
                            <input type="text" name="water" required>
                        </div>
                        <div class="input-field">
                            <label>Spare Oil/grease/logwood/mal/diesel/maida</label>
                            <input type="text" name="spare" required>
                        </div>
                        <div class="input-field">
                            <label>Replacement of roof sheet</label>
                            <input type="text" name="roof" required>
                        </div>
                        <div class="input-field">
                            <label>Plumbing works</label>
                            <input type="text" name="plumb" required>
                        </div>
                        <div class="input-field">
                            <label>Weighting balance</label>
                            <input type="text" name="weigh" required>
                        </div>
                        <div class="input-field">
                            <label>Stationary</label>
                            <input type="text" name="statio" required>
                        </div>
                        <div class="input-field">
                            <label>Inaguration weaving training</label>
                            <input type="text" name="train" required>
                        </div>
                        <div class="input-field">
                            <label>Auto ch/coolie/Other Charges</label>
                            <input type="text" name="other" required>
                        </div>
                        <div class="input-field">
                            <label>Loom/Charka repair</label>
                            <input type="text" name="repair" required>
                        </div>
                    </div>
                    <input type="submit" value="Submit">
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
