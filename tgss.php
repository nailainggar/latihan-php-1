<?php
session_start();
if (isset($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
//periksa login
if ($user == "naila" && $pass = "123") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo '<h2>Klik <a href="tgss01.php">di sini
(tgss01.php)</a>
untuk menuju ke halaman selanjutnya';
}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h2>Login Here...</h2>
    Username : <input type="text" name="user"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>

<?php } ?>