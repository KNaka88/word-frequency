<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //TEST1:
          //It finds only full matches case
          //This will check if word matches working
          //Sentence: hello
          //Input: helloo
          //Output: 0
        function test_CountRepeats_test1()
        {
            //Arrange
            $sentence_input = "hello";
            $word_input = "helloo";
            $test_countRepeats = new RepeatCounter($sentence_input, $word_input);

            //Act
            $result = $test_countRepeats->countRepeats();

            //Assert
            $this->assertEquals(0, $result);
        }





        //TEST2:
            //If finds only full matches case
            //This will check if word matches working
                //Sentence: hello
                //Input: hello
                //Output: 1
        function test_CountRepeats_test2()
        {
            //Arrange
            $sentence_input = "hello";
            $word_input = "hello";
            $test_countRepeats = new RepeatCounter($sentence_input, $word_input);

            //Act
            $result = $test_countRepeats->countRepeats();

            //Assert
            $this->assertEquals(1, $result);
        }


        //TEST3:
            //It is case incensitive
            //This will check if word matches working with case incensitive
                //Sentence: hello
                //Input: heLLo
                //Output: 1
        function test_CountRepeats_test3()
        {
            //Arrange
            $sentence_input = "hello";
            $word_input = "heLLo";
            $test_countRepeats = new RepeatCounter($sentence_input, $word_input);

            //Act
            $result = $test_countRepeats->countRepeats();

            //Assert
            $this->assertEquals(1, $result);
        }


        //TEST4:
            //It finds muliple matches
            //This will check if word matches count is working
                //Sentence: hello hello world
                //Input: hello
                //Output: 2
        function test_CountRepeats_test4()
        {
            //Arrange
            $sentence_input = "hello hello world";
            $word_input = "hello";
            $test_countRepeats = new RepeatCounter($sentence_input, $word_input);

            //Act
            $result = $test_countRepeats->countRepeats();

            //Assert
            $this->assertEquals(2, $result);
        }





    }











//TEST5:
    //It finds multiple matches
    //This will check if word matches count is working through out the sentence
        //Sentence: hello world hello
        //Input: hello
        //Output: 2

//TEST6:
    //It ignores ", . ! ?"
    //This will check if word match count is working regardless of special characters
        //Sentence: You are awesome! Because of you, I can live happily. I cannot think of my life without you!!
        //Input: you
        //Output: 3
