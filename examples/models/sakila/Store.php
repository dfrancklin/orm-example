<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Store
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=store_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Staff)
	 * @ORM/JoinColumn(name=manager_staff_id)
	 */
	public $manager;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Address)
	 */
	public $address;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
