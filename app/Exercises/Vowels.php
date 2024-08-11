<?php

declare(strict_types=1);

namespace App\Exercises;

use Illuminate\Support\Facades\Log;

/**
* Count string vowels (aeiou).
*
* @method static int count(string $string)
* @example Vowels::count('Hello!') === 2
* @example Vowels::count('Why?') === 0
*/

final class Vowels
{

    public static function count(string $string): int
    {

        if (empty($string)) {
            Log::error('Vowels::count- String is empty');
            return 0;
        }

        try {

            $counter=0;
            $split_string = str_split($string);
            foreach($split_string as $char){
        
              if (strpos(env('VOWELS'), $char) !== false) {
    
                  $counter++;
               } 
            }
           
            return $counter;

        } catch (\Exception $e) {
            $errorMessage = sprintf(
                    'Encountered an error while counting vowels: %s:%d %s',
                    $e->getFile(),
                    $e->getLine(),
                    $e->getMessage()
            );

            Log::error($errorMessage);
           
        }

        return 0;

    }

}
