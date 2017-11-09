<?php

namespace App\Models\RFID;

/**
 * @ORM/Entity
 */
class Log
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(type=date)
	 */
	public $data;

	/**
	 * @ORM/Column(type=time)
	 */
	public $hora;

	/**
	 * @ORM/BelongsTo(class=App\Models\RFID\Ambiente)
	 * @ORM/JoinColumn(name=ambiente)
	 */
	public $ambiente;

	/**
	 * @ORM/BelongsTo(class=App\Models\RFID\Aluno)
	 * @ORM/JoinColumn(name=aluno)
	 */
	public $aluno;

}
