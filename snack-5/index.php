<?php  
    require_once __DIR__  . '/../snack-5/partials/vars.php' ;
    require_once __DIR__ . "/../snack-5/partials/fuctions.php" ;
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