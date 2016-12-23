<?php
include("Class1.php");

class Class1Test extends PHPUnit_Framework_TestCase
{
    public function testmeghiv()
    {
        $res = Class1::meghiv();
        $this->assertEquals(Class1::meghiv(),6);
    }
}
