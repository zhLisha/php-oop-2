<?php 

    // PRODUCT AREA
    require_once __DIR__ . '/classes/animal-products/Food.php';
    require_once __DIR__ . '/classes/animal-products/DogHarness.php';
    require_once __DIR__ . '/classes/animal-products/Kennels.php';

    $allProducts = [];

    $migliorCane = new Food('Miglior Cane', 'Media', 35.90, 3746253647657483);
    $migliorCane->poster = 'img/s_seniorMA_2-5kg.jpg';
    $allProducts[] = $migliorCane;

    $julius_K9 = new DogHarness('Julius K-9', 'Medio-Grande', 29.50, 957584756374657);
    $julius_K9->poster = 'img/pettorina-julius-k9.png';
    $allProducts[] = $julius_K9;

    $bolster = new Kennels('Bolster', 'Piccola', 59.90, 894758374859238);
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

    // Credit Balance
    $creditCardDetails = new CreditCard('Lisa Zhou', 456663458374657, '2/28', 756);


    
    // Not-Registered User
    $anonymous = new AnonymousUser();
    $anonymous->moveToCart($julius_K9);

    // Credit Balance
    // $anonymous->balace = 20;

?>