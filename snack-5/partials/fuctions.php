<?php
function palindrome($word){

    $message='';
    $reversed_word = '';
    for($i = strlen($word)-1;$i>=0;$i--){
        $reversed_word  .=$word[$i];
    };
    $reversed_word === $word? $message = 'è una parola palindroma' :$message ='non è una parola palindroma';
    return [$word,  $message];
}