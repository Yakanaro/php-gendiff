<?php

namespace src\Formatters\Json;

function makeJson(array $arr): string
{
    return json_encode($arr, JSON_PRETTY_PRINT);
}
