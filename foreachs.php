<?php #
// Изменение элементов массива при переборе.
  $number = [111, 300, 444];
  foreach ($number as &$v) $v++;
  echo "Элементы  этого массива: ";
  foreach ($number as $z) echo "$z ";
?>
