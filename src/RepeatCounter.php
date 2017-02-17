<?php
    class RepeatCounter
    {
        private $sentence;
        private $word;

        function __construct ($sentence, $word)
        {
            $this->sentence = $sentence;
            $this->word = $word;
        }

        function setSentence($new_sentence)
        {
            $this->sentence = $new_sentence;
        }

        function setWord($new_word)
        {
            $this->word = $word;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function getWord()
        {
            return $this->word;
        }

        function countRepeats()
        {
          //make case incensitive
          $lower_str_sentence = strtolower($this->sentence);
          $lower_str_word = strtolower($this->word);


          //Explode the sentence into array
          $explode_sentence = explode(" ", $lower_str_sentence);


          //Loop through the array and count up the matching result
          $count_match = 0;

          for($i=0; $i<count($explode_sentence); $i++) {
              //trim ". , ! ?"
              $trimed_word = trim($explode_sentence[$i], ". , ! ?");

              if($trimed_word == $lower_str_word) {
                  $count_match++;
              }
          }
          //return the result
          return $count_match;
        }



    }
