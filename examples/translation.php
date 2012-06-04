<?php
require_once 'Date/HumanDiff.php';

$dh = new Date_HumanDiff();
$dh->setLocale('de');
//alternatively, you may pass in a locale:
// $dh->setLocale('de_AT');//falls back to the "de" language

echo $dh->get(time() - 60 * 5) . "\n"; //shows "vor 5 Minuten"
?>
