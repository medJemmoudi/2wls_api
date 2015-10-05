<?php 
namespace App\Repository;

interface FilmsRepositoryInterface {

	/**
	 * It returns all movies 
	 * @return Array
	 * @author Mohammed JEMMOUDI
	**/
	public function getAllFilms();

	/**
	 * It returns a specific movie based on the ID
	 * @param Integer $id - "The movie ID"
	 * @return Film
	 * @author Mohammed JEMMOUDI
	**/
	public function selectMovie( $filmId );

}