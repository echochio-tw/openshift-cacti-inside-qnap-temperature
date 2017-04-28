<?php
$cputemp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.5.0 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$systemp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.6.0 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$hd1temp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.11.1.3.1 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$hd2temp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.11.1.3.2 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$hd3temp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.11.1.3.3 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$hd4temp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.11.1.3.4 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
$hd5temp=shell_exec("snmpget  -v1 -t 3 -c public 192.168.0.10 .1.3.6.1.4.1.24681.1.2.11.1.3.5 |cut -d\\\" -f2 | cut -d' ' -f1 |awk '{ printf($1) }'");
echo "cputemp:".$cputemp." hd1temp:".$hd1temp." hd2temp:".$hd2temp." hd3temp:".$hd3temp." hd4temp:".$hd4temp." hd5temp:".$hd5temp." systemp:".$systemp
?>
