<?php
echo time();

echo "Nous sommes le " . date("d/m/Y");

echo date("H:i:s");

echo '<hr />';


// Trouvez le numéro de semaine de la date suivante : 14/07/2019.

$semdate= strtotime("2019-07-14");
echo Date('W', $semdate);
echo '<hr />';

// Combien reste-t-il de jours avant la fin de votre formation.
// $date1 = date_create("now");
// $today = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
// $date2 = date_create("2023-07-28");
// $fEnd = mktime(0, 0, 0, 7 , 28, 2023);
// echo date_diff($today, $fEnd);
// echo date_diff($date1, $date2);
//echo Date('', $interval);




$origin = new DateTimeImmutable('now');
$target = new DateTimeImmutable('2023-07-28');
$interval = $origin->diff($target);
echo $interval->format('%R%a jours');






$origin = date_create('now');
$target = date_create('2023-07-28');
$interval = date_diff($origin, $target);
echo $interval->format('%R%a jours');
echo '<hr />';



// Comment déterminer si une année est bissextile ?
// leap

$bissextile1 = date_create('2021-07-28');
$bissextile2 = date_create('2022-07-28');
$bissextile3 = date_create('2023-07-28');
$bissextile4 = date_create('2024-07-28');
echo date_format($bissextile1, 'L');
echo date_format($bissextile2, 'L');
echo date_format($bissextile3, 'L');
echo date_format($bissextile4, 'L');

echo '<hr />';
// Montrez que la date du 32/17/2019 est erronée.
// $dateErronnee = date_create('2019-17-32');

$oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}


echo '<hr />';
// Affichez l'heure courante sous cette forme : 11h25.
echo date("H\hi");

echo '<hr />';
// Ajoutez 1 mois à la date courante.
$nextMonth = mktime(0, 0, 0, date("m")+1  , date("d"), date("Y"));
var_dump($nextMonth);
// echo date_format($nextMonth, 'd/m/Y');

echo '<hr />';
// Que s'est-il passé le 1000200000

echo "The twin towers = " . date('Y-m-d',1000200000);

echo '<hr />';
// 1000200000