<?php  
$word = isset($_GET['word'] )&& $_GET['word']!=='' ? $_GET['word']: null;


function palindrome($word){

    $message='';
    $reversed_word = '';
    for($i = strlen($word)-1;$i>=0;$i--){
        $reversed_word  .=$word[$i];
    };
    $reversed_word === $word? $message = 'è una parola palindroma' :$message ='non è una parola palindroma';
    return [$word,  $message];
}
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h2><?php  var_dump( palindrome($word) ) ?></h2>

        <form action="index.php" method="get">
            <input type="text" name="word" id="word">

            <div>
                <button type="submit">send</button>
                <button type="reset">rest</button>
            </div>
        </form>
    </main>
</body>

</html>