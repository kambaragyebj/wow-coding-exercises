<?php

declare(strict_types=1);

namespace App\Exercises;

/**
* Print Pyramid.
*/

final class Pyramid
{
     
   public static function printPyramid(int $rows): string
   { 
       $pyramid =""; 

       for($i = 1; $i <= $rows; $i++) {
           //print spaces
           for($j=0;$j<$rows-$i;$j++){

               $pyramid .=" ";
           } 
           // print hashes
           for($k=0;$k<(2 * $i) - 1;$k++){
            
               $pyramid .="#";
           }
        
           $pyramid .="\n";
          
       }
       
      return $pyramid;
   }

  public static function printPyramidWithBorderLine(int $rows): string
  { 
      $pyramid =""; 
      
      for($i = 1; $i <= $rows; $i++) {
          
          // print left border line
          $pyramid .="'";
           
          // print spaces
          for($j=0;$j<$rows-$i;$j++){

             $pyramid .=" ";
          } 
          // print hashes
          for($k=0;$k<(2 * $i) - 1;$k++){
        
             $pyramid .="#";
        
          }

          //print right border line
          for($j=0;$j<$rows-$i;$j++){
            
              $pyramid .=" ";
          } 
          $pyramid .="'";
       
          $pyramid .="\n";
         
      }
      
     return $pyramid;
  }
   

}
