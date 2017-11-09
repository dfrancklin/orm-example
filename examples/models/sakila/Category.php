<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Category
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=category_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(length=25, nullable=false)
	 */
	public $name;

	/**
	 * @ORM/ManyToMany(class=App\Models\Sakila\Film, mappedBy=categories)
	 */
	public $films;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
