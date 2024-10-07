<?php include  __DIR__ . "/partials/vars.php";
$sufficient_grade = 6;
?>
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

                <?php foreach ($classi as $classroom => $class) { ?>
                <li>
                    <?= $classroom ?>

                    <?php foreach ($class as $key => $students) { ?>

                    <ul>
                        <?php if ($students['voto_medio'] > $sufficient_grade) { ?>
                        <li>
                            <p><?= 'Matricola Nr. :' . $students['id'] ?></p>
                            <p><?= 'Nome: ' . $students['nome'] ?></p>
                            <p><?= 'Cognome: ' . $students['cognome'] ?></p>
                            <p><?= 'Età: ' . $students['anni'] ?></p>
                            <p><?= 'Voto: ' . $students['voto_medio'] ?></p>
                            <p><?= 'Linguaggio preferito: ' . $students['linguaggio_preferito'] ?></p>
                            <div><img
                                    <?= 'src="' . $students['immagine'] . '"' . 'alt="Foto di ' . $students['nome'] . ' ' . $students['cognome'] . '"' ?>>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>

                </li>
                <?php } ?>

            </ul>
        </main>
    </body>

    </html>