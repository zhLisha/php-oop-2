<?php 
    require_once __DIR__ . '/E_Commerce_Info.php';

    $Lisa_Zhou->paymentResult($Lisa_Zhou->balace);
        if($Lisa_Zhou->paymentResult($Lisa_Zhou->balace) === 'ok') {
            echo "Grazie per aver effettuato l'acquisto";
        };

    $anonymous->paymentResult($anonymous->balace);
        if($anonymous->paymentResult($anonymous->balace) === 'ok') {
            echo "Grazie per aver effettuato l'acquisto";
        };    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>