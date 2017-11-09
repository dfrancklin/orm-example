<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use ORM\Constants\JoinTypes;

use App\Helpers\InitDatabase;
use App\Models\Store\Staff;

$ds = DIRECTORY_SEPARATOR;

$orm = Orm::getInstance();
$orm->setConnection('Store-SQLite', [
	'namespace' => 'App\\Models\\Store',
	'modelsFolder' => __DIR__ . $ds . 'models' . $ds . 'store',
	'create' => true,
	// 'drop' => true,
	// 'beforeDrop' => [new InitDatabase, 'beforeDrop'],
	'afterCreate' => [new InitDatabase, 'afterCreate'],
]);

$em = $orm->createEntityManager();
$query = $em->createQuery(Staff::class);
$staffs = $query
	->join(Staff::class, 'sup', JoinTypes::LEFT)
	->list();

foreach($staffs as $staff) {
	vd(
		$staff->name . ' is ' . (
			empty($staff->supervisor) ?
				'a supervisor' :
				'supervised by ' . $staff->supervisor->name
		)
	);
}
