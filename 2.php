<?php

//Упаковка

//string serialize(mixed $obj)
$B = ["w" => "w", "a" => "aa", "c" => ["y" => "yy"]];
$st = serialize($B);
//$st =  unserialize($B);
echo $st;
// выведется что-то типа:
//a:3:{s:1:"w";s:1:"w";s:1:"a";s:2:"aa";s:1:"c";a:1:{s:1:"y";s:2:"yy";}}



?>


