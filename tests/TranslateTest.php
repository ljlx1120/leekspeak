<?php
  require_once "src/Translate.php";

  class TranslateTest extends PHPUnit_Framework_TestCase {

    function testLetterE() {
      //Arrange
      $test_translate_e = new Translate;
      $word = "weed I'm go";

      //Act
      $result = $test_translate_e->translateE($word);

      //Assert
      $this->assertEquals("w33d 1'm g0", $result);
    }
  }
?>
