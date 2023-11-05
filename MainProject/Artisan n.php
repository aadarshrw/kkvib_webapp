<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Artisan n.css">
    <link rel="icon" href="assets/gandhi.png">
    <title>KKVIB | Artisan New</title>
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
        <header>New Artisan</header>
        <br>
        <form method="post" action="http://localhost/MainProject/PHP/artisan new.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="number" name="phno" placeholder="Enter phone number" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Bank Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Aadhar</label>
                            <input type="text" name="aadhar" placeholder="Enter aadhar number" required>
                        </div>
                        <div class="input-field">
                            <label>IFSC</label>
                            <input type="text" name="ifsc" placeholder="Enter IFSC number" required>
                        </div>
                        <div class="input-field">
                            <label>Account Number</label>
                            <input type="text" name="accno" placeholder="Enter account number" required>
                        </div>
                        <div class="input-field">
                            <label>Bank</label>
                            <input type="text" name="bank" placeholder="Enter Bank Name" required>
                        </div>
                        <div class="input-field" style="position: absolute; left: 0px; bottom: -175px;">
                            <label>Center</label>
                            <select name="center">
                            <?php
                                $sql = "SELECT Name, SHRT FROM centers";
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
                        </div>
                    </div>
                    <input type="submit" value="Submit">
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
