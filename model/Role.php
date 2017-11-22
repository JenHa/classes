<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 16:31
 */

use Permission;

class Role
{

    /**
     * @var string
     */
    public $title = '';

    /**
     * @var array<Persmission>
     */
    public $rights;
}