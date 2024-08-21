<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Exercises\Vowels;
use Tests\TestCase;

class VowelsTest extends TestCase
{
    public function testCountVowelsTwo()
    {
        // Assert the we got status 200 
        $response = $this->get('/exercise-2');
        $response->assertStatus(200);

        //Actual output
        $actual = Vowels::count('Hello!');
        // Expected output for 3 rows
        $expectedOutput = 2;

        $this->assertEquals($expectedOutput, $actual);
    }
    public function testCountVowelsZero()
    {
        // Assert the we got status 200 
        $response = $this->get('/exercise-2');
        $response->assertStatus(200);

        //Actual output
        $actual = Vowels::count('Why?');
        // Expected output for 3 rows
        $expectedOutput = 0;

        $this->assertEquals($expectedOutput, $actual);
    }
}
