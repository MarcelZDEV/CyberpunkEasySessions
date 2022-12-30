<?php
require_once 'src/Config.php';

class CreateProcess1
{
    function setMenu($menuId)
    {
        if (Menu::getMenu()[$menuId] === "Stwórz postać")
        {
            include 'src/main.php';
        }

    }
}

$obj = new CreateProcess1();
Menu::prettyMenuList();

echo "Wybierz numer co chcesz zrobić: ";
$selectMenu = readline();
$obj->setMenu($selectMenu);
