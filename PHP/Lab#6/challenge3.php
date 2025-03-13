<?php

function findLongestWord($sentence) 
{
    $words = explode(" ", $sentence);
    $longestWord = "";

    foreach ($words as $word) 
    {
        if (strlen($word) > strlen($longestWord)) 
        {
            $longestWord = $word;
        }
    }
    return $longestWord;
}

$sentence = "The quick brown fox jumped over the lazy dog asdawawdawdw";
$longestWord = findLongestWord($sentence);
echo $longestWord;
?>