<?php
/**
 * Generate textual time differences that are easily understandable by humans.
 *
 * The class supports minutes, hours, days, weeks, months and years.
 *
 * Examples:
 * - 5 seconds ago -> "just now"
 * - 65 seconds ago -> "a minute ago"
 * - 120 seconds ago -> "2 minutes ago"
 *   
 * @link https://github.com/azer/relative-date
 */
class Date_Human
{
    static $MINUTE = 60;
    static $HOUR = 3600;//static::$MINUTE * 60
    static $DAY = 86400;//static::$HOUR * 24
    static $WEEK = 604800;//static::$DAY * 7
    static $MONTH = 2628000;//static::$YEAR / 12
    static $YEAR = 31536000;//static::$DAY * 365

    protected $formats;


    public function __construct()
    {
        $this->formats = array(
            array(0.7 * static::$MINUTE, 'just now',       1),
            array(1.5 * static::$MINUTE, 'a minute ago',   1),
            array( 60 * static::$MINUTE, '%d minutes ago', static::$MINUTE),
            array(1.5 * static::$HOUR,   'an hour ago',    1),
            array(      static::$DAY,    '%d hours ago',   static::$HOUR),
            array(  2 * static::$DAY,    'yesterday',      1),
            array(  7 * static::$DAY,    '%d days ago',    static::$DAY),
            array(1.5 * static::$WEEK,   'a week ago',     1),
            array(      static::$MONTH,  '%d weeks ago',   static::$WEEK),
            array(1.5 * static::$MONTH,  'a month ago',    1),
            array(      static::$YEAR,   '%d months ago',  static::$MONTH),
            array(1.5 * static::$YEAR,   'a year ago',     1),
            array(PHP_INT_MAX,           '%d years ago',   static::$YEAR)
        );
    }

    public function get($timestamp, $reference = null)
    {
        if ($reference === null) {
            $reference = time();
        }

        $delta = $reference - $timestamp;
        $len   = count($this->formats);

        for ($i = 0; $i < $len; $i++) {
            $format = $this->formats[$i];
            if ($delta < $format[0]) {
                return sprintf($format[1], round($delta / $format[2]));
            }
        };
    }
}

?>
