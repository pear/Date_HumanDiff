<?php
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Date_Human_DiffAllTests::main');
}

require_once 'PHPUnit/Autoload.php';

class Date_Human_DiffAllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Date_HumanDiff tests');
        $suite->addTestFiles(
            array(
                __DIR__ . '/Date/HumanDiffTest.php',
                __DIR__ . '/Date/HumanDiff/LocaleArrayTest.php'
            )
        );

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Date_Human_DiffAllTests::main') {
    Date_Human_DiffAllTests::main();
}
?>