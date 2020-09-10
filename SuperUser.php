<?php


class SuperUser extends User
{
    public $role;
    public static $superUserCount = 0;

    function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$superUserCount;
        --self::$userCount;
    }

    function showInfo()
    {
        parent::showInfo();
        echo "Role: {$this->role} <br> <br>";
    }
}
