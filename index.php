<?php

//översättningswebapp
/*
function translate() {
    $input = $_POST['input'];

echo "$input";
}*/

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translator web app</title>
</head>
<body>
<p>Skriv något på rövarspråket och få det översatt</p>
    <form action="/workshop1/translate.php" method="POST">
            <input type="text" name="input">

            <select name="languageChoice">
                <option value="Rövarspråket">Rövarspråket</option>
                <option value="Engelska">Engelska</option>
            </select>
            <p>
            <button>translate</button>
            </p>
        </form>
</body>
</html>';