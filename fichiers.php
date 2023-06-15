<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
// $myVar = "Bonjour le monde";

// // Ouverture en écriture seule 
// $fp = fopen("essai.txt", "a"); 

// // Ecriture du contenu ($myVar) 
// fputs($fp, $myVar); 

// // Fermeture du fichier  
// fclose($fp); 



// Lecture
// $fp = fopen("essai.txt", "r"); 

// // Boucle jusqu'à la fin du fichier
// while (!feof($fp)) 
// { 
//     // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
//     $ligne = fgets($fp, 4096); 
//     echo $ligne."<br>"; 
// } 


// Exercices

// Lecture d'un fichier
$links = file("liens.txt");

function create_link($lien, $libelle){
    return '<a href="' . $lien . '">' . $libelle . '</a>';
}
$i = 1;
echo "<ul>";
foreach($links as $row_num => $row){
    echo '<li>' . create_link($row, "Lien ".$i) . '</li>';
    $i++;
}
echo "</ul>";



$custom = file('https://ncode.amorce.org/customers.csv');
echo '<table>';
echo '<tr><td>Surname</td><td>Firstname</td><td>Email</td><td>Phone</td><td>City</td><td>State</td></tr>';

foreach($custom as $key => $roww){
    $custo = explode(",",$roww);
    echo '<tr><td>' . $custo[0] . '</td><td>' . $custo[1] . '</td><td>' . $custo[2] . '</td><td>' . $custo[3] . '</td><td>' . $custo[4] . '</td><td>' . $custo[5] . '</td></tr>';
}

echo '</table>';



