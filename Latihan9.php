<?php
    $arrWarna = array ("Blue","Black","Red","Yellow","Green");
    
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrWarna); $i++){
        echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]."</font> ?<br>";
    }

    echo "<br>Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrWarna); $i++){
        echo "<font color=$arrWarna[$i]> Do you like ". $arrWarna[$i]."</font> ?<br>";
    }

    echo "<br>Menampilkan isi Array dengan foreach : <br>";
    foreach ($arrWarna as $warna) {
        echo "Do you like <font color=$warna>". $warna ."</font>?<br>";
    }
    
    echo "<br>Menampilkan isi Array dengan foreach : <br>";
    foreach ($arrWarna as $warna) {
        echo "<font color=$warna> Do you like ". $warna ."</font>?<br>";
    }
?>