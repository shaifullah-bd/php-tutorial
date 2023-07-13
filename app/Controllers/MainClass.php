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
class MainClass
{
  public function run():void
  {
    $tutorial1 = new Tutorial1Class();
    echo $tutorial1->echoPrint();
    echo '<br>';
    echo $tutorial1->stringDataType();
    echo '<br>';
    echo $tutorial1->integerDataType(5);
    echo '<br>';
    echo $tutorial1->floatDataType(5.1);
    echo '<br>';

    $tutorial2 = new Tutorial2Class();
    echo $tutorial2->getMessage();
  }
}