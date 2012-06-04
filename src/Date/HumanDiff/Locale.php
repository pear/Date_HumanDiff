<?php

interface Date_HumanDiff_Locale
{
    /**
     * Get the translation for the given string.
     *
     * @param string $string String to translate
     * @param integer $number Number to render into the string
     *
     * @return string Translated string
     */
    public function get($string, $number);
}

?>
