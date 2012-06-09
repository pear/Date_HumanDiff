<?php
require_once 'Date/HumanDiff/LocaleArray.php';

class Date_HumanDiff_Locale_de extends Date_HumanDiff_LocaleArray
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
