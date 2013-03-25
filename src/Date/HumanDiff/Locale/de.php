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
require_once 'Date/HumanDiff/LocaleArray.php';

/**
 * German translation of the english messages.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
class Date_HumanDiff_Locale_de extends Date_HumanDiff_LocaleArray
{
    /**
     * Translation array.
     * Key is the english variant, value the german translation.
     *
     * @var array
     */
    public $trans = array(
        'just now'       => 'gerade eben',
        'a minute ago'   => 'vor einer Minute',
        '%d minutes ago' => 'vor %d Minuten',
        'an hour ago'    => 'vor einer Stunde',
        '%d hours ago'   => 'vor %d Stunden',
        'yesterday'      => 'gestern',
        '%d days ago'    => 'vor %d Tagen',
        'a week ago'     => 'vor einer Woche',
        '%d weeks ago'   => 'vor %d Wochen',
        'a month ago'    => 'vor einem Monat',
        '%d months ago'  => 'vor %d Monaten',
        'a year ago'     => 'vor einem Jahr',
        '%d years ago'   => 'vor %d Jahren',

        'in a moment'   => 'gleich',
        'in a minute'   => 'in einer Minute',
        'in %d minutes' => 'in %d Minuten',
        'in an hour'    => 'in einer Stunde',
        'in %d hours'   => 'in %d Stunden',
        'tomorrow'      => 'morgen',
        'in %d days'    => 'in %d Tagen',
        'in a week'     => 'in einer Woche',
        'in %d weeks'   => 'in %d Wochen',
        'in a month'    => 'in einem Monat',
        'in %d months'  => 'in %d Monaten',
        'in a year'     => 'in einem Jahr',
        'in %d years'   => 'in %d Jahren',
    );
}
?>
