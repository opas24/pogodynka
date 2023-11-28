<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
public function dataGetFahrenheit(): array
{
    return [
        ['0', 32],
        ['0.5', 32.9],
        ['7.2', 44.96],
        ['10.3', 50.54],
        ['-100', -148],
        ['-50', -58],
        ['-20.5', -4.9],
        ['100', 212],
        ['50', 122],
        ['23.5', 74.3],
    ];

}


    /**
    @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();

        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrehneit(), "Expected $expectedFahrenheit Fahrenheit for $celsius Celsius, got {$measurement->getFahrehneit()}");
    }
}