<?php

$names = ['Alice', 'Bob', 'Charlie', 'David', 'adasdasdsad'];

function printNamesToUpperCase($names) 
{
    foreach ($names as $name) 
    {
        echo strtoupper($name) . "<br>";
    }
}

printNamesToUpperCase($names);
