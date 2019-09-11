<?php

$a = 1;
$b = &$a;
echo $a."\n";
echo $b."\n";

$a = 2;
echo $a."\n";
echo $b."\n";