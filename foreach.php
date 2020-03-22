<?php

// Цикл перебирает копию массива,
//Ссылочный синтаксис foreach
//foreach ([111, 215, 555] as $ma)
//  echo "На заборе было написано: $ma.<br />";


  $number = [111, 300, 555];
  foreach ($number as $v) $v++;
  echo "Элементы этого массива: ";
  foreach ($number as $e) echo "$e ";
?>
