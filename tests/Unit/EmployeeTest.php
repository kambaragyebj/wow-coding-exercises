<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Exercises\Employee;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    public function testPrintEmployeeData()
    {
        // Assert the we got status 200 
        $response = $this->get('/');
        $response->assertStatus(200);
        // Check if string is a valid json
        $this->assertJson(Employee::EMPLOYEE,'Data provide is json');
       // check if the fucnction returns array 
        $this->assertIsArray(Employee::decodeJsonData(), "Array data format");
       // check array is not empty
       $this->assertNotEmpty(Employee::decodeJsonData(), "Employee data is not empty");
     
    }

}
