<?php

namespace App\Helpers;

use ORM\Interfaces\IEntityManager;

class InitDatabase
{

	private $data = [];

	public function __construct()
	{
	}

	public function beforeDrop(IEntityManager $em)
	{
	}

	public function afterCreate(IEntityManager $em)
	{
		$supervisor = new \App\Models\Store\Staff;
		$supervisor->name = 'Diego';

		$staff = new \App\Models\Store\Staff;
		$staff->name = 'Aline';
		$staff->supervisor = $supervisor;

		$staff2 = new \App\Models\Store\Staff;
		$staff2->name = 'Stephen';
		$staff2->supervisor = $supervisor;

		$staff3 = new \App\Models\Store\Staff;
		$staff3->name = 'King';
		$staff3->supervisor = $supervisor;

		$staffs = [$supervisor, $staff, $staff2, $staff3];

		$em->beginTransaction();
		$em->save($staffs);
		$em->commit();
	}

}
