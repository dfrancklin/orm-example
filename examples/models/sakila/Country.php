<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Country
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=country_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=country, length=50, nullable=false)
	 */
	public $name;

	/**
	 * @ORM/HasMany(class=App\Models\Sakila\City)
	 */
	public $cities;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
