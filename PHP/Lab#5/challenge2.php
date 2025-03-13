<?php

$names = ["ALEC", "BETH", "CAROLINE", "DAve", "ElAnor", "ANNa", "Freddie", "AdaM"];

foreach($names as $name)
{
    if($name[0] == 'A')
    {
        continue;
    }
    else
    {
        $name = strrev($name);
        $name = strtolower($name);
    }
    echo $name . "<br>";
}