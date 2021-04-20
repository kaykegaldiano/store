<?php

$mysql = new mysqli('localhost:3307', 'root', '', 'store');
$mysql->set_charset('utf8');

if ($mysql == false) {
    echo "Erro na conexão";
}
