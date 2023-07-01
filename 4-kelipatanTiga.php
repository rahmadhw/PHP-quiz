<?php 

function kelipatantiga($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0) {
            if ($i === 9) {
                echo 'Kelipatan 3 ,' . '<br>';
            }else {
                echo 'Kelipatan tiga, ' . '<br>';
            }
        }else {
            echo $i .',' . '<br>';
        }
    }
}

kelipatantiga(10)



?>