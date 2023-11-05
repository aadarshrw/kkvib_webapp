<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Centers n.css">
    <link rel="icon" href="assets/gandhi.png">
    <title>KKVIB | Centers New</title>
</head>
<body>
    <a href="Home.php"><img src="assets/back.png"></a>
    <div class="container">
        <header>Centers</header>
        <br>
        <form method="post" action="http://localhost/MainProject/PHP/centers new.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter the center name" required>
                        </div>
                        <div class="input-field">
                            <label>Short Form</label>
                            <input type="text" name="short" placeholder="Enter the short form" required>
                        </div>
                    <input type="submit" value="Submit">
                </div> 
            </div>
        </form>
    </div>
</body>
</html>
