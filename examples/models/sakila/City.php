<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class City
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=city_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=city, length=50, nullable=false)
	 */
	public $name;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Country)
	 */
	public $country;

	/**
	 * @ORM/HasMany(class=App\Models\Sakila\Address)
	 */
	public $addresses;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
