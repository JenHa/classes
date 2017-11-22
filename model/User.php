<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 16:25
 */

class User
{

    /**
     * @var string
     */
    public $nickname = '';

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $email = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param $password
     */
    public function encodePassword($password){

    }

    public function decodePassword(){

    }


}