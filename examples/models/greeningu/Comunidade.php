<?php

namespace App\Models\GreeningU;

/**
 * @ORM/Entity
 */
class Comunidade
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(name=name, type=string, length=45)
	 */
	public $nome;

	/**
	 * @ORM/Column(type=datetime)
	 */
	public $data;

	/**
	 * @ORM/ManyToMany(class=App\Models\GreeningU\Usuario, mappedBy=assinaturas)
	 */
	public $usuarios;

	/**
	 * @ORM/BelongsTo(class=App\Models\GreeningU\Usuario, cascade={INSERT})
	 */
	public $lider;

	/**
	 * @ORM/HasMany(class=App\Models\GreeningU\Post, cascade={DELETE})
	 */
	public $posts;

	public function addUsuario(...$usuarios)
	{
		if (!is_array($this->usuarios)) {
			$this->usuarios = [];
		}

		foreach ($usuarios as $usuario) {
			if (!in_array($usuario, $this->usuarios, true)) {
				$this->usuarios[] = $usuario;
				$usuario->addAssinaturas($this);
			}
		}
	}

	public function addPosts(...$posts)
	{
		if (!is_array($this->posts)) {
			$this->posts = [];
		}

		foreach ($posts as $post) {
			$this->posts[] = $post;
			$post->comunidade = $this;
		}
	}

}
