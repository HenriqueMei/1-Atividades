<?php
function Reverse($string){
    return strrev($string);
}

$string = "Ouviram do Ipiranga as margens placidas";
echo Reverse($string);

$conta = str_word_count($string);
echo "<br/> <br/>";
echo $conta;

echo "<br/> <br/>";
$pos = mb_strpos($string, "gen", 0);
    if ($pos == 0){
        echo "0";
    }

echo $pos;

echo "<br/> <br/>";
echo strlen($string);
?>

