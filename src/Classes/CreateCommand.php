<?php


namespace App\Classes;

use App\Interfaces\Command;

class CreateCommand implements Command {

    public function execute() {
        echo "Creating file";
    }
}

