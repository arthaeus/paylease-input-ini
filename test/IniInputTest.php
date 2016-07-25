<?php

require __DIR__.'/../vendor/autoload.php';
use Input\IniInput as IniInput;

class IniInputTest extends PHPUnit_Framework_TestCase
{

    public function testIniInput()
    {
        $screenOutput = new IniInput();
        $this->assertEquals(1,1);

    }
}
