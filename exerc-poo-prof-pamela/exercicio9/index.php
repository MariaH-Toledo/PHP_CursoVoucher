<?php

require_once './Controller/Usuario.php';
require_once './Model/Produto.php';

use App\Controller\Usuario;
use App\Model\Produto;


$usuario = new Usuario('maria');
$produto = new Produto('calça', 170.99);

echo 'nome do usuário: ' . $usuario -> getNome();
echo 'produto: ' . $produto -> getNome() . ' - Preço: R$' . $produto -> getPreco();
