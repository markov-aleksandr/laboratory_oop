<?php
function __autoload($class)
{
    include "$class.php";
}

$user1 = new SuperUser('Aleksandr', 'Derzhavo', '123123', 'admin');
$user1->showInfo();
$user2 = new SuperUser('Aleksandr', 'asd', '123123', 'admin');
$user2->showInfo();
$user3 = new SuperUser('Aleksandr', 'asd', '123123', 'admin');
$user3->showInfo();
$user4 = new User('Aleksandr', 'da', '123123');
$user4->showInfo();
$user5 = new User('Aleksandr', 'asddas', '123123');
$user5->showInfo();
$user6 = new User('zxcczxxcz', 'czxzcxzxc', 'zxczcxzxcczx');
$user6->showInfo();

echo 'Всего обычных пользователей: ' . User::$userCount . '<br>';
echo 'Всего супер-пользователей: ' . SuperUser::$superUserCount . '<br>';