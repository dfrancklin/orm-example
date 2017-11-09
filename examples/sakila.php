<?php

include 'config.php';
include 'autoloader.php';
include 'functions.php';

include_once '../orm/load.php';

use ORM\Orm;

use App\Models\Sakila\Actor;
use App\Models\Sakila\Address;
use App\Models\Sakila\Category;
use App\Models\Sakila\City;
use App\Models\Sakila\Country;
use App\Models\Sakila\Customer;
use App\Models\Sakila\Film;
use App\Models\Sakila\Inventory;
use App\Models\Sakila\Language;
use App\Models\Sakila\Payment;
use App\Models\Sakila\Rental;
use App\Models\Sakila\Staff;
use App\Models\Sakila\Store;

$ds = DIRECTORY_SEPARATOR;

$orm = Orm::getInstance();
$orm->setConnection('Sakila');
$em = $orm->createEntityManager();

$proxy = $em->find(Category::class, 1);

if ($proxy) {
	$proxy->films;
	$entity = $proxy->__getObject();
	vd($entity);
}
