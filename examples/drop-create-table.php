<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use App\Models\RFID\Aluno;
use App\Helpers\InitDatabase;

$ds = DIRECTORY_SEPARATOR;

$orm = Orm::getInstance();
$orm->setConnection('RFID', [
	'namespace' => 'App\\Models\\RFID',
	'modelsFolder' => __DIR__ . $ds . 'models' . $ds . 'rfid',
	'drop' => true,
	'create' => true,
	'beforeDrop' => [new InitDatabase, 'beforeDrop'],
	'afterCreate' => [new InitDatabase, 'afterCreate'],
]);

$em = $orm->createEntityManager();

$proxy = $em->find(Aluno::class, 1);

if ($proxy) {
	$entity = $proxy->__getObject();
	vd($entity);
}