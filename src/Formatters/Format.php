<?php

namespace src\Formatters\Format;

use function src\Formatters\Stylish\makeStylish;
use function src\Formatters\Plain\makePlain;
use function src\Formatters\Json\makeJson;

function chooseFormat(string $format, array $arr)
{
    switch ($format) {
        case 'stylish':
            return makeStylish($arr);
        case 'plain':
            return makePlain($arr);
        case 'json':
            return makeJson($arr);
    }
}
