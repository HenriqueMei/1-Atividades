<?php
$variavel = array('Caio', 103., TRUE, 2 , null);

foreach ($variavel as $variavel) {
    echo 'O valor é ';
    echo gettype($variavel), "</br>";
}
?>