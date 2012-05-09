<?php
require_once 'Date/HumanDiff/Lang.php';

abstract class Date_HumanDiff_LangArray implements Date_HumanDiff_Lang
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
