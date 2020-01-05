<?php


namespace App\Classes;

use App\Interfaces\Command;

class DeleteCommand implements Command {

    public function execute() {
        echo "Deleting file";
    }
}

