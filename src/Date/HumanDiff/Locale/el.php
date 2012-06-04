<?php
require_once 'Date/HumanDiff/LocaleArray.php';

class Date_HumanDiff_Locale_el extends Date_HumanDiff_LocaleArray
{
    /**
     * Translation array.
     * Key is the english variant, value the greek translation.
     *
     * @var array
     */
    public $trans = array(
        'just now'       => 'μόλις τώρα',
        'a minute ago'   => 'πριν ένα λεπτό',
        '%d minutes ago' => 'πριν %d λεπτά',
        'an hour ago'    => 'πριν μία ώρα',
        '%d hours ago'   => 'πριν %d ώρες',
        'yesterday'      => 'εχθές',
        '%d days ago'    => 'πριν %d ημέρες',
        'a week ago'     => 'πριν μια εβδομάδα',
        '%d weeks ago'   => 'πρίν %d εβδομάδες',
        'a month ago'    => 'πριν ένα μήνα',
        '%d months ago'  => 'πριν %d μήνες',
        'a year ago'     => 'πριν ένα χρόνο',
        '%d years ago'   => 'πριν %d χρόνια',
    );
}
?>
