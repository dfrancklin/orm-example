<?php

namespace App\Models\Store;

/**
 * @ORM/Entity
 * @ORM/Table(name=item_order)
 */
class ItemOrder
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/BelongsTo(class=App\Models\Store\Order)
	 */
	public $order;

	/**
	 * @ORM/BelongsTo(class=App\Models\Store\Product)
	 */
	public $product;

	/**
	 * @ORM/Column(type=int)
	 */
	public $quantity;

}
