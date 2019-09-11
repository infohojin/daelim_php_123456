<?php
$files = scandir(".");
// print_r($files);

// foreach = for-in / for-of

foreach ($files as $f) {
    if($f == "." || $f == "..") continue;
    echo "파일명=".$f."\n";
}