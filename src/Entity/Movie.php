<?php
/**
 * Created by PhpStorm.
 * User: extra
 * Date: 12/19/2018
 * Time: 10:32 PM
 */
use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Movie
 * @ORM\Entity
 * @ORM\Table(name="movies")
 */
class Movie
{
    /**
     * @ORM\id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="integer")
     */
    protected $year;

    /**
     * @ORM\Column(type="integer")
     */
    protected $runtime;

    /**
     * @ORM\Column(type="string")
     */
    protected $genre;

    /**
     * @ORM\Column(type="date")
     */
    protected $release_date;

    /**
     * @ORM\Column(type="string")
     */
    protected $age_rating;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $imdb_rating;

    /**
     * @ORM\Column(type="integer")
     */
    protected $meta_rating;

    /**
     * @ORM\Column(type="integer")
     */
    protected $local_rating_id;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @ORM\Column(type="string")
     */
    protected $directors;

    /**
     * @ORM\Column(type="string")
     */
    protected $actors;

    /**
     * @ORM\Column(type="string")
     */
    protected $img;

    /**
     * Movie constructor.
     *
     */
    public function __construct($title, $year, $genre, $release_date, $age_rating, $imdb_rating, $meta_rating, $local_rating_id,  $description, $directors, $actors, $img)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->release_date = $release_date;
        $this->age_rating = $age_rating;
        $this->imdb_rating = $imdb_rating;
        $this->meta_rating = $meta_rating;
        $this->description = $description;
        $this->directors = $directors;
        $this->actors = $actors;
        $this->img = $img;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function getAgeRating()
    {
        return $this->age_rating;
    }

    public function getIMDBRating()
    {
        return $this->imdb_rating;
    }

    public function getMetaRating()
    {
        return $this->meta_rating;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDirectors()
    {
        return $this->directors;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function getImage()
    {
        return $this->img;
    }

}
?>