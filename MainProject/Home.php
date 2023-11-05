<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#242526">
        <title>KKVIB | Home</title>
        <link rel="icon" href="assets/gandhi.png">
        <link rel="stylesheet" href="CSS/Home.css">
        <link rel="manifest" href="manifest.json">
        <script src="JS/app.js"></script>
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
            if(!isset($_SESSION['temp']))
            {
                header('location:Login.php');
            }
        ?>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <a href="Intro.html" target="main"><img src="assets/KKvib.png" class="logo"></a>
                <ul>
                    <li class="fx"><a href="http://localhost/MainProject/Wages.php" target="main">Wages</a></li>
                    <li class="fx"><a href="Parameters.html" target="main">Parameters</a></li>
                    <li class="fx"><a href="Centers.html" target="main">Centers</a></li>
                    <li class="fx"><a href="http://localhost/MainProject/Reports.php" target="main">Reports</a></li>
                    <li class="fx"><a href="http://localhost/MainProject/Bills.php" target="main">Bills</a></li>
                    <li class="logout"><a href="http://localhost/MainProject/PHP/logout.php">Logout</a></li>
                </ul>
            </div>
            <iframe name="main" src="Intro.html"></iframe>
        </div>
    </body>
</html>
