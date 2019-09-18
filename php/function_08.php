<?php

function hello()
{
    echo "1. 안녕하세요";
    yield "11";
    /*
    
    echo "2. 잘가<br>";
    yield "2";
    echo "3. 조만간 끝나<br>";
    yield "3";
    echo "4. 그래도 할게 남았다.<br>";
    */
}

hello();