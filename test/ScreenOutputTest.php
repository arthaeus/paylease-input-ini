<?php

require __DIR__.'/../vendor/autoload.php';
use Output\ScreenOutput as ScreenOutput;

class ScreenOutputTest extends PHPUnit_Framework_TestCase
{

    public function testScreenOutput()
    {
        $screenOutput = new ScreenOutput();
        $this->assertEquals(1,1);

    }
}
