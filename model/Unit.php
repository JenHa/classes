<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 13:17
 */

class Unit
{

    /**
     * @var string
     */
    public $unitTitle = '';


    /**
     * @var string
     */
    public $state = '';

    /**
     * @return string
     */
    public function getUnitTitle()
    {
        return $this->unitTitle;
    }

    /**
     * @param string $unitTitle
     */
    public function setUnitTitle($unitTitle)
    {
        $this->unitTitle = $unitTitle;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


}