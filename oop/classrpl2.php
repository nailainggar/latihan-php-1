<?php

    class rpl2{

        
        public $nama = "Marion";
        public $alamat = "Bandung";
        public $hoby = "Berenang";
        public $berat = "45";
        public $tinggi ="160";

        public function sifat()
        {
            return "baik";
        }
        
    }

    $rpl1 = new rpl2();
    $rpl1->nama = "Dila";
    $rpl1->hoby = "Membaca";
    $rpl1->alamat = "Jogja";

    echo"dia bernama $rpl1->nama tempat tinggalnya di $rpl1->alamat dan dia senang $rpl1->hoby<br>";
    echo"dia bersifat: ".$rpl1->sifat();