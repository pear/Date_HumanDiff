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
require_once 'Date/HumanDiff/Locale.php';

/**
 * Abstract implementation of the locale/translation interface that
 * works on a translation array to provide translations.
 *
 * It makes adding new translations very easy.
 * Just define a $trans array.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
abstract class Date_HumanDiff_LocaleArray implements Date_HumanDiff_Locale
{
    /**
     * Get the translation for the given string.
     *
     * @param string  $string String to translate
     * @param integer $number Number to render into the string
     *
     * @return string Translated string. Original string when no translation
     *                exists.
     */
    public function get($string, $number)
    {
        if (isset($this->trans[$string])) {
            $string = $this->trans[$string];
        }
        return sprintf($string, $number);
    }
}

?>
