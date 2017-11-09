<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Inventory
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=inventory_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Film)
	 */
	public $film;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Store)
	 */
	public $store;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
