<?php

for ($i=1; $i <= 10; $i++) { 
    echo "perkalian $i";
    echo"<br>";
    for ($j=1; $j <=10 ; $j++) { 
        $a =$i*$j;
        if ($a % 2 == 1) {
            echo "$i x $j = $a adalah bilangan ganjil";
        } else {
            echo "$i x $j = $a adalah bilangan genap";
        }
        echo"<br><br>";
    }
}