<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
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
    <form action="tampilan.php" method="post" id="pendaftaran">
    <h2>Daftarkan Diri Anda</h2><br>
        <label for="">Nama Lengkap :</label>
        <input type="text" name="nama"><br>

        <label for="">Tanggal lahir :</label>
        <input type="date" name="tanggal"><br>

        <label for="">Email : </label>
        <input type="email" name="email" required><br>

        <label for="">Password :</label>
        <input type="password" name="pw" required><br>

        <input type="submit" name="kirim">
    </form>
    <footer>
        Copyright &copy; 2022
        Designed by AliyaIrfani
    </footer>
    <script src="main.js"></script>
</body>
</html>