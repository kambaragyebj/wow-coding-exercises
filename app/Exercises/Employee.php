<?php

declare(strict_types=1);

namespace App\Exercises;

use Psr\Log\LoggerInterface;

final class Employee
{
    private const EMPLOYEE = '[
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

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function decodeJsonData(): array
    {
        $decoded_employees = json_decode(self::EMPLOYEE, true);

        if(null != $decoded_employees && json_last_error() === JSON_ERROR_NONE){

            $this->logger->info("The Json data was decoded successfully", $decoded_employees);

            return $decoded_employees;

        }else{

          $this->logger->error('\Exercises\Employee:decodeJsonData'. json_last_error_msg());

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

          $this->logger->error('EmployeeController:display'. json_last_error_msg());
          echo "Error decoding JSON: " . json_last_error_msg();
        }

    }**/


}
