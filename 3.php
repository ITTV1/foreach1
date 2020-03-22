<?php

//unserialize()

//mixed unserialize(string $st)

$css = ['111', '222', '888', '777'];
$html = serialize($css);
// превращаем $css в строку
echo $html;
// выводим сериализующее представление
$css = "phpi";
// испортили то, что было раньше в $css
echo count($css);
// выводит 1
$css = unserialize($html);
// восстанавливаем $css
echo count($css);
// выводит 4



?>


