<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie4/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie4/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie4/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie4/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie4/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie4/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie4/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction:
            <?php

            // Déclaration de ma fonction
            function fusion($num, $string) {  
                return $num.$string;
            }

            // Exécution de ma fonction
            echo fusion(42, ' C\'est le chiffre magique');
            ?>
        </p>
    </body>
</html>