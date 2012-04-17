<?php
require_once 'Date/HumanDiff.php';

$dh = new Date_HumanDiff();

echo $dh->get(time()) . "\n";//shows "just now"
echo $dh->get(time() - 60 * 5) . "\n"; //shows "5 minutes ago"

echo $dh->get(-3600, 0) . "\n"; //shows "an hour ago"

?>
