<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 19/10/17
 * Time: 10:09
 */

class Quest
{
    private $id;
    private $name;
    private $course;
    private $score;


    // List of getters & setters
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Personnage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Personnage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     * @return Personnage
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     * @return Personnage
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    // Hydratation
    public function hydrate(array $donnees)
    {
        if (isset($donnees['id'])) {
            $this->id = $donnees['id'];
        }

        if (isset($donnees['name'])) {
            $this->name = $donnees['name'];
        }

    }



}