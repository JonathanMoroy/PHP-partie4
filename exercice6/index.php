<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
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
                <li><a href="http://partie4/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie4/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :<br/>
            "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction:
            <?php

            // Déclaration de ma fonction
            function hello($secondName, $firstName, $old) {
                return 'Bonjour ' . $secondName . ' ' . $firstName . ', tu as ' . $old . 'ans.';
            }

            // Exécution de ma fonction
            echo hello('Moroy', 'Jonathan', 26);
            ?>
        </p>
    </body>
</html>