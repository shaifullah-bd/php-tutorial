<?php 

/**
 * We are learn php basic syntax
 */

declare(strict_types=1);

namespace App\Controllers;

/**
 * We are learn about echo, print, data types, string, numbers, math, constants, operators, if-else, switch, loops, function, arrays, superglobals
 */
class Tutorial1Class {
    
    /** Return Value: echo does not return a value and can be used in a statement, while print returns a value of 1 and can be used as part of an expression. */
    public function echoPrint():string
    {
        echo "Hello World";
        print("Hello World");

        $result = print "Helo world";
        echo $result;
    }
  
}