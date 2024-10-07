<?php

//*IMPORT VARS FILE
include  __DIR__ . "/partials/vars.php";

//* GET INPUT CLASS VALUE
$filter_class = isset($_GET['class']) && $_GET['class'] !=='' ? $_GET['class']: null;

//*GET INPUT NAME VALUE
$filter_name = isset($_GET['name']) && $_GET['name'] !=='' ? $_GET['name']: null;

//*GET INPUT NAME LASTNAME VALUE
$filter_last_name = isset($_GET['last_name']) && $_GET['last_name'] !=='' ? $_GET['last_name']: null;

//*GET INPUT GRADE VALUE
$filter_grade = isset($_GET['grade'])&& $_GET['grade'] ? $_GET['grade']: 10;

//*GET INPUT AGE VALUE
$filter_age = isset($_GET['age'])&& $_GET['age'] ? $_GET['age']: null;

//*GET INPUT PROGRAMMING VALUE
$filter_programming_lang = isset($_GET['programming_lang']) && $_GET['programming_lang'] !=='' ?
$_GET['programming_lang']:
null ;

//*GET INPUT ID VALUE
$filter_id = isset($_GET['id']) && $_GET['id'] !=='' ? $_GET['id']: null;

?>
<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sanck-4</title>
    </head>

    <body>

        <!-- HEADER -->
        <header>
            <!-- FORM -->
            <div>
                <form action="index.php" method="get">

                    <div>
                        <!-- INPUT FOR CLASS -->
                        <label for="class">classe</label>
                        <input type="text" name="class" id="class-nr">

                        <!-- INPUT FOR NAME-->
                        <label for="name">name</label>
                        <input type="text" name="name" id="name">

                        <!-- INPUT FOR LASTNAME -->
                        <label for="last_name">lastname</label>
                        <input type="text" name="last_name" id="lastname">

                        <!-- INPUT FOR GRADE -->
                        <label for="grade">grade</label>
                        <input type="number" name="grade" id="grade">

                        <!-- INPUT FOR AGE -->
                        <label for="age">age</label>
                        <input type="number" name="age" id="grade">

                        <!-- INPUT FOR PROGRAMMING LANG -->
                        <label for="programming_lang">programming_lang</label>
                        <input type="text" name="programming_lang" id="programming_lang">

                        <!-- INPUT FOR ID -->
                        <label for="id">id</label>
                        <input type="text" name="id" id="id-nr">
                    </div>
                    <div>
                        <button type="submit">send</button>
                        <button type="reset">reset</button>
                    </div>
                </form>

            </div>
        </header>
        <main>
            <ul>
                <!-- FOREACH LOOP TO GET CLASSI KEY AND VALUE-->
                <?php foreach ($classi as $classroom => $class) { ?>
                <li>

                    <!-- FILTER BY CLASSI KEY -->
                    <?php if  ($filter_class==null|| str_contains(strtolower($classroom), strtolower($filter_class))){ ?>

                    <!-- PRINT CLASSI KEY -->
                    <?= $classroom ?>

                    <ul>
                        <!-- FOREACH LOOP TO GET STUDENTS VALUES-->
                        <?php foreach ($class as $key => $students) { ?>

                        <!-- FILTER BY STUDENSTS NAME -->
                        <?php if  ($filter_name==null|| str_contains(strtolower($students['nome']), strtolower($filter_name))){ ?>

                        <!-- FILTER BY STUDENTS LASTNAME -->
                        <?php if  ($filter_last_name==null|| str_contains(strtolower($students['cognome']), strtolower($filter_last_name))){ ?>

                        <!-- FILTER BY STUDENTS GRADE -->
                        <?php if ($students['voto_medio'] <= $filter_grade) { ?>

                        <!-- FILTER BY STUDENTS AGE -->
                        <?php if ($filter_age==null|| str_contains(strtolower($students['anni']), strtolower($filter_age))) { ?>

                        <!-- FILTER BY STUDENTS PROGRAMMING LANG -->
                        <?php if  ($filter_programming_lang==null|| strtolower($students['linguaggio_preferito']) == strtolower($filter_programming_lang)) { ?>

                        <!-- FILTER BY STUDENTS ID -->
                        <?php if  ($filter_id==null|| str_contains(strtolower($students['id']), strtolower($filter_id))){ ?>

                        <li>
                            <!-- PRINT STUDENT VALUE -->

                            <!-- PRINT ID -->
                            <p><?= 'Matricola Nr. :' . $students['id'] ?></p>

                            <!-- PRINT NAME -->
                            <p><?= 'Nome: ' . $students['nome'] ?></p>

                            <!-- PRINT LASTNAME -->
                            <p><?= 'Cognome: ' . $students['cognome'] ?></p>

                            <!-- PRINT AGE -->
                            <p><?= 'Età: ' . $students['anni'] ?></p>

                            <!-- PRINT GRADE -->
                            <p><?= 'Voto: ' . $students['voto_medio'] ?></p>

                            <!-- PRINT PROGRAMMING LANG -->
                            <p><?= 'Linguaggio preferito: ' . $students['linguaggio_preferito'] ?></p>

                            <!-- PRINT IMG -->
                            <div><img
                                    <?= 'src="' . $students['immagine'] . '"' . 'alt="Foto di ' . $students['nome'] . ' ' . $students['cognome'] . '"' ?>>
                            </div>
                        </li>


                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                    <?php } ?>

                </li>
                <?php } ?>


        </main>

        <!-- <ul>
            /*  
            ! previous filter
            $sufficient_grade = 6;
            */
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