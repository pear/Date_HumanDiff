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
    );
}
?>
