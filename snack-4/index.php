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

                <?php foreach ($classi as $key => $classe) { ?>
                    <li>
                        <?= $key ?>

                        <?php foreach ($classe as $key => $studenti) { ?>

                            <ul>
                                <li>
                                    <p><?= 'Matricola Nr. :' . $studenti['id'] ?></p>
                                    <p><?= 'Nome: ' . $studenti['nome'] ?></p>
                                    <p><?= 'Cognome: ' . $studenti['cognome'] ?></p>
                                    <p><?= 'Età: ' . $studenti['anni'] ?></p>
                                    <p><?= 'Voto: ' . $studenti['voto_medio'] ?></p>
                                    <p><?= 'Linguaggio preferito: ' . $studenti['linguaggio_preferito'] ?></p>
                                    <div><img <?= 'src="' . $studenti['immagine'] . '"' . 'alt="Foto di ' . $studenti['nome'] . ' ' . $studenti['cognome'] . '"' ?>></div>
                                    <p></p>
                                </li>
                            </ul>
                        <?php } ?>

                    </li>
                <?php } ?>

            </ul>
        </main>
    </body>

    </html>