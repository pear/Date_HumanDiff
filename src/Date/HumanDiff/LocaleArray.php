<?php
require_once 'Date/HumanDiff/Locale.php';

abstract class Date_HumanDiff_LocaleArray implements Date_HumanDiff_Locale
{
    /**
     * Get the translation for the given string.
     *
     * @param string $string String to translate
     *
     * @return string Translated string. Original string when no translation
     *                exists.
     */
    public function get($string)
    {
        if (!isset($this->trans[$string])) {
            return $string;
        }
        return $this->trans[$string];
    }
}

?>
