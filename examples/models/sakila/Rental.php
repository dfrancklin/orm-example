<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Rental
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=rental_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=rental_date, type=datetime, nullable=false)
	 */
	public $rentalDate;

	/**
	 * @ORM/Column(name=return_date, type=datetime, nullable=false)
	 */
	public $returnDate;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Inventory)
	 */
	public $inventory;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Customer)
	 */
	public $customer;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Staff)
	 */
	public $staff;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
