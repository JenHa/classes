<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 12:54
 */

class Cocktail
{

    /**
     * @var string
     */
    public $description = '';

    /**
     * @var string
     */
    public $title = '';

    /**
     * @var Picture
     */
    public $picture;

    /**
     * @var string
     */
    public $makingDescription = '';

    /**
     * @var array<ingredientCombination>
     */
    public $ingredientCombinations;



    /**
     * @var User
     */
    public $createdByUser;

    /**
     * Cocktail constructor.
     * @param string $description
     * @param string $title
     * @param Picture $picture
     * @param string $makingDescription
     * @param array $ingredientCombinations
     * @param User $createdByUser
     */
    public function __construct($description, $title, Picture $picture, $makingDescription, array $ingredientCombinations, User $createdByUser)
    {
        $this->description = $description;
        $this->title = $title;
        $this->picture = $picture;
        $this->makingDescription = $makingDescription;
        $this->ingredientCombinations = $ingredientCombinations;
        $this->createdByUser = $createdByUser;
    }


    /**
     * @return User
     */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }

    /**
     * @param User $createdByUser
     */
    public function setCreatedByUser($createdByUser)
    {
        $this->createdByUser = $createdByUser;
    }
    /**
     * @return string
     */
    public function getMakingDescription()
    {
        return $this->makingDescription;
    }

    /**
     * @param string $makingDescription
     */
    public function setMakingDescription($makingDescription)
    {
        $this->makingDescription = $makingDescription;
    }

    /**
     * @return array
     */
    public function getIngredientCombinations()
    {
        return $this->ingredientCombinations;
    }

    /**
     * @param array $ingredientCombinations
     */
    public function setIngredientCombinations($ingredientCombinations)
    {
        $this->ingredientCombinations = $ingredientCombinations;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return Picture
     */
    public function getPicture()
    {
        new Picture;
        return $this->picture;

    }

    /**
     * @param Picture $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}