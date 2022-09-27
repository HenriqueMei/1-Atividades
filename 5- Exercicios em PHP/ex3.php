<?php

$array = ["Sofia" => "31", "Jacó" => "41", "William" => "39", "Rafael" => "40"];

echo 'Ordem crescente por valor: ';
asort($array);
print_r($array);
echo '<br>';

echo 'Ordem crescente por chave: ';
ksort($array);
print_r($array);
echo '<br>';

echo 'Ordem decrescente por valor: ';
arsort($array);
print_r($array);
echo '<br>';

echo 'Ordem decrescente por chave: ';
krsort($array);
print_r($array);
