<?php

namespace App\Models\Store;

/**
 * @ORM/Entity
 */
class Customer
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(type=string,nullable=false,length=50)
	 */
	public $name;

	/**
	 * @ORM/Column(type=string,nullable=false,length=50,unique=true)
	 */
	public $email;

	/**
	 * @ORM/Column(type=string,length=100)
	 */
	public $address;

	/**
	 * @ORM/HasMany(class=App\Models\Store\Order)
	 */
	public $orders;

}
