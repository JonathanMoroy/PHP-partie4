<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie4/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie4/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie4/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie4/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie4/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie4/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie4/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction:
            <?php

            // Déclaration de ma fonction
            function getString($string) {
                return $string;
            }

            // Exécution de ma fonction
            echo getString('Je suis une chaîne de caractère !');
            ?>
        </p>
    </body>
</html>