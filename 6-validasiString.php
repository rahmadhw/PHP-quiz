<?php 

function validateName($strvalid) {
    $cek = 'hello';
    if (count_chars($strvalid, 3) !== count_chars($cek, 3)) {
        return "unik";
    } else {
        return "tidak valid";
    }

}

$string = "hello";
$output = validateName($string);
echo "Output: " . $output;
