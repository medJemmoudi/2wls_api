<?php 

namespace App\Model;

/**
* @package App\Model
* @author Mohammed JEMMOUDI
*/
class Film
{
	public $id;
	public $title;
	public $director;
	public $rating;
	public $releasedAt;
	public $synopsis;
	public $type;
	public $picture;

    public function __sleep() {
        return [
            'id',
            'title',
            'rating',
            'releasedAt',
            'synopsis',
            'type',
            'picture'
        ];
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of director.
     *
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Sets the value of director.
     *
     * @param mixed $director the director
     *
     * @return self
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Gets the value of rating.
     *
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the value of rating.
     *
     * @param mixed $rating the rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Gets the value of releasedAt.
     *
     * @return mixed
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * Sets the value of releasedAt.
     *
     * @param mixed $releasedAt the released at
     *
     * @return self
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }

    /**
     * Gets the value of synopsis.
     *
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets the value of synopsis.
     *
     * @param mixed $synopsis the synopsis
     *
     * @return self
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of picture.
     *
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the value of picture.
     *
     * @param mixed $picture the picture
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}