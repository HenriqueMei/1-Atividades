<?php

$string = "Maybe one day I'll be an honest man Up 'til now I'm doing the best I can";

$conta = str_word_count($string);
echo $conta;

$substring = explode(" ", $string, -1);
echo "<br/> <br/>";
print_r(explode(" ", $string, $conta));
?>

