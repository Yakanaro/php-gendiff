<?php

namespace src\Parsers;

use Symfony\Component\Yaml\Yaml;

function parseFile(string $filePath)
{
    $format = pathinfo($filePath, PATHINFO_EXTENSION);
    switch ($format) {
        case 'json':
            return parseJson($filePath);
        case 'yml':
            return Yaml::parseFile($filePath);
        case 'yaml':
            return Yaml::parseFile($filePath);
    }
}

function parseJson(string $filePath): array
{
    $content = file_get_contents($filePath);
    if ($content == false) {
        throw new \Exception('Non-existent file path');
    } else {
        return json_decode($content, true);
    }
}
