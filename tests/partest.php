<?php
use PHPUnit\Framework\TestCase;
require 'par.php';
class parTests extends TestCase
{
    private $pares;
 
    protected function setUp()
    {
        $this -> pares = new Par();
    }
 
    protected function tearDown()
    {
        $this -> pares = NULL;
    }
 
    public function testA()
    {
        $result = $this-> pares->par(1);
        $this->assertEquals(1, $result);
    }
    public function testB()
    {
        $result = $this->pares->par(2);
        $this->assertEquals(0, $result);
    }
    public function testD()
    {
        $result = $this->pares->par(10);
        $this->assertEquals(0, $result);
    }
 
}
