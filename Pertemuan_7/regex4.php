<?php
 $pattern = '/go*d/'; // cocokkan "god", "good", "gooood", dll.
 $text = 'god is good.';
 if(preg_match($pattern, $text, $matches)){
     echo "Cocokkan: ". $matches[0] . "<br>";
 }else{
     echo "Tidak ada yang cocok! <br>";
}
?>