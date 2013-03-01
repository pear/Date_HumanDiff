**************
Date_HumanDiff
**************
Generate textual time differences that are easily understandable by humans.

The class supports minutes, hours, days, weeks, months and years.

Examples:

- 5 seconds ago -> `just now`
- 65 seconds ago -> `a minute ago`
- 120 seconds ago -> `2 minutes ago`
- `a week ago`
- `3 weeks ago`
- `a month ago`
- `8 months ago`
- `a year ago`
- `5 years ago`


Usage
=====
::

  <?php
  require_once 'Date/HumanDiff.php';
  $dh = new Date_HumanDiff();
  echo $dh->get(time() - 3600);//shows "an hour ago"
  echo $dh->get(time() + 3600 * 24, time()); //shows "tomorrow"

  ?>


Other libraries
===============
https://github.com/azer/relative-date/blob/master/lib/relative-date.js
 Javascript; library that's been used as base for Date_HumanDiff
https://github.com/rmm5t/jquery-timeago
 Javascript; with localization options
http://pypi.python.org/pypi/py-pretty
 Python
