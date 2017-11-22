<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 13:04
 */

class Ingredient
{

    /**
     * @var string
     */
    public $title ='';

    /**
     * @var string
     */
    public $description = '';

    /**
     * @var Unit
     */
    public $unit;

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

    /**
     * @return Unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param Unit $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }


}