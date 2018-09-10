<?php

function checkUserInput() {
    $input = $_POST['input'];

if ($input === '') {
    echo "cannot be empty";
} else {
    checkLanguage($input);    
}
}

checkUserInput();

function checkLanguage($input){
    $language = $_POST['languageChoice'];

    if ($language === "Rövarspråket") {
        translateToRobberLanguage($input);
    }

    if ($language === "Engelska") {
        translateToEnglish($input);
    }
}

function echoOutput ($output) {
    echo $output;

    echo '<p><a href="/workshop1">Översätt en ny grej</a></p>';
}

function translateToRobberLanguage ($input) {
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
    
    echoOutput($output);
}

// TODO: implement this function
function translateToEnglish ($input) {
    $output = "Error: English translation is not yet implemented";

    echoOutput($output);
}