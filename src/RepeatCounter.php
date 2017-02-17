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
          //1. Split the sentence into array
          $split_sentence = str_split($this->sentence);

          //2. loop through the array and count up the matching result
          $count_match = 0;

          for($i=0; $i<count($split_sentence); $i++) {
              if($split_sentence[$i] == $this->word) {
                  $count_match++;
              }
          }
          //3. return the result
          return $count_match;

          //4. make case incensitive

          //5. trim ". , ! ?"
        }



    }
