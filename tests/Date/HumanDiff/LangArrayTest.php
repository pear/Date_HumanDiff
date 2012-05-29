<?php
require_once 'Date/HumanDiff/Lang/de.php';

class Date_HumanDiff_LangArrayTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->la = new Date_HumanDiff_Lang_de();
    }


    public function testNoTranslation()
    {
        $this->assertEquals('foo bar', $this->la->get('foo bar'));
    }

    public function testTranslation()
    {
        $this->assertEquals('gerade eben', $this->la->get('just now'));
    }
}


