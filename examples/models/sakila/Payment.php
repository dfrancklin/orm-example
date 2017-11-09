<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Payment
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=payment_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(type=float, scale=10, nullable=false)
	 */
	public $amount;

	/**
	 * @ORM/Column(name=payment_date, type=datetime, nullable=false)
	 */
	public $date;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Customer)
	 */
	public $customer;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Staff)
	 */
	public $staff;

	/**
		 * @ORM/BelongsTo(class=App\Models\Sakila\Rental, optional=true)
	 */
	public $rental;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
