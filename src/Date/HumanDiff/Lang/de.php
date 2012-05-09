<?php
require_once 'Date/HumanDiff/LangArray.php';

class Date_HumanDiff_Lang_de extends Date_HumanDiff_LangArray
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
    );
}
?>
