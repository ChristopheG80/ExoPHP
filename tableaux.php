<?php

define('CAL_GREGORIAN', 0);

// Mois de l'année non bissextile
$mois = array("janvier" => cal_days_in_month(CAL_GREGORIAN, 1, 2023),
"février" => cal_days_in_month(CAL_GREGORIAN, 2, 2023),
"mars" => cal_days_in_month(CAL_GREGORIAN, 3, 2023),
"avril" => cal_days_in_month(CAL_GREGORIAN, 4, 2023),
"mai" => cal_days_in_month(CAL_GREGORIAN, 5, 2023),
"juin" => cal_days_in_month(CAL_GREGORIAN, 6, 2023),
"juillet" => cal_days_in_month(CAL_GREGORIAN, 7, 2023),
"août" => cal_days_in_month(CAL_GREGORIAN, 8, 2023),
"septembre" => cal_days_in_month(CAL_GREGORIAN, 9, 2023),
"octobre" => cal_days_in_month(CAL_GREGORIAN, 10, 2023),
"novembre" => cal_days_in_month(CAL_GREGORIAN, 11, 2023),
"décembre" => cal_days_in_month(CAL_GREGORIAN, 12, 2023)
);

?>
<table>
<?php
foreach($mois as $key => $value){
?>
<tr><td><?= $key; ?></td><td><?= $value; ?></td></tr>
<?php
}
?>
</table>

<table>
    <th colspan="2">Trié </th>
<?php
asort($mois);
foreach($mois as $key => $value){
?>
<tr><td><?= $key; ?></td><td><?= $value; ?></td></tr>
<?php
}
?>
</table>

<?php




// Capitales
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

echo '<hr/>';

// Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
ksort($capitales);
foreach($capitales as $key => $value){
    echo $key . " " . $value . "<br />";
}

echo '<hr/>';
// Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
asort($capitales);
foreach($capitales as $key => $value){
    echo $value . " " . $key . "<br />";
}
echo '<hr/>';
// Affichez le nombre de pays dans le tableau.
$countCap = count($capitales);
echo $countCap;

echo '<hr/>';
// Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.

foreach($capitales as $key => $value){
    if($key[0] != "B"){
        unset($capitales[$key]);
    }
}

foreach($capitales as $key => $value){
    echo $value . " " . $key . "<br />";
}

echo '<hr/>';



$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);




// Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements

asort($departements);
foreach($departements as $keyReg => $dept){
    echo $keyReg;
    foreach($dept as $nomDep){
        echo ' ' . $nomDep; 
    }
    echo '<br />';
}

// Affichez la liste des régions suivie du nombre de départements
asort($departements);
foreach($departements as $keyReg => $dept){
    echo $keyReg;
    echo ' ' . count($dept); 
    echo '<br />';
}


