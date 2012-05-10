<?php
require_once 'Date/HumanDiff.php';

$dh = new Date_HumanDiff();
$dh->clearFormats();
$dh->addFormat(5 * 60, '< 5m', 1);
$dh->addFormat(86400, '%d x 10 minutes ago', 10 * 60);
$dh->addFormat(PHP_INT_MAX, 'long long ago', 1);

echo $dh->get(time() - 60 * 4) . "\n"; //shows "< 5m"
echo $dh->get(time() - 60 * 40) . "\n"; //shows "4 x 10 minutes ago"
?>
