<?php

namespace App\Models\RFID;

/**
 * @ORM/Entity
 * @ORM/Table(name=ambientes)
 */
class Ambiente
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=id_leitor)
	 */
	public $leitor;

	/**
	 * @ORM/Column(name=desc_ambiente)
	 */
	public $descricao;

	/**
	 * @ORM/hasMany(class=App\Models\RFID\Log)
	 */
	private $logs;

}
