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
    require_once __DIR__ . '/E_Commerce_Info.php';
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

        <form action="PaymentResult.php">
            <button>
                <span>COMPRA</span>
            </button>
        </form>
    </div>

</body>
</html>