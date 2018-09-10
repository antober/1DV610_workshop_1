<?php

$input = $_POST['input'];

if ($input === '') {
    echo "cannot be empty";
} else {
    $text = strtolower($input);

    $consonantsArray = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v","w", "x", "z"];

    $characterArray = str_split($text);

    $output = "";

    foreach ($characterArray as $character) {
        foreach ($consonantsArray as $consonant) {
            if ($character === $consonant) {
                $character .= "o";
            }
        }
        $output .= "$character";
    }

    echo $output;
}

