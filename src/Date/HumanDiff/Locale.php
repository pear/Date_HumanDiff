<?php

interface Date_HumanDiff_Locale
{
    /**
     * Get the translation for the given string.
     *
     * @param string $string String to translate
     *
     * @return string Translated string
     */
    public function get($string);
}

?>
