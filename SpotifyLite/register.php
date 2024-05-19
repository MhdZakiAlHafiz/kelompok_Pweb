<?php
$db = new mysqli("localhost", 'root', '', 'spotifylite');

if ($db->connect_errno) {
    die("Koneksi gagal");
}

$error = '';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        $error = "Harap isi semua kolom.";
    } else {
        $sql = 'INSERT INTO datalogin (username, password) VALUES (?, ?)';
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        if($stmt->affected_rows > 0) {
?>
    <div class="alert alert-success" role="alert">
        Berhasil mendaftar
    </div>
<?php 
        } else { 
?>
    <div class="alert alert-danger" role="alert">
        Gagal mendaftar. Silakan coba lagi.
    </div>
<?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            <h1> Register to start listening </h1>
        
            <div class="SignUp">
                <form action="register.php" method="POST">
                    <label>Username</label>
                    <input type="text" placeholder="Username" name="username" id="username">

                    <label>Password</label>
                    <input type="password" placeholder="Password" name="password" id="password">

                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </div>    
    </section>
    
</body>
</html>
