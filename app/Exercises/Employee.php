<?php

declare(strict_types=1);

namespace App\Exercises;

use Illuminate\Support\Facades\Log;

final class Employee
{
    public const EMPLOYEE = '[
        {
            "name": "Eryn Bryan",
            "age": "23",
            "company": "Fishnix"
        },
        {
            "name": "Hasnain O\'Ryan",
            "age": "32",
            "company": "Floataris"
        },
        {
            "name": "Briony Mathews",
            "age": "40",
            "company": "Swishterix"
        }
    ]';

    public static function decodeJsonData(): array
    {
        $decodedEmployees = json_decode(self::EMPLOYEE, true);

        if(null != $decodedEmployees && json_last_error() === JSON_ERROR_NONE){
            
            return $decodedEmployees;

        }else{

          Log::error('\Exercises\Employee:decodeJsonData'. json_last_error_msg());

          return [];
        }

        return [];
    }
    /** 
    public function showEmployeeData()
    {
        $decode_employees = json_decode(self::EMPLOYEE, true);
        
        if(null != $decode_employees && json_last_error() === JSON_ERROR_NONE){
  
            foreach($decode_employees as $employee){
  
                $output.= "Name: ".$employee['name']."<br>".
                          "Age: ".$employee['age']."<br>".
                          "Company: ".$employee['company']."<br>";
            }

            echo $output;

        }else{

          Log::error('\Exercises\Employee:decodeJsonData'. json_last_error_msg());
          echo "Error decoding JSON: " . json_last_error_msg();
        }

    }**/


}
