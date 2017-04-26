<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
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
                <li><a href="http://partie4/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :<br/>
            - Homme<br/>
            - Femme<br/>
            La fonction doit renvoyer en fonction des paramètres :<br/>
            - Vous êtes un homme et vous êtes majeur<br/>
            - Vous êtes un homme et vous êtes mineur<br/>
            - Vous êtes une femme et vous êtes majeur<br/>
            - Vous êtes une femme et vous êtes mineur<br/>
            Gérer tous les cas.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Exécution de ma fonction avec pour paramètres 'Homme' et 26:
            <?php

            // Déclaration de ma fonction
            function genderOld($gender, $old) {
                // Déclaration de la première condition pour déterminer le genre
                if ($gender == 'Homme') {
                    $varGender = 'Vous êtes un homme et ';
                } else if ($gender == 'Femme') {
                    $varGender = 'Vous êtes une femme et ';
                }
                // Déclaration de la seconde condition pour déterminer l'âge
                if ($old < 18) {
                    $varOld = 'vous êtes mineur.';
                } else {
                    $varOld = 'vous êtes majeur.';
                }
                return $varGender . $varOld;
            }

            // Exécution de ma fonction
            echo genderOld('Homme', 26);
            ?>
        </p>
    </body>
</html>