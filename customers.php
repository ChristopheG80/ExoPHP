<?php
$custom = file('https://ncode.amorce.org/customers.csv');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Customers' Show</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"><strong>Surname</strong></div>
            <div class="col-2"><strong>Firstname</strong></div>
            <div class="col-2"><strong>Email</strong></div>
            <div class="col-2"><strong>Phone</strong></div>
            <div class="col-2"><strong>City</strong></div>
            <div class="col-2"><strong>State</strong></div>
<?php
            $i=1;
            foreach($custom as $key => $roww){
                $custo = explode(",",$roww);
                foreach($custo as $cust => $value){
?>
                <div class="col-2<?= $i/2==intval($i/2)?' bg-light':'';?>"><?= $value;?></div>  
<?php
                }
                $i++;            
            }
?>
        </div>
    </div>
</body>
</html>