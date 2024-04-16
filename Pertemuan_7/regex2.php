<?php
$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0] . "<br>";
 }else{
    echo "Tidak ada yang cocok! <br>";
 }
?>