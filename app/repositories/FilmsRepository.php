<?php 

namespace App\Repository;

use App\Model\Film;

/**
* @package App\Repository
* @author Mohammed JEMMOUDI
*/
class FilmsRepository implements FilmsRepositoryInterface {
	
	private $orm;

	function __construct()
	{
		$Application = \RKA\Slim::getInstance();
		$this->orm = $Application->container->get('ORM');
	}

	/**
	 * It returns all movies 
	 * @return Array
	 * @author Mohammed JEMMOUDI
	**/
	public function getAllFilms () {
		$allmovies = $this->orm->films()->find();
		$returnedL = [];
		foreach ( $allmovies as $movie ) {
		    $returnedL[] = $this->hydrateMovie( new Film, $movie );	
		}

		return $returnedL;
	}

	/**
	 * It returns a specific movie based on the ID
	 * @param Integer $id - "The movie ID"
	 * @return Film
	 * @author Mohammed JEMMOUDI
	**/
	public function selectMovie ( $filmId ) {
		$movie = $this->orm->films()->findOne( $filmId );
		$film  = null;
		if ( $movie != null ) {
			$film = $this->hydrateMovie( new Film, $movie );	
		}

		return $film;
	}

	/**
	 * 
	 * @param Film $movie 
	 * @return Film
	 * @author Mohammed JEMMOUDI
	**/
	private function hydrateMovie ( $film, $movie ) {
		$film->setId( $movie->id );
	    $film->setTitle( $movie->title );
	    $film->setType( $movie->type );
	    $film->setDirector( $movie->director );	
	    $film->setPicture( $movie->picture );	
	    $film->setRating( $movie->rating );	
	    $film->setSynopsis( $movie->synopsis );	
	    $film->setReleasedAt( $movie->released_at );

	    return $film;
	}
}