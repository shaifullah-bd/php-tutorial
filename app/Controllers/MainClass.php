<?php

/**
 * This file is our project main file
 */

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Tutorial1Class;

/**
 * Project main class
 */
class MainClass{
    public function run():void
    {
        $tutorial1 = new Tutorial1Class();
        $tutorial1->echoPrint();
    }
}