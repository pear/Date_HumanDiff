<?php
/**
 * Part of Date_HumanDiff
 *
 * PHP version 5
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Alireza Meskin <alireza.meskin@gmail.com>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
require_once 'Date/HumanDiff/LocaleArray.php';

/**
 * Persian translation of the english messages.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Alireza Meskin <alireza.meskin@gmail.com>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
class Date_HumanDiff_Locale_fa extends Date_HumanDiff_LocaleArray
{
    /**
     * Translation array.
     * Key is the english variant, value the persian translation.
     *
     * @var array
     */
    public $trans = array(
        'just now'       => 'در حال حاضر',
        'a minute ago'   => 'یک دقیقه پیش',
        '%d minutes ago' => '%d دقیقه پیش',
        'an hour ago'    => 'یک ساعت پیش',
        '%d hours ago'   => '%d ساعت پیش',
        'yesterday'      => 'دیروز',
        '%d days ago'    => '%d روز پیش',
        'a week ago'     => 'یک هفته پیش',
        '%d weeks ago'   => '%d هفته پیش',
        'a month ago'    => 'یک ماه پیش',
        '%d months ago'  => '%d ماه پیش',
        'a year ago'     => 'یک سال پیش',
        '%d years ago'   => '%d سال پیش',
    );
}
?>
