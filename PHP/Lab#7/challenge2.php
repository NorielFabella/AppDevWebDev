<?php

/*
## Challenge 2 15pts

1. Create a class called `StringUtility` that has the following static methods:

- `shout($string)` - Takes in a string and returns it in all uppercase letters with an exclamation mark added to the end. 3pts

- `whisper($string)` - Takes in a string and returns it in all lowercase letters with a period added to the end. 3pts

- `repeat($string, $times)` - Takes in a string and a number and returns the string repeated the specified number of times. Use a default value of `2` for the `$times` parameter. 4pts

2. Create a new instance of the `StringUtility` class and call each of the methods on it. 5pts

#### Hints

- You can use the `strtoupper` and `strtolower` functions to convert a string to uppercase or lowercase.
- You can use the `str_repeat` function to repeat a string a certain number of times.


ex.



shout('Hello World');
whisper('Hello World');
repeat('Hello World'); //default is 2x
repeat('Hello World',5);


     
sample output
HELLO WORLD
hello world
Hello World Hello World
Hello World Hello World Hello World Hello World Hello World
*/

class StringUtility
{
    public static function shout($string)
    {
        echo strtoupper($string) . "!" . "<br>";
    }
    
    public static function whisper($string)
    {
        echo strtolower($string) . "." . "<br>";
    }
    

    public static function repeat($string, $times = 2)
    {
        for($counter = 0; $counter < $times; $counter++)
        {
            echo $string . " ";
        }
        echo "<br>";
    }
}

echo StringUtility :: shout('Hello World');
echo StringUtility :: whisper('Hello World');
echo StringUtility :: repeat('Hello World'); //default is 2x
echo StringUtility :: repeat('Hello World',5);