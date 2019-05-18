<?php
function crossX($jumlah){
    for ($i = 1; $i <= $jumlah; $i++){

        for ($j = 1; $j <= $jumlah; $j++){
            if ( $i == $j || $j==$jumlah-$i+1){
                echo "x";
            }
            else{
                echo "=";
            }
        }
        echo "<br/>";
    }
}
	echo crossX(9);
