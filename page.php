<?php
    $body = file_get_contents("page.htm");
    $first = $_GET['v1'];
    $body = str_replace("{{first}}",$first,$body);

    $last = $_GET['v2'];
    $body = str_replace("{{last}}",$last,$body);

    echo $body;