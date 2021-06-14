<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 4 </title>
</head>
<body>
    <h1># Exercice 4</h1>
<p>Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.
</p>
<?php
//boucle for, initialisation de la variable, je donne une condition à ma variable, et j'incremente ma variable.
for($n=1; $n<=100; $n+=15){
    ?>
    <p><?= 'Ceci est le nombre : '.$n ?></p>;
    <?php
}
?>
</body>
</html>