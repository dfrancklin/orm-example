<?php

namespace App\Models\RFID;

/**
 * @ORM/Entity
 * @ORM/Table(name=alunos)
 */
class Aluno
{

	/**
	 * @ORM/Id
	 * @ORM/Column(unique=true)
	 */
	public $matricula;

	/**
	 * @ORM/Column(name=nome_aluno)
	 */
	public $nome;

	/**
	 * @ORM/Column(name=tag_aluno)
	 */
	public $tag;

	/**
	 * @ORM/ManyToMany(class=App\Models\RFID\Responsavel, mappedBy=alunos)
	 */
	public $responsaveis;

	/**
	 * @ORM/hasMany(class=App\Models\RFID\Log)
	 */
	public $logs;

}
