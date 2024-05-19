<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="spo-logo.png">
            </a>
        </div>
    </header>

    <section>

        <div class="main">
            <h1> Log in to Spotify</h1>
            
            <div class="account-connect">
                <button class="a-c-btn" id="g"><img src="google.png"><span>Continue with Google</span></button>
                <button class="a-c-btn" id="g"><img src="facebook.png"><span>Continue with facebook</span></button>
                <button class="a-c-btn" id="g"><img src="apple.png"><span>Continue with Apple</span></button>
            </div>

            <hr> 

            <div class="log-in">
                <form action="db.php" method="POST">
                    <label>Username</label>
                    <input type="text" placeholder="Username" name="username" id="username">
                    
                    <label>Password</label>
                    <input type="text" placeholder="Password" name="password" id="password">

                    <div class="switch">
                        <input type="checkbox" name="switch" id="switch">
                        <label for="switch"></label>
                        <span>Remember me</span>
                    </div>

                    <button>Log In</button>

                    <a href="verifUser.php">Forgot your password</a>

                </form>
            </div>

            <hr>

            <div class="last">
                <span>Don't you have an account?</span>
                <a href="register.php">Sign up for Spotify</a>
            </div>
        </div>
    </section>
</body>
</html>