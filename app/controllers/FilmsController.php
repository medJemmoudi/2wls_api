<?php 
namespace App\Controller;

use App\Repository\FilmsRepositoryInterface;
/**
 * 
 *
 * @package App\Controller
 * @author Mohammed JEMMOUDI
 **/
class FilmsController {

	private $repository;
    public function __construct (FilmsRepositoryInterface $repository) {
    	$this->repository = $repository;
    }

    public function index ( )
    {
    	$movies = $this->repository->getAllFilms();
    	echo json_encode( $movies );
    }

    public function show ( $id )
    {
		$movie = $this->repository->selectMovie( $id );
		echo json_encode( $movie );
    }
} 