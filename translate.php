<?php

/*
    Checks users input if empty
    @throws exception if empty
    NOT HANDLING ECXEPTION YET!!

*/
function checkUserInput() {
    $input = $_POST['input'];

if ($input === '') {
    throw new Exception("Empty user input");

} else {
    checkLanguage($input);    
    }
}


checkUserInput();

/*
    Selects language depenting on users choice in dropdown
*/
function checkLanguage($input){
    $language = $_POST['languageChoice'];

    if ($language === "Rövarspråket") {
        translateToRobberLanguage($input);
    }

    if ($language === "Engelska") {
        translateToEnglish($input);
    }
}

/*
    Presents result and adds href to startpage
*/
function echoOutput ($output) {
    echo $output;

    echo '<p><a href="/workshop1-ahel">Översätt en ny grej</a></p>';
}

/*
    Translates userinput to robberlanguage
*/
function translateToRobberLanguage ($wordsToBeTranslated) {
    $text = strtolower($wordsToBeTranslated);

    $consonants = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v","w", "x", "z"];

    $character = str_split($text);

    $output = "";

    foreach ($character as $character) {
        foreach ($consonants as $consonant) {
            if ($character === $consonant) {
                $character .= "o";
            }
        }
        $output .= "$character";
    }
    
    echoOutput($output);
}

/*
    Translates user input to english
    Case sensitive still!
*/
function translateToEnglish ($wordsToBeTranslated) {
    include("dictionary.php");
    
    foreach ($sweToEngDictionary as $swe => $eng) {
        if($wordsToBeTranslated == $swe)
        {
            echo $eng;
        }
        
    }
    echoOutput($output);
}