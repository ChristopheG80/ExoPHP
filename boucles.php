<?php
// Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
// for($i = 1; $i <= 15; $i++){
for($i = 1; $i <= 150; $i++){
    echo $i/2==intval($i/2)?'':$i . ' ';
}

echo '<hr/>';
// Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
// 1° solution
for($i = 1; $i <= 500; $i++){
    echo 'Je dois faire des sauvegardes régulières de mes fichiers <br/>';
}
// 2° solution
// while($i<=500){
// while($i<=5){
//     echo 'Je dois faire des sauvegardes régulières de mes fichiers <br/>';
//     $i++;
// }

echo '<hr/>';
function multi($a, $b){
    return $a * $b;
}

echo '<table border="1">';
for($i=1; $i<10; $i++){

echo '<tr>';
    for($j=1; $j<10; $j++){
        echo '<td>' . multi($i, $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
