<?php
$layout = file_get_contents("../theme/index.html");

$filename = $_SERVER['REQUEST_URI'].".htm";

if(file_exists("../".$filename)){
    $body = file_get_contents("../".$filename);
    $layout = str_replace("{{main}}",$body, $layout);
} else {
    $body = file_get_contents("../home.htm");
    $layout = str_replace("{{main}}","없습니다.", $layout);
}


echo $layout;

/*
echo "내가 처음이야";


*/