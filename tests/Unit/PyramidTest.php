<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Exercises\Pyramid;
use PHPUnit\Framework\TestCase;

class PyramidTest extends TestCase
{
    
    public function testPrintPyramid()
    {
        $pyramidPrinter = new Pyramid();
         
        //actual output
        $actual = $pyramidPrinter->printPyramid(3);
      
        // Expected output for 3 rows
        $expectedOutput = "  #\n ###\n#####\n";

        // Assert that the actual output matches the expected output
        $this->assertEquals($expectedOutput, $actual);

    }
    public function testPrintPyramidWithBorderLine()
    {
        $pyramidPrinter = new Pyramid();
         
        //Actual output
        $actual = $pyramidPrinter->printPyramidWithBorderLine(3);
       // Expected output for 3 rows
        $expectedOutput = "'  #  '\n' ### '\n'#####'\n";

        // Assert that the actual output matches the expected output
        $this->assertEquals($expectedOutput, $actual);

    }
}
