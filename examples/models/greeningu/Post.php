<?php

namespace App\Models\GreeningU;

/**
 * @ORM/Entity
 */
class Post
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(type=string, lenght=20)
	 */
	public $titulo;

	/**
	 * @ORM/Column(type=string, lenght=100)
	 */
	public $descricao;

	/**
	 * @ORM/Column(type=lob)
	 */
	public $imagem;

	/**
	 * @ORM/Column(type=datetime)
	 */
	public $data;

	/**
	 * @ORM/HasMany(class=App\Models\GreeningU\Voto)
	 */
	public $votos;

	/**
	 * @ORM/BelongsTo(class=App\Models\GreeningU\Usuario, cascade={INSERT})
	 */
	public $usuario;

	/**
	 * @ORM/BelongsTo(class=App\Models\GreeningU\Comunidade)
	 */
	public $comunidade;

}
