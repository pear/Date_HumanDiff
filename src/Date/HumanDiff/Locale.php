<?php
/**
 * Part of Date_HumanDiff
 *
 * PHP version 5
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @link     http://pear.php.net/package/Date_HumanDiff
 */

/**
 * Interface that all locale/translation classes need to implement.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
interface Date_HumanDiff_Locale
{
    /**
     * Get the translation for the given string.
     *
     * @param string  $string String to translate
     * @param integer $number Number to render into the string
     *
     * @return string Translated string
     */
    public function get($string, $number);
}

?>
