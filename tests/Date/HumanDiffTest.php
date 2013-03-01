<?php
require_once 'Date/HumanDiff.php';

class Date_HumanDiffTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->dh = new Date_HumanDiff();
    }


    public function testGetJustNow()
    {
        $this->assertEquals('just now', $this->dh->get(100, 100));
        $this->assertEquals('just now', $this->dh->get(time() - 10));
        $this->assertEquals('in just a moment', $this->dh->get(time() + 10));
    }

    public function testGetAMinute()
    {
        $this->assertEquals('a minute ago', $this->dh->get(40, 100));
        $this->assertEquals('a minute ago', $this->dh->get(time() - 60));
        $this->assertEquals('a minute ago', $this->dh->get(time() - 50));
        // one minute in the future
        $this->assertEquals('a minute away', $this->dh->get(time() + 50));
        $this->assertEquals('a minute away', $this->dh->get(time() + 60));
        $this->assertEquals('a minute away', $this->dh->get(time() + 61));
    }

    public function testGetMinutes()
    {
        $this->assertEquals('2 minutes ago', $this->dh->get(-120, 0));
        $this->assertEquals('40 minutes ago', $this->dh->get(time() - 60 * 40));
        $this->assertEquals('2 minutes away', $this->dh->get(time() + 90));
        $this->assertEquals('40 minutes away', $this->dh->get(time() + 60 * 40));
    }

    public function testGetYesterday()
    {
        $this->assertEquals('yesterday', $this->dh->get(-86400, 0));
        $this->assertEquals('yesterday', $this->dh->get(time() - 86400));
    }

    public function testGetTomorrow()
    {
        $this->assertEquals('tomorrow', $this->dh->get(time() + 86400));
    }

    public function testGetDays()
    {
        $this->assertEquals('2 days ago', $this->dh->get(-86400 * 2, 0));
        $this->assertEquals('6 days ago', $this->dh->get(time() - 86400 * 6));
        $this->assertEquals('2 days away', $this->dh->get(time() + 86400 * 2));
    }

    public function testGetAWeek()
    {
        $this->assertEquals('a week ago', $this->dh->get(-86400 * 7, 0));
        $this->assertEquals('a week away', $this->dh->get(time() + 86400 * 7));
    }

    public function testGetWeeks()
    {
        $this->assertEquals('2 weeks ago', $this->dh->get(-86400 * 14, 0));
        $this->assertEquals('4 weeks ago', $this->dh->get(time() - 86400 * 28));
    }

    public function testGetAMonth()
    {
        $this->assertEquals('a month ago', $this->dh->get(-86400 * 45, 0));
    }

    public function testGetMonths()
    {
        $this->assertEquals('2 months ago', $this->dh->get(-86400 * 30 * 2, 0));
        $this->assertEquals('11 months ago', $this->dh->get(time() - 86400 * 30 * 11));
    }

    public function testGetAYear()
    {
        $this->assertEquals('a year ago', $this->dh->get(-86400 * 365, 0));
    }

    public function testGetYears()
    {
        $this->assertEquals('2 years ago', $this->dh->get(-86400 * 365 * 2, 0));
        $this->assertEquals('11 years ago', $this->dh->get(time() - 86400 * 365 * 11));
    }

    public function testGetStringTimestamp()
    {
        $this->assertEquals('3 months ago', $this->dh->get('2012-02-01 00:00:00','2012-04-19 00:00:00'));
        $this->assertEquals('4 months ago', $this->dh->get('2012-01-01','2012-04-19'));
    }

    public function testGetStringDateTime()
    {
        $this->assertEquals(
            '3 months ago',
            $this->dh->get(
                new DateTime('2012-02-01 00:00:00'),
                '2012-04-19 00:00:00'
            )
        );
        $this->assertEquals(
            '4 months ago',
            $this->dh->get(
                '2012-01-01',
                new DateTime('2012-04-19')
            )
        );
    }

    public function testSetLocaleExisting()
    {
        $this->assertTrue($this->dh->setLocale('de'));
        $this->assertEquals('gerade eben', $this->dh->get(time()));

        $this->assertTrue($this->dh->setLocale('el'));
        $this->assertEquals('μόλις τώρα', $this->dh->get(time()));
    }

    public function testSetLocaleParentExisting()
    {
        $this->assertTrue($this->dh->setLocale('de_AT'));
        $this->assertEquals('gerade eben', $this->dh->get(time()));

        $this->assertTrue($this->dh->setLocale('el_GR'));
        $this->assertEquals('μόλις τώρα', $this->dh->get(time()));
    }

    public function testSetLocaleNotExisting()
    {
        $this->assertFalse($this->dh->setLocale('mg'));
        $this->assertEquals('just now', $this->dh->get(time()));
    }

    public function testSetLocaleInvalid()
    {
        $this->assertFalse($this->dh->setLocale('/path/to/some/file.php'));
        $this->assertEquals('just now', $this->dh->get(time()));
    }

    public function testClearFormats()
    {
        $this->dh->clearFormats();
        $this->assertEquals(null, $this->dh->get(time()));
    }

    public function testAddFormatUnsorted()
    {
        $this->dh->addFormat(10, '10 or less seconds ago', 1, false);
        $this->assertEquals('just now', $this->dh->get(95, 100));
    }

    public function testAddFormatSorted()
    {
        $this->dh->addFormat(10, '10 or less seconds ago', 1, true);
        $this->assertEquals('10 or less seconds ago', $this->dh->get(95, 100));
    }
}

?>
