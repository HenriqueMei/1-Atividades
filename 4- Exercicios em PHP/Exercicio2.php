<?php

//a)

$txt = "Ouviram do Ipiranga às margens plácidas";
echo strrev ($txt);

echo "\n";

//b)

echo str_word_count($txt);

echo "\n";

//c)

$findme   = 'gen';
$valor = strpos($txt, $findme);

if ($valor === false) {
    echo 0;
} else {
    echo "posição $valor";
}

echo "\n";
//d)

echo strlen($txt);