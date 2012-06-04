<?php
require_once 'Date/HumanDiff/Locale/de.php';

class Date_HumanDiff_LocaleArrayTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->la = new Date_HumanDiff_Locale_de();
    }


    public function testNoTranslation()
    {
        $this->assertEquals('foo bar', $this->la->get('foo bar', 0));
    }

    public function testTranslation()
    {
        $this->assertEquals('gerade eben', $this->la->get('just now', 0));
    }
}

?>
