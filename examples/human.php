<?php
require_once '../src/Date/HumanDiff.php';

$dh = new Date_HumanDiff();

echo $dh->get(time()) . "\n";//shows "just now"
echo $dh->get(time() - 60 * 5) . "\n"; //shows "5 minutes ago"

echo $dh->get(-3600, 0) . "\n"; //shows "an hour ago"

echo $dh->get(time() + 1800, time()) . "\n"; //shows "30 minutes away"
echo $dh->get(time() + 3600, time()) . "\n"; //shows "an hour away"
echo $dh->get(time() + 7200, time()) . "\n"; //shows "2 hours away"
echo $dh->get(time() + 3600 * 24, time()) . "\n"; //shows "tomorrow"
echo $dh->get(time() + 3600 * 48, time()) . "\n"; //shows "2 days away"
echo $dh->get(time() + 3600 * 96, time()) . "\n"; //shows "4 days away"
echo $dh->get(time() + 3600 * 24 * 7, time()) . "\n"; //shows "a week away"
echo $dh->get(time() + 3600 * 24 * 7 * 4, time()) . "\n"; //shows "4 weeks away"
echo $dh->get(time() + 3600 * 24 * 7 * 5, time()) . "\n"; //shows "a month away"
echo $dh->get(time() + 3600 * 24 * 7 * 8, time()) . "\n"; //shows "2 months away"
?>
