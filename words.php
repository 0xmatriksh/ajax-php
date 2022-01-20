<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
$words = ['hello', 'hi', 'hey'];

$word = $_REQUEST["q"];
// $word = 'h';

$list_words = '';
$l_word = strlen($word);

foreach ($words as $nword) {
    if ($word == substr($nword, 0, $l_word)) {
        $list_words .= " " . $nword;
    }
}

echo $list_words;
