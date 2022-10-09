<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilan.css">
    <title>Tampilan Data</title>
</head>
<body>
<nav class="wrapper">
        <div class="brand">
            <div class="first">review</div>
            <div class="last">perfume</div>
        </div>
        <ul class="nav">
            <li><a href="index.php">home</a></li>
            <li><a href="aboutme.html">about me</a></li>
            <li><a href="signup.php">sign up</a></li>
        </ul>
    </nav>
    <div id="theme">
        <div onclick="setDarkMode(true)" id="darkBtn" class="icon"><img src="ikon.webp"></div>
        <div onclick="setDarkMode(false)" id ="lightBtn" class="is-hidden"><img src="ikon.webp" color = "white"></div>
    </div>
    <?php 
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $tanggal = $_POST['tanggal'];
            $email = $_POST['email'];
            $password = $_POST['pw'];

            echo "<br> Nama : $nama";
            echo "<br> Tanggal Lahir : $tanggal";
            echo "<br> Email : $email";
            
        }
?>
    <footer>
        Copyright &copy; 2022
        Designed by AliyaIrfani
    </footer>
    <script src="main.js"></script>
</body>
</html>