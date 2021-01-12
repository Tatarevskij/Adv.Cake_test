<?php
require_once ('words.php');
require_once 'PHPUnit/Framework.php';

class WordsTest extends PHPUnit_Framework_TestCase {
    public function endingTest()
    {
        $newWords = new Words();
        $this->assertStringEndsWith("ьсиледив.", $newWords->revertCharacters("Привет! Давно не виделись."));
    }

    public function startTest()
    {
        $newWords = new Words();
        $this->assertStringStartsWith("Тевирп!", $newWords->revertCharacters("Привет! Давно не виделись."));
    }
}
