<?php  
$form_word = isset($_GET['word'] )&& $_GET['word']!=='' ? $_GET['word']: null;

$explode_word = explode('', $form_word);
$to_reverse = array_reverse();
var_dump($explode_word);
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
            <button type="submit">send</button>
            <button type="reset">rest</button>
        </form>
    </main>
</body>

</html>