<?php

    require_once "src/RPSGenerator.php";

    class RPSGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_compareRPS_RP()
        {
            //arrange
            $test_RP = new RPS();
            $input1 = "paper";
            $input2 = "rock";

            //act
            $result = $test_RP->compareRPS($input1, $input2);

            //assert
            $this->assertEquals("Player 1 wins!", $result);
        }
    }
