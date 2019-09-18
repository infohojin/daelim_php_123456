<?php
// 선언
function korean()
{
    // 함수의 내용
    echo "안녕하세요.";
}

// 선언
function english()
{
    // 함수의 내용
    echo "hello.";
}

$lang = "en";
if($lang == "ko") {
    // $fff = "korean";
    korean();
}    
else {
    // $fff = "english";
    english();
}
    
// 가변함수
$fff();