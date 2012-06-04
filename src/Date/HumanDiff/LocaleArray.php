<?php
require_once 'Date/HumanDiff/Locale.php';

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
