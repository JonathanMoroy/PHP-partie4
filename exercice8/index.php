<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie4/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie4/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie4/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie4/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie4/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie4/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie4/exercice7/">Exercice 7</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br/>
            Tous les paramètres doivent avoir une valeur par défaut.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction avec pour paramètre 42, 26 et 1:
            <?php

            // Déclaration de ma fonction
            function addNumber($num1, $num2, $num3) {
                return $num1 + $num2 + $num3;
            }

            // Déclaration de mes variables et exécution de ma fonction
            $magic = 42;
            $old = 26;
            $one = 1;
            echo addNumber($magic, $old, $one);
            ?>
        </p>
    </body>
</html>