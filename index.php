<?php

/**
 * This is default file
 */

declare(strict_types=1);

require 'vendor/autoload.php';

use App\Controllers\MainClass;

$main = new MainClass();
$main->run();