<?php 

    // PRODUCT AREA
    require_once __DIR__ . '/classes/animal-products/Food.php';
    require_once __DIR__ . '/classes/animal-products/DogHarness.php';
    require_once __DIR__ . '/classes/animal-products/Kennels.php';

    $allProducts = [];

    $migliorCane = new Food('Miglior Cane', 'Media', 35.90);
    $migliorCane->poster = 'img/s_seniorMA_2-5kg.jpg';
    $allProducts[] = $migliorCane;

    $julius_K9 = new DogHarness('Julius K-9', 'Medio-Grande', 29.50);
    $julius_K9->poster = 'img/pettorina-julius-k9.png';
    $allProducts[] = $julius_K9;

    $bolster = new Kennels('Bolster', 'Piccola', 59.90);
    $bolster->poster = 'img/71VnSdG+rxL._AC_SX425_.jpg';
    $allProducts[] = $bolster;

    // USER AREA
    require_once __DIR__ . '/classes/user/AnonymousUser.php';
    require_once __DIR__ . '/classes/user/RegisteredUser.php';
    require_once __DIR__ . '/classes/user/CreditCard.php';

   

    // Registered User
    $Lisa_Zhou = new RegisteredUser();
    $Lisa_Zhou->name = 'Lisa Zhou';
    $Lisa_Zhou->email = 'lisazhou111@email.it';

    $Lisa_Zhou->moveToCart($migliorCane);
    $Lisa_Zhou->moveToCart($bolster);
    // var_dump($Lisa_Zhou->getCartSum());

        // Credit Balance
        $Lisa_Zhou->balace = 90;
        // $Lisa_Zhou->paymentResult($Lisa_Zhou->balace);
            // if($Lisa_Zhou->paymentResult($Lisa_Zhou->balace) === 'ok') {
            //     echo "Grazie per aver effettuato l'acquisto";
            // };

     // Not-Registered User
     $anonymous = new AnonymousUser();
     $anonymous->moveToCart($julius_K9);
    //  var_dump($anonymous->getCartSum());

        // Credit Balance
        $anonymous->balace = 20;
        // $anonymous->paymentResult($anonymous->balace);
            // if($anonymous->paymentResult($anonymous->balace) === 'ok') {
            //     echo "Grazie per aver effettuato l'acquisto";
            // };
?>