<?php  
$form_word = isset($_GET['word'] )&& $_GET['word']!=='' ? $_GET['word']: null;
$reversed_word = '';
for($i = strlen($form_word)-1;$i>=0;$i--){
//var_dump( substr($form_word,$i,1));
$reversed_word  .=$form_word[$i];
};
var_dump($reversed_word);
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
        <h2><?= $form_word?></h2>

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