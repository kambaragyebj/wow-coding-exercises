<?php

declare(strict_types=1);

namespace App\Exercises;

/**
* Given an amount and an array of denominations, return an array
* of denominations and numbers.
*
* @method static array getDenominations(int $amount, ?array
&$denominations)
* For example,
* Denominator::getDenominations(200, [50 => 5]) returns [50 => 4]
* Denominator::getDenominations(300, [50 => 0, 100 => 6]) returns [100 =>
3]
* Denominator::getDenominations(750, [50 => 1, 300 => 2, 100 => 1] returns
[50 => 1, 300 => 2, 100 => 1]
*
*/
final class Denominator
{
   
    public static function getDenominations(int $amount, ?array &$denominations): array
    {
        $result =[];
       
        try {

            foreach($denominations as $denomination=>$maxDenominations){
        
                $newAmount=0;
                $recurrence =[];
                $sum =0;
                
                if($maxDenominations >=1){

                    for($i=1;$i<=$maxDenominations;$i++){
                        if($amount !=0 && $amount >=$denomination){
                            $newAmount = $amount-$denomination;
                            $recurrence[]= $newAmount;
                            $amount =$newAmount;
                        } 
                    }
                
                   $result[$denomination]= $sum=(count($recurrence)); 
                }
            }  

            return $result;

        } catch (\Exception $e) {

            $errorMessage = sprintf(
                'Encounter error while getDenominations: %s:%d %s',
                $e->getFile(),
                $e->getLine(),
                $e->getMessage()
            );

            Log::error($errorMessage);
        }
      return $result;
    }

}
