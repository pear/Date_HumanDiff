<?php
require_once 'Date/Human.php';

class Date_HumanTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->dh = new Date_Human();
    }


    public function testGetJustNow()
    {
        $this->assertEquals('just now', $this->dh->get(100, 100));
        $this->assertEquals('just now', $this->dh->get(time() - 10));
    }

    public function testGetAMinute()
    {
        $this->assertEquals('a minute ago', $this->dh->get(40, 100));
        $this->assertEquals('a minute ago', $this->dh->get(time() - 60));
        $this->assertEquals('a minute ago', $this->dh->get(time() - 50));
    }

    public function testGetMinutes()
    {
        $this->assertEquals('2 minutes ago', $this->dh->get(-120, 0));
        $this->assertEquals('40 minutes ago', $this->dh->get(time() - 60 * 40));
    }

    public function testGetYesterday()
    {
        $this->assertEquals('yesterday', $this->dh->get(-86400, 0));
        $this->assertEquals('yesterday', $this->dh->get(time() - 86400));
    }

    public function testGetDays()
    {
        $this->assertEquals('2 days ago', $this->dh->get(-86400 * 2, 0));
        $this->assertEquals('6 days ago', $this->dh->get(time() - 86400 * 6));
    }

    public function testGetAWeek()
    {
        $this->assertEquals('a week ago', $this->dh->get(-86400 * 7, 0));
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
}

?>