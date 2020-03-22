<?php

$st1 = "5531534564654564|Антон Антонов|2020-03-11|Текст пишем здесь (|)!";
$pers = explode("|", $st1, 3); // Мы знаем, что там только 4 поля.
// Распределяем по переменным:
list ($id, $name, $burn, $comment) = $pers;


//Списки и строки
//
//
//|
//
//explode()
//implode()
//
//
//list explode(string $token, string $str [, int $limit])
//
//string implode(string $glu, list $list)
//или
//string join(string $glu, list $list)




?>


