<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Actor
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=actor_id, type=int)
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
	 * @ORM/ManyToMany(class=App\Models\Sakila\Film, mappedBy=actors)
	 */
	public $films;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
