<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie4/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie4/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie4/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie4/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie4/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie4/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie4/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br/>
            - Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
            - Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
            - Les deux nombres sont identiques si les deux nombres sont égaux
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction:
            <?php

            // Déclaration de ma fonction
            function numberWatch($num1, $num2) {
                // Déclaration des conditions pour retourner la bonne phrase selon la valeur des nombres
                if ($num1 == $num2) {
                    $result = 'Le deux nombres sont identiques.';
                } else {
                    if ($num1 > $num2) {
                        $result = 'Le premier nombre est plus grand.';
                    } else {
                        $result = 'Le premier nombre est plus petit.';
                    }
                }
                return $result;
            }

            // Exécution de ma fonction
            echo numberWatch(42, 42);
            ?>
        </p>
    </body>
</html>