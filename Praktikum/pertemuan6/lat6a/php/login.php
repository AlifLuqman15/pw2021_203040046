<?php
// Alif Luqman Hakim
// 203040046
// https://github.com/AlifLuqman15/pw2021_203040046
// Tugas Praktikum PW
// Jumat 10.00-11.00
?>

<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="css/huh.css">
    <title>Axell Store</title>
    <style>
        body {
            background-color: rgb(37, 48, 48);
            color: azure;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Axell Store</h3>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">

        <form action="" method="post">
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau password salah</p>
            <?php endif; ?>
            <div class="card-panel ">
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </div>
            <div class="remember">
                <label>
                    <label for="remember"></label>
                    <input type="checkbox" name="remember">
                    <span>Remember Me</span>
                </label>
                <br><br>
            </div>
            <button type="submit" name="submit" class="waves-effect waves-light btn-small blue darken-2">Login</button>
        </form>

    </div>
</body>

</html>