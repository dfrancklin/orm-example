<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use App\Models\GreeningU\Usuario;

$orm = Orm::getInstance();
$em = $orm->createEntityManager('GreeningU');
$id = 1;
$rs = $em->find(Usuario::class, $id);

if ($rs) {
	pr('Usuário <strong>' . $rs->nome . ' ' . $rs->sobrenome . '</strong>');
} else {
	pr('Não há usuários registrados com o ID "' . $id . '"');
}
