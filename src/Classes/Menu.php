<?php


namespace App\Classes;

use App\Interfaces\Command;

class Menu
{
    private array  $menuItems = [];

    public function setCommand(String $operation, Command $cmd)
    {
        $this->menuItems[$operation] = $cmd;
    }

    public function runCommand(String $operation)
    {
        $this->menuItems[$operation]->execute();
    }
}
