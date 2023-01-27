<?php

namespace tests\DiffTest;

use PHPUnit\Framework\TestCase;

use function Differ\Differ\genDiff;

class DiffTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [
                'tests/fixtures/file1.json',
                'tests/fixtures/file2.json'
            ],
            [
                'tests/fixtures/file1.yml',
                'tests/fixtures/file2.yml'
            ]
        ];
    }

    /**
     * @dataProvider addDataProvider
     */

    public function testGendiffStylish1($path1, $path2)
    {
        $resultPath = 'tests/fixtures/resultStylish.txt';
        $expectedResult = file_get_contents($resultPath);
        $result = genDiff($path1, $path2, 'stylish');
        $this->assertTrue($result == $expectedResult);
    }

    /**
     * @dataProvider addDataProvider
     */

    public function testGendiffStylish2($path1, $path2)
    {
        $resultPath = 'tests/fixtures/resultStylish.txt';
        $expectedResult = file_get_contents($resultPath);
        $result = genDiff($path1, $path2);
        $this->assertTrue($result == $expectedResult);
    }

    /**
     * @dataProvider addDataProvider
     */

    public function testGendiffPlain($path1, $path2)
    {
        $resultPath = 'tests/fixtures/resultPlain.txt';
        $expectedResult = file_get_contents($resultPath);
        $result = genDiff($path1, $path2, 'plain');
        $this->assertTrue($result == $expectedResult);
    }

    /**
     * @dataProvider addDataProvider
     */

    public function testGendiffJson($path1, $path2)
    {
        $resultPath = 'tests/fixtures/resultJson.txt';
        $expectedResult = file_get_contents($resultPath);
        $result = genDiff($path1, $path2, 'json');
        $this->assertTrue($result == $expectedResult);
    }
}
