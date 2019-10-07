<?php
//1.class adalah sebuah blueprint/template
//untuk membuat instance dari objek
//2.class mendefinisikan objek
//3.class menyimpan data(property) dan perilaku(method)

//membuat class dengan nama kucing
    class kucing{
        //membuat property
        public $warna = "Coklat";
        public $jml_kaki = "4";
        public $mkn_fav = "Pindang";
        
        //membuat method dengan nama bersuara
        public function bersuara()
        {
            return "Miaww";
        }

    }
    //membuat objek baru
    //ditandai dengan keyword'new'
    $kucing1 = new kucing();
    $kucing1->warna = "Oren";

   // var_dump($kucing1);
    echo"Warna kucing;$kucing1->warna<br>";
    echo"Suaranya :".$kucing1->bersuara();
    