<?php

$arquivo = 13;
$link = 300;

$tamanho_real = $arquivo * 8;
$tempo_download = $tamanho_real/$link;

echo "O tempo aproximado é ". $tempo_download;



?>