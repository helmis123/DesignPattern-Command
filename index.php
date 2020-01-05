<?php
require "vendor/autoload.php";

use App\Classes\{Menu,CreateCommand,DeleteCommand};

// Client creates Invoker object, command object and configure them
$menu = new Menu();
$menu->setCommand("Create", new CreateCommand());
$menu->setCommand("Delete", new DeleteCommand());
//Invoker invokes command
$menu->runCommand("Create");
echo '<BR>';
$menu->runCommand("Delete");

