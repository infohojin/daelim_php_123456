<?php
// 재귀함수

function recursion($i)
{
    echo $i--."<br>";
    if($i>0) recursion($i);
}

recursion(5);