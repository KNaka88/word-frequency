#Koji Nakagawa

#### PHP 2nd Week Independent Project for Epicodus, 2.17.2017

#### By Koji Nakagawa

## Description
* This website is the second independent project for Epicodus "PHP" class.
* This website takes the sentences and word and counting the frequency of the word used.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| It will count the number of matching | Sentence: "Good Morning Portland! Good Morning World!", Word:"Morning" | Result: "2" |
| It will check only perfect matching word| Sentence: "I am fine", Word: "define" | Result: "0" |
| It is case incensitive| Sentence: "Great Adventure", Word: "adventure" | Result: "1"|
| It ignores ". , ! ?" | Sentence: "Best Portland Restaurant!!" Word: "Restaurant"  | Result: "1" |

## Setup/Installation Requirements
* Clone this repository.

* Install Composer to your computer.

* Install the Composer at the top level of project directory to add dependencies to this projects.

#####if you are not sure how to install composer and add dependency, [see this link](https://www.learnhowtoprogram.com/php/object-oriented-php/composer).


* Start your server inside of web folder, using localhost:8000

* Open URL: http://localhost:8000/

#####if you are not sure how to setup localhost server, [see this link](https://www.learnhowtoprogram.com/php/php-basics/meet-the-server).

## Known Bugs
* I confirmed this program is successfully running under the PHP 5.6.16, using Mac OS X 10.11.6.
* If you found some errors, please let me know. Any suggestions are highly appreciated.

## Technologies Used
* HTML
* CSS
* PHP
* Silex
* Twig
* Bootstrap
* PHPUnit

## License

_Copyright (c) 2017 **Koji Nakagawa**_

_Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:_

_The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software._

_THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE._
