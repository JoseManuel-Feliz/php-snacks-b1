<?php include  __DIR__ . "/partials/vars.php"; ?>
<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanck-4</title>
    </head>

    <body>
        <main>
            <ul>

                <?php foreach ($classi as $classe => $key) { ?>
                    <li>
                        <?php echo   $classe ?>
                    </li>
                <?php } ?>

            </ul>
        </main>
    </body>

    </html>