#!/usr/bin/perl
$a= `curl http://test.chiochou.org:8888/qnap-temperature.php`;
if ($a eq "") { print "cputemp:0 hd1temp:0 hd2temp:0 hd3temp:0 hd4temp:0 hd5temp:0 systemp:0"}
else {print $a; }
