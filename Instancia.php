<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("5672413", "Leo Loiredo", 10.00);
$cliente = new Cliente("Leo Loiredo", "18 anos", "Rua da Rua dentro da rua", 03/03/2004, $conta);


echo $cliente->retornarConta()->retornarNumero();