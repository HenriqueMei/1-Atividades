<?php

$json = json_decode('{"Título": "Vidas secas", "Autor": "Graciliano Ramos", "Detalhes": {"Editora": "Ática"}}');

echo 'Título: ' . $json->Título . '<br>' .
    'Autor: ' . $json->Autor . '<br>' .
    'Editora: ' . $json->Detalhes->Editora;
