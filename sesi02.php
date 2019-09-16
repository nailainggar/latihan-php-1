<?php

session_start();
if (isset($_SESSION['login'])) {
    echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
  ?>  

    <FORM ACTION ="" METHOD="POST" NAME="input">
        <h2>Formulir Pendaftaran</h2>

        <table border=0>
        <tr>
        <td valign ="top" >NO PENDAFTARAN </td>     
        <td><input type="number" name="no"></td>
        </tr><br>

        <tr>
        <td valign = "top ">NISN</td>          
         <td> <input type="number" name="nis"></td>
         </tr></br>
         <tr>
        <td valign ="top"> Nama    </td>          
        <td> <input type="text" name="nama"></td>
        </tr><br>
    </form>
}
<?php
if (isset($_POST['Register'])) {
    $no = $_POST['no'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];

    echo " NO PENDAFTARAN : $no <br>";
    echo " NIS : $nis <br>";
    echo " Nama : $nama <br>";
    

} else {
    die ("Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='login.php'>di sini</a>");

}
