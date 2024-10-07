<?php include  __DIR__ . "/partials/vars.php";

/*  
! previous filter
$sufficient_grade = 6;
*/


/*<?php isset($filter_grade) && (!empty($filter_grade)) ? $filter_grade : $filter_grade=10  ?>*/

$students_copy = [];
$filter_grade = isset($_GET['grade'])&& $_GET['grade'] ? $_GET['grade']: 10;
$filter_programming_lang = isset($_GET['programming_lang']) && $_GET['programming_lang'] !=='' ?
$_GET['programming_lang']:
null ;
var_dump($filter_programming_lang,$filter_grade);
var_dump( (!empty($filter_grade)&&isset($filter_grade)) ? 'grade non è vuoto ed è settato' : ' grade è vuoto ed è non
settato');
?>
<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanck-4</title>
    </head>

    <body>

        <header>
            <div>
                <form action="index.php" method="get">

                    <div>
                        <input type="number" name="grade" id="grade">
                        <input type="text" name="programming_lang" id="programming_lang">
                    </div>
                    <div>
                        <button type="submit">send</button>
                        <button type="reset">reset</button>
                    </div>
                </form>
                <?//= $grade?>
            </div>
        </header>
        <main>
            <ul>
                <?php foreach ($classi as $classroom => $class) { ?>
                <li>
                    <?= $classroom ?>

                    <?php foreach ($class as $key => $students) { ?>
                    <ul>
                        <?php if ($students['voto_medio'] <= $filter_grade) { ?>
                        <?php if  ($filter_programming_lang==null|| strtolower($students['linguaggio_preferito']) == strtolower($filter_programming_lang)) { ?>

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
                        <?php } ?>
                    </ul>
                    <?php } ?>

                </li>
                <?php } ?>
        </main>

        <!-- <ul>
            /*
            !previous filter
            */
                    <?php //foreach ($classi as $classroom => $class) { ?>
                    <li>
                        <?//=$classroom ?>

                        <?php //foreach ($class as $key => $students) { ?>

                        <ul>
                            <?php //if ($students['voto_medio'] > $sufficient_grade) { ?>
                            <li>
                                <p><?//='Matricola Nr. :' . $students['id'] ?></p>
                                <p><?//='Nome: ' . $students['nome'] ?></p>
                                <p><?//='Cognome: ' . $students['cognome'] ?></p>
                                <p><?//='Età: ' . $students['anni'] ?></p>
                                <p><?//='Voto: ' . $students['voto_medio'] ?></p>
                                <p><?//='Linguaggio preferito: ' . $students['linguaggio_preferito'] ?></p>
                                <div><img
                                        <?//='src="' . $students['immagine'] . '"' . 'alt="Foto di ' . $students['nome'] . ' ' . $students['cognome'] . '"' ?>>
                                </div>
                            </li>
                            <?php //} ?>
                        </ul>
                        <?php //} ?>

                    </li>
                    <?php //} ?>

                </ul>-->
    </body>

    </html>