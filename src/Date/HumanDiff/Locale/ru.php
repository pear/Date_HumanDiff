<?php
/**
 * Part of Date_HumanDiff
 *
 * PHP version 5
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Agel Nash <agel_nash@xaker.ru>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
require_once 'Date/HumanDiff/LocaleArray.php';

/**
 * Russian translation of the english messages.
 *
 * @category Date
 * @package  Date_HumanDiff
 * @author   Agel Nash <agel_nash@xaker.ru>
 * @license  http://www.gnu.org/copyleft/lesser.html LGPL
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/Date_HumanDiff
 */
class Date_HumanDiff_Locale_ru implements Date_HumanDiff_Locale
{
    /**
     * Translation array.
     * Key is the english variant, value the russian translation.
     *
     * Values may be arrays. In that case, plural() is called to determine
     * which array value to use.
     *
     * @var array
     */
    public $trans = array(
        'just now'       => 'только что',
        'a minute ago'   => 'менее минуты назад',
        '%d minutes ago' => array(
            '%d минуту назад',
            '%d минуты назад',
            '%d минут назад',
        ),
        'an hour ago'    => 'час назад',
        '%d hours ago'   => array(
            '%d час назад',
            '%d часа назад',
            '%d часов назад',
        ),
        'yesterday'      => 'вчера',
        '%d days ago'    => array(
            '%d день назад',
            '%d дня назад',
            '%d дней назад',
        ),
        'a week ago'     => 'неделю назад',
        '%d weeks ago'   => array(
            '%d неделю назад',
            '%d недели назад',
            '%d недель назад'
        ),
        'a month ago'    => 'месяц назад',
        '%d months ago'  => array(
            '%d месяц назад',
            '%d месяца назад',
            '%d месяцев назад'
        ),
        'a year ago'     => 'год назад',
        '%d years ago'   => array(
            '%d год назад',
            '%d года назад',
            '%d лет назад'
        ),
        'in a moment'   => 'сейчас',
        'in a minute'   => 'через минуту',
        'in %d minutes' => array(
            'через %d минуту',
            'через %d минуты',
            'через %d минут'
        ),
        'in an hour'    => 'через час',
        'in %d hours'   => array(
            'через %d час',
            'через %d часа',
            'через %d часов'
        ),
        'tomorrow'      => 'завтра',
        'in %d days'    => array(
            'через %d день',
            'через %d дня',
            'через %d дней'
        ),
        'in a week'     => 'через неделю',
        'in %d weeks'   => array(
            'через %d неделю',
            'через %d недели',
            'через %d недель'
        ),
        'in a month'    => 'через месяц',
        'in %d months'  => array(
            'через %d месяц',
            'через %d месяца',
            'через %d месяцев',
        ),
        'in a year'     => 'через год',
        'in %d years'   => array(
            'через %d год',
            'через %d года',
            'через %d лет'
        )
    );

    /**
     * Get the translation for the given string.
     *
     * @param string  $string String to translate
     * @param integer $number Number to render into the string
     *
     * @return string Translated string. Original string when no translation
     *                exists.
     */
    public function get($string, $number)
    {
        if (isset($this->trans[$string])) {
            $string = $this->trans[$string];
        }
        if (is_array($string)) {
            $string = $this->plural($number, $string);
        }
        return sprintf($string, $number);
    }

    /**
     * Translate a plural number
     *
     * @param integer $number Number to render into the string
     * @param array   $titles Translation strings
     *
     * @return string
     */
    protected function plural($number, array $titles = array())
    {
        $cases = array(2, 0, 1, 1, 1, 2);
        $number = (int)$number;
        $position = ($number%100 > 4 && $number%100 < 20)
            ? 2
            : $cases[($number%10 < 5) ? $number%10 : 5];
        $out = isset($titles[$position]) ? $titles[$position] : '';
        return $out;
    }
}
?>
