<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Address
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=address_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(length=50, nullable=false)
	 */
	public $address;

	/**
	 * @ORM/Column(length=50)
	 */
	public $address2;

	/**
	 * @ORM/Column(length=50, nullable=false)
	 */
	public $district;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\City)
	 */
	public $city;

	/**
	 * @ORM/Column(name=postal_code, length=10)
	 */
	public $postalCode;

	/**
	 * @ORM/Column(length=20, nullable=false)
	 */
	public $phone;

	/**
	 * @ORM/Column(nullable=false)
	 */
	public $location;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
