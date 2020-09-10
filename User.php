<?php


class User
{
    public $name;
    public $login;
    public $password;
    public static $userCount = 0;

    function __construct($name, $login, $password)
    {
        $this->login = $login;
        $this->name = $name;
        $this->password = $password;
        ++self::$userCount;
    }

    function showInfo()
    {
        echo "Name: {$this->name} <br>";
        echo "Login: {$this->login} <br>";
        echo "Password: {$this->password}<br>";
    }
}

