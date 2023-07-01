<?php

function initialName($strname) {
    $nameuser = [
        "DK" => "DADANG KURNIAWAN",
        "PSB" =>"SMK PASUNDAN SUBANG",
        "MUTU" =>"SMK MUHAMMADIYAH"
    ];

    foreach($nameuser as $nm => $value) {
        if ($value === strtoupper($strname)) {
            echo $nm;
        }
    }

}

initialName("dadang kurniawan");