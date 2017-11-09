<?php

namespace App\Models\Sakila;

/**
 * @ORM/Entity
 */
class Film
{

	/**
	 * @ORM/Id
	 * @ORM/Generated
	 * @ORM/Column(name=film_id, type=int)
	 */
	public $id;

	/**
	 * @ORM/Column(nullable=false)
	 */
	public $title;

	/**
	 * @ORM/Column(type=lob)
	 */
	public $description;

	/**
	 * @ORM/Column(name=release_year, type=int)
	 */
	public $realeaseYear;

	/**
	 * @ORM/Column(name=rental_duration, type=int, nullable=false)
	 */
	public $rentalDuration;

	/**
	 * @ORM/Column(name=rental_rate, type=float, scale=4, precision=2, nullable=false)
	 */
	public $rentalRate;

	/**
	 * @ORM/Column(type=int)
	 */
	public $length;

	/**
	 * @ORM/Column(name=replacement_cost, type=float, scale=5, precision=2, nullable=false)
	 */
	public $replacementCost;

	/**
	 * @ORM/Column(length=5)
	 */
	public $rating;

	/**
	 * @ORM/Column(name=special_features, length=5)
	 */
	public $specialFeatures;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Language)
	 */
	public $language;

	/**
	 * @ORM/BelongsTo(class=App\Models\Sakila\Language)
	 * @ORM/JoinColumn(name=original_language_id)
	 */
	public $originalLanguage;

	/**
	 * @ORM/ManyToMany(class=App\Models\Sakila\Actor)
	 */
	public $actors;

	/**
	 * @ORM/ManyToMany(class=App\Models\Sakila\Category)
	 */
	public $categories;

	/**
	 * @ORM/Column(name=last_update, type=datetime, nullable=false)
	 */
	public $lastUpdate;

}
