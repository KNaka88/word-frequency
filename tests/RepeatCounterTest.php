<?php
    require_once "src/RepeatCounter.php";


//TEST1:
    //It finds only full matches case
    //This will check if word matches working
        //Sentence: hello
        //Input: helloo
        //Output: 0

//TEST2:
    //If finds only full matches case
    //This will check if word matches working
        //Sentence: hello
        //Input: hello
        //Output: 1

//TEST3:
    //It is case incensitive
    //This will check if word matches working with case incensitive
        //Sentence: hello
        //Input: heLLo
        //Output: 1


//TEST4:
    //It finds muliple matches
    //This will check if word matches count is working
        //Sentence: hello hello world
        //Input: hello
        //Output: 2

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
