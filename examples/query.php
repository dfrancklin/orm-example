<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use App\Models\GreeningU\Usuario;

$orm = Orm::getInstance();
$em = $orm->createEntityManager('GreeningU');
$query = $em->createQuery();
$usuarios = $query->from(Usuario::class, 'u')->list();

pr('<h1>Usuários (' . count($usuarios) . ')</h1>');

foreach($usuarios as $usuario) {
	pr('//////////////////////////////////////////////////////////////////////////////////////////');
	pr('<h2>' . "\t" . $usuario->nome . ' ' . $usuario->sobrenome . '</h2>');

	pr("\t" . '    ++++++++++++++++++++++++++++');

	if (!count($usuario->assinaturas)) {
		pr('<h3>' . "\t\t" . 'Usuário não possiu assinaturas ainda</h3>');
	} else {
		pr('<h3>' . "\t\t" . 'Assinaturas do usuário (' . count($usuario->assinaturas) . ')</h3>');

		foreach($usuario->assinaturas  as $comunidade) {
			pr('<strong>' . "\t\t\t" . $comunidade->nome . '</strong> do líder <strong>' . $comunidade->lider->nome . ' ' . $comunidade->lider->sobrenome . '</strong>');
		}
	}

	pr("\t\t" . '   -----------------------------------------');

	if (!count($usuario->comunidades)) {
		pr('<h3>' . "\t\t" . 'Usuário não possiu comunidades ainda</h3>');
	} else {
		pr('<h3>' . "\t\t" . 'Comunidades do usuário (' . count($usuario->comunidades) . ')</h3>');

		foreach($usuario->comunidades as $key => $comunidade) {
			pr('<h4>' . "\t\t\t" . $comunidade->nome . '</h4>');

			if (!count($comunidade->posts)) {
				pr('<h5>' . "\t\t\t\t" . 'Comunidade não possiu posts ainda</h5>');
			} else {
				pr('<h5>' . "\t\t\t\t" . 'Posts da comunidade "' . $comunidade->nome . '" (' . count($comunidade->posts) . ')</h5>');

				foreach($comunidade->posts  as $post) {
					pr('<strong>' . "\t\t\t\t\t" . $post->titulo . '</strong> do usuário <strong>' . $post->usuario->nome . ' ' . $post->usuario->sobrenome . '</strong>');
				}
			}

			pr("\t\t\t" . '   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~');

			if (!count($comunidade->usuarios)) {
				pr('<h5>' . "\t\t\t\t" . 'Comunidade não possiu usuários assinantes ainda</h5>');
			} else {
				pr('<h5>' . "\t\t\t\t" . 'Usuários assinantes da comunidade "' . $comunidade->nome . '" (' . count($comunidade->usuarios) . ')</h5>');

				foreach($comunidade->usuarios  as $assinante) {
					pr('<strong>' . "\t\t\t\t\t" . $assinante->nome . ' ' . $assinante->sobrenome . '</strong>');
				}
			}

			if ($key < count($usuario->comunidades) - 1){
				pr("\t\t\t" . '######################################################');
			}
		}
	}

	pr("\t\t" . '   -----------------------------------------');

	if (!count($usuario->posts)) {
		pr('<h3>' . "\t\t" . 'Usuário não possiu posts ainda</h3>');
	} else {
		pr('<h3>' . "\t\t" . 'Posts do usuário (' . count($usuario->posts) . ')</h3>');

		foreach($usuario->posts  as $post) {
			pr('<strong>' . "\t\t\t" . $post->titulo . '</strong> na comunidade <strong>' . $post->comunidade->nome . '</strong>');
		}
	}

	pr('//////////////////////////////////////////////////////////////////////////////////////////');
}
