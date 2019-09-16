<?php
    if (isset($_POST['pilih'])) {
        $nama = $_POST['nama'];
        $jln = $_POST['jln'];
        $keca = $_POST['ke'];
        $desa = $_POST['de'];
        $ko = $_POST['ko'];
        $nbarang = $_POST['barang'];
        $hbarang= $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $des = $_POST['deskripsi'];
        $tgl = $_POST['tgl'];

        

        echo "Nama              : $nama<br>";
        echo "Jalan/Kp          : $jln<br>";
        echo "Kecamatan         : $keca<br>";
        echo "Desa              : $desa<br>";
        echo "Kode              : $ko<br>";
        echo "Nama Barang       : $nbarang<br>";
        echo "Harga Barang      : $hbarang<br>";
        echo "Jumlah  Barang    : $jumlah<br>";
        echo "Deskripsi         : $des<br>";
        echo "Tanggal Pembelian : $tgl<br>";


        if ($jumlah > 10) {
           $a = (0.2*$jumlah);
           $c= ($hbarang - $a);
           echo" Anda mendapatkan diskon 20% ";
        } elseif ($jumlah >5) {
            $b = (0.1*$jumlah);
            $d= ($hbarang - $b);
            echo"Anda mendapatkan diskon 10% ";
        } elseif ($jumlah <= 0) {
            echo"maaf yang anda masukan salah";
        }


    
         }







?>