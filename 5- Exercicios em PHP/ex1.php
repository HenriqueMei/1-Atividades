<?php

$europa = [
    "Itália" => "Roma",
    "Luxemburgo" => "Luxemburgo",
    "Bélgica" => "Bruxelas",
    "Dinamarca" => "Copenhagen",
    "Finlândia" => "Helsinki",
    "França" => "Paris",
    "Eslováquia" => "Bratislava",
    "Eslovênia" => "Ljubljana",
    "Alemanha" => "Berlin",
    "Grécia" => "Atenas",
    "Irlanda" => "Dublin",
    "Holanda" => "Amsterdam",
    "Portugal" => "Lisboa",
    "Espanha" => "Madri",
    "Suécia" => "Estocolmo",
    "Reino Unido" => "Londres",
    "Chipre" => "Nicosia",
    "Lituânia" => "Vilnius",
    "República Tcheca" => "Praga",
    "Estônia" => "Tallin",
    "Hungria" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Áustria" => "Viena",
    "Polônia" => "Varsóvia"
];

foreach ($europa as $key => $value) {
    ksort($europa);
    asort($europa);
}

foreach ($europa as $key => $value)
    echo 'A capital da ' . $key . ' é ' . $value . '<br>';
