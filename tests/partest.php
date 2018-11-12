<?php
use PHPUnit\Framework\TestCase;
require 'par.php';

class parTests extends TestCase
{
    private $par;
 
    protected function setUp()
    {
        $this->par = new par();
    }
 
    protected function tearDown()
    {
        $this->par = NULL;
    }
 
    public function testesPar()
    {
        $result = $this->par->esPar(2);
        $this->assertEquals(0, $result);

    }

}
