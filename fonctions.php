<?php


// Ecrivez une fonction qui permette de générer un lien.
function create_link($lien, $libelle){
    return '<a href="' . $lien . '">' . $libelle . '</a>';
}
echo create_link("toto", "titi");
echo '<hr />';


// Ecrivez une fonction qui calcul la somme des valeurs d'un tableau

function somme($tablo){
    return array_sum($tablo);
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);

echo $resultat;

echo '<hr />';

// Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

// Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :

    // Faire au moins 8 caractères de long
    // Avoir au moins 1 chiffre
    // Avoir au moins une majuscule et une minuscule

function complex_password($password){

    $pattern = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/';
    if(preg_match($pattern, $password)){
        return true;
    }else{
        return false;
    }
    
}


echo $resultat = complex_password("TopSecret42") . '<br />';
echo $resultat = complex_password("topsecret42") . '<br />';
echo $resultat = complex_password("578962749542") . '<br />';
echo $resultat = complex_password("TopSecret") . '<br />';


echo '<hr />';