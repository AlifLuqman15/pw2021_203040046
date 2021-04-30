<?php 
/*
Alif Luqman Hakim
203040046
https://github.com/AlifLuqman15/pw2021_203040046
Pertemuan 3 - 19 Februari 2021
Mempelajari struktur kendali PHP
*/
?>

<?php 
        // Pengkondisian / Percabangan
        // if else
        // if else if
        // ternary
        // switch

    // contoh 1
        $x = 10;
        if ($x < 20) {
                         //apakah $x lebih kecil dari 20? maka hasilnya true atau benar
          echo "Benar <br>";	//10 lebih kecil dari 20 hasilnya true
        } else {
    
            echo "Salah";
        }
    
    //contoh 2 
        $x = 200;
            if($x > 100) {
                echo "Benar <br>";
            } else {
                echo "Salah";
            }
    
    //contoh 3 + if else {
            $x = 100;
            if($x > 100) {
                echo "Benar <br>";
            }else if($x == 100) {
                echo "Bingo!";
            }else {
                echo "Salah";
            }
        

?>