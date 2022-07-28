<?php 
/* Prodotti animali:
- Cibo (Crocchette "Miglior Cane") --> Di cui avra' anche il peso in KG;
- Pettorina ("Julius - K9);
- Cucce;

    --> Istanze di default:
        - Modello;
        - dimensione consigliata;
        - prezzo;

*/

/* Utenti:
- Nome;
- Email;
- Sconto;

    --> Extra:
        - 20% di sconto per utenti registrati;
*/
?>

<?php 
    // Products Area
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

    // User Area
    require_once __DIR__ . '/classes/user/AnonymousUser.php';
    require_once __DIR__ . '/classes/user/RegisteredUser.php';

    $anonymous = new AnonymousUser();
    $anonymous->moveToCart($julius_K9);
    var_dump($anonymous->getCartSum());

    $Lisa_Zhou = new RegisteredUser();
    $Lisa_Zhou->name = 'Lisa Zhou';
    $Lisa_Zhou->email = 'lisazhou111@email.it';
    $Lisa_Zhou->moveToCart($migliorCane);
    $Lisa_Zhou->moveToCart($bolster);
    var_dump($Lisa_Zhou->getCartSum());

?>

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
    <!-- Products -->
    <div class="container">
        <h1>Prodotti del negozio</h1>
        <ul class="card-wrapper flex">
            <?php foreach($allProducts as $product) { ?>
                <li class="flex">
                    <div class="image flex">
                        <a href="#">
                            <img src="<?php echo $product->poster; ?>" alt="">
                        </a>
                    </div>

                    <div class="info-product">
                        <div class="name">
                            <span>Nome:</span> 
                            <?php echo $product->name; ?>
                        </div>
                        <div class="size">
                            <span>Prodotto consigliato per taglia: </span>
                            <?php echo $product->size; ?>
                        </div>

                        <!-- Print weightProduct only if is TRUE -->
                        <?php if($product->weightProduct) { ?>
                            <div class="weight">
                                <span>Peso: </span>
                                <?php echo "$product->weightProduct Kg"; ?>
                            </div>
                        <?php } ?>
                        <div class="price">
                            <span>Prezzo: </span>
                            <?php echo "$product->price &euro;"; ?>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

</body>
</html>