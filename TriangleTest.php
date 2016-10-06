<?php
use PHPUnit\Framework\TestCase;

include 'Triangle.php';

class TriangleTest extends TestCase
{
    public function testEquilateral()
    {
        $triangle = new triangle(7,7,7);
        $this->assertEquals('Equilateral', $triangle->runTriangle()['answer'], 'Equilateral');
    }

    public function testIsosceles()
    {
        $triangle = new triangle(5,3,3);
        $this->assertEquals('Isosceles', $triangle->runTriangle()['answer'], 'Isosceles');
    }

    public function testScalene()
    {
        $triangle = new triangle(5,4,3);
        $this->assertEquals('Scalene', $triangle->runTriangle()['answer'], 'Scalene');
    }

    public function testNotATriangle()
    {
        $triangle = new triangle(3,4,10);
        $this->assertEquals('Not a triangle', $triangle->runTriangle()['answer'], 'Not a triangle');
    }
}
