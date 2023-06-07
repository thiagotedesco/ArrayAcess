<?php

require_once '../vendor/autoload.php';

use \Tedesco\ArrayAccess\classes\Pessoa;

$pessoa = new Pessoa;
$pessoa['nome'] = 'João';
$pessoa['idade'] = 25;
$pessoa['peso'] = 70.5;

print_r($pessoa);

echo '<br>';

if (isset($pessoa['nome'])) {
    echo 'O atributo nome existe.';
}

unset($pessoa['idade']);

echo '<br>';

if (!isset($pessoa['idade'])) {
    echo 'O atributo idade foi removido.';
}