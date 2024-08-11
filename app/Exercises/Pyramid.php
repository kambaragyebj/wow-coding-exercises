<?php

declare(strict_types=1);

namespace App\Exercises;

use Psr\Log\LoggerInterface;


/**
* Print Pyramid.
*/

final class Pyramid
{
     
    private LoggerInterface $logger;
 
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function printPyramid(int $rows)
    {
        $output ="";
        $output .= "<pre>";

        $numbersOfSpaces = 2 * $rows - 2;
        
        for ($i = 0; $i < $rows; $i++)
        {
            for ($j = 0; $j < $numbersOfSpaces; $j++)
        
                $output .=" ";
                $numbersOfSpaces -=1;

            for ($j = 0; $j <= $i; $j++ )
            {
                $output .="# ";
            }
                $output .="\n";
        }

        echo $output;
        
    }

}
