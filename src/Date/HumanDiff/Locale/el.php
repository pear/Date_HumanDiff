<?php
/**
 * Part of Date_HumanDiff
 *
 * PHP version 5
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Andreas Kollaros <andreas.kollaros@gmail.com>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
require_once 'Date/HumanDiff/LocaleArray.php';

/**
 * Greek translation of the english messages.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Andreas Kollaros <andreas.kollaros@gmail.com>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
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

        'in a moment'   => 'σε λίγο',
        'in a minute'   => 'σε ένα λεπτό',
        'in %d minutes' => 'σε %d λεπτά',
        'in an hour'    => 'σε μια ώρα',
        'in %d hours'   => 'σε %d ώρες',
        'tomorrow'      => 'αύριο',
        'in %d days'    => 'σε %d ημέρες',
        'in a week'     => 'σε μια εβδομάδα',
        'in %d weeks'   => 'σε %d εβδομάδες',
        'in a month'    => "σ' ένα μήνα",
        'in %d months'  => 'σε %d μήνες',
        'in a year'     => "σ' ένα χρόνο",
        'in %d years'   => 'σε %d χρόνια',
    );
}
?>
