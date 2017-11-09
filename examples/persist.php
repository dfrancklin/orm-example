<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use App\Models\GreeningU\Comunidade;
use App\Models\GreeningU\Post;
use App\Models\GreeningU\Usuario;

$orm = Orm::getInstance();
$em = $orm->createEntityManager('GreeningU');

$lider = $em->find(Usuario::class, 1);
$usuario = new Usuario();

$usuario->nome = 'Bridges';
$usuario->sobrenome = 'Ferrell';
$usuario->email = 'bridgesferrell@stucco.com';
$usuario->login = 'magna';
$usuario->senha = 'voluptate';
$usuario->sexo = 'h';
$usuario->pontuacao = 2233;

$comunidade = new Comunidade;
$comunidade->lider = $lider;
$comunidade2 = new Comunidade;
$comunidade2->lider = $lider;
$usuario->addAssinaturas($comunidade, $comunidade2);

$post = new Post;

$post->titulo;
$post->descricao;
$post->imagem;
$post->data;
$post->votos;
$post->comunidade;
$usuario->addPosts($post);
$comunidade->addPosts($post);

try {
	$em->beginTransaction();
	$rs = $em->save($usuario);
	// $em->commit();

	vd($rs);

	$em->rollback();
} catch (Exception $e) {
	$em->rollback();
	throw $e;
}
