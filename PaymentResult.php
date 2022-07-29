<?php require_once __DIR__ . '/E_Commerce_Info.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <!-- Registered -->
    <div class="registered">
        <div>
        <span> Ciao, <?php echo $Lisa_Zhou->name; ?> !</span>
        </div>
        <!-- Payment Result -->
        <div class="payment-result">
            <?php 
                try {
                    if($Lisa_Zhou->paymentResult($creditCardDetails) === 'ok') {
                        echo "Grazie per aver effettuato l'acquisto. <br>
                        Il totale pagato è di:" ;
                        echo $Lisa_Zhou->getCartSum() . "<span> &euro; </span>";
                    }
                } catch(Exception $e) {
                    error_log($e->getMessage());
                    echo 'Qualcosa è andato storto, prova a controllare la carta e riprova.';
                }
            ?> 
        </div>
    </div>

    <!-- Anonymouse -->
    <!-- <div class="anonymous">
        <div>
        <span> Ciao!</span>
        </div>
        <div>
            <?php
            // $anonymous->paymentResult($anonymous->balace);
            //     if($anonymous->paymentResult($anonymous->balace) === 'ok') {
            //         echo "Grazie per aver effettuato l'acquisto";
            //     };    
            ?>
        </div> -->

        <!-- Total Payment -->
        <!-- <div class="total-payment">
            <span>
                Il totale pagato è di: <?php echo $anonymous->getCartSum(); ?> &euro;
            </span>
        </div>
    </div> -->



</body>
</html>