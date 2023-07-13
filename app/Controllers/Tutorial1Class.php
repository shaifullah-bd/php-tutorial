<?php 

/**
 * We are learn php basic syntax
 */

declare(strict_types=1);

namespace App\Controllers;

/**
 * We are learn about echo, print, data types, string, numbers, math, constants, operators, if-else, switch, loops, function, arrays, superglobals
 */
class Tutorial1Class 
{
    public function echoPrint(): void
    {
        echo "Hello World";
        print("<br> Hello World");

        $result = print "Hello World";
        echo '<br>'.$result;
    }

    /**
     * @return string
     */
    public function stringDataType(): string
    {
        return "Hello World From String Double Quote".' Hello World From String Single Quote';
    }

    /**
     * @param int $number
     * @return Integer
     */
    public function integerDataType(int $number): int
    {
        $number += 1;
        return $number;
    }

    /**
     * @param float $number1
     * @return float
     */
    public function floatDataType(float $number1): float
    {
        $number1 += 1.2;
        return $number1;
    }

    /**
     * @param bool $status
     * @return bool
     */
    public function boolDataType(bool $status, string $msgData): bool
    {
        if ($status === true) {
            echo $msgData;
        } elseif ($status === false) {
            echo "Status is False";
        } else {

        }

        return $status;
    }
}