<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Language
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=language_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(length=20, nullable=false)
	 */
	public $name;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
