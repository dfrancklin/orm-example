<?php

namespace App\Models\Store;

/**
 * @ORM/Entity
 */
class Staff
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	public $name;

	/**
	 * @ORM/BelongsTo(class=App\Models\Store\Staff, optional=true)
	 */
	public $supervisor;

	/**
	 * @ORM/HasMany(class=App\Models\Store\Staff)
	 */
	public $supervisees;

}
