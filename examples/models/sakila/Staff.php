<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Staff
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=staff_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=first_name, length=45, nullable=false)
	 */
	public $firstName;

	/**
	 * @ORM/Column(name=last_name, length=45, nullable=false)
	 */
	public $lastName;

	/**
	 * @ORM/Column(type=lob)
	 */
	public $picture;

	/**
	 * @ORM/Column(length=50)
	 */
	public $email;

	/**
	 * @ORM/Column(type=bool, nullable=false)
	 */
	public $active;

	/**
	 * @ORM/Column(length=16, nullable=false)
	 */
	public $username;

	/**
	 * @ORM/Column(length=40)
	 */
	public $password;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Address)
	 */
	public $address;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Store)
	 */
	public $store;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
