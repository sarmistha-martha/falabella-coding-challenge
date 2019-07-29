# falabella-coding-challenge
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".

But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.

#to import any class using namespace add the same in compose.json and run autoload command which creates "vender" folder
$composer dumpautoload -o

#to add PHPUNIT run
$composer require --dev phpunit/phpunit ^7

#to run PHPUNIT
$phpunit --bootstrap vendor/autoload.php tests/app/model/ChallengeTest
