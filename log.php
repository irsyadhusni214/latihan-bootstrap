<?php
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    if ($user == "heavenz" && $pass = "123") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju halaman pemeriksaan session
        echo "<h1>Anda Berhasil Login</h1>";
        echo "<h2>Klik <a href='latihan2.php'>Disini</a>
            Untuk menuju ke halaman Pendaftaran";
    } else {
        die("Username atau Password salah
            silahkan login <a href='log.php'>LOGIN</a>");
    }
} else {
    ?>
<html>
    <head>
        <title>Login Here...</title>
    </head>
    <body>
    <fieldset>
    <legend><strong>Login Bray..</strong></legend>
        <form action="" METHOD="post">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user" required><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="LOGIN">
        </form>
    </fieldset>
    </body>
</html>
<?php 
} ?>