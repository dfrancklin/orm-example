<?php

namespace App\Models\Store;

/**
 * @ORM/Entity
 * @ORM/Table(name=orders)
 */
class Order
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/BelongsTo(class=App\Models\Store\Customer)
	 */
	public $client;

	/**
	 * @ORM/HasMany(class=App\Models\Store\ItemOrder)
	 */
	public $items;

}
