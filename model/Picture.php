<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 13:02
 */

class Picture
{

    /**
     * @var string
     */
    public $title = '';

    /**
     * @var string
     */
    public $description = '';

    /**
     * @var int
     */
    public $pictureID = 0;

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
     * @return int
     */
    public function getPictureID()
    {
        return $this->pictureID;
    }

    /**
     * @param int $pictureID
     */
    public function setPictureID($pictureID)
    {
        $this->pictureID = $pictureID;
    }

}