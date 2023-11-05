<html>
    <head>
        <link rel="stylesheet" href="CSS/Login.css">
        <link rel="icon" href="assets/gandhi.png">
        <title>KKVIB | Login</title>
    </head>
    <body>
        <div class="loginbox">
            <br>
            <h1>Login</h1>
            <br>
            <form method="post" action="http://localhost/MainProject/PHP/login.php">
                <p>Username</p>
                <input type="text" name="user_name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
                <input type="submit" value="Login">
                <a href="Sign Up.php">Don't have an account?</a>
            </form>
        </div>
        <div class="sideboxl">
            <img src="assets/KKvib.png">
        </div>
    </body>
</html>