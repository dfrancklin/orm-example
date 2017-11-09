<?php

namespace App\Models\RFID;

/**
 * @ORM/Entity
 * @ORM/Table(name=responsaveis)
 */
class Responsavel
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int, name=id_resp)
	 */
	public $id;

	/**
	 * @ORM/Column(name=nome_resp)
	 */
	public $nome;

	/**
	 * @ORM/Column(name=cel_resp)
	 */
	public $celular;

	/**
	 * @ORM/Column(name=email_resp, unique=true)
	 */
	public $email;

	public $senha;

	public $nivel;

	/**
	 * @ORM/ManyToMany(class=App\Models\RFID\Aluno)
	 * @ORM/JoinTable(tableName=responsavel_aluno, join={name=resp_id}, inverse={name=aluno_id})
	 */
	public $alunos;

}
