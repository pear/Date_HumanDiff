<?php
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Date_Human_AllTests::main');
}

require_once 'PHPUnit/Autoload.php';

class Date_Human_AllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Date_Human tests');
        /** Add testsuites, if there is. */
        $suite->addTestFiles(
            array(__DIR__ . '/Date/HumanTest.php')
        );

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Date_Human_AllTests::main') {
    Date_Human_AllTests::main();
}
?>