<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Exercises\Denominator;
use Tests\TestCase;

class DenominatorTest extends TestCase
{
  
    public function testAmount200()
    {
        $denominations = [50 => 5];
        $amount = 200;
        $expected = [50 => 4];
        $this->assertEquals($expected, Denominator::getDenominations($amount, $denominations));
    }
    public function testAmount300()
    {
        $denominations =[50 => 0, 100 => 6];
        $amount = 300;
        $expected = [100 =>3];
        $this->assertEquals($expected, Denominator::getDenominations($amount, $denominations));
    }
    public function testAmount750()
    {
        $denominations =[50 => 1, 300 => 2, 100 => 1];
        $amount = 750;
        $expected =[50 => 1, 300 => 2, 100 => 1];
        $this->assertEquals($expected, Denominator::getDenominations($amount, $denominations));
    }
}
