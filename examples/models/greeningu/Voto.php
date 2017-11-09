<?php

namespace App\Models\GreeningU;

/**
 * @ORM/Entity
 */
class Voto
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/BelongsTo(class=App\Models\GreeningU\Usuario)
	 * @ORM/JoinColumn(name=usuario_id)
	 */
	public $usuario;

	/**
	 * @ORM/BelongsTo(class=App\Models\GreeningU\Post)
	 * @ORM/JoinColumn(name=post_id)
	 */
	public $post;

	/**
	 * @ORM/Column(name=data_voto, type=datetime)
	 */
	public $data;

	/**
	 * @ORM/Column(type=int)
	 */
	public $pontos;

}
