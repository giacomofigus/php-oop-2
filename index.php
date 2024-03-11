<?php
    /*
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        - L'e-commerce vende prodotti per animali.
        - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    */

    require_once __DIR__ . "/models/Product.php";
    require_once __DIR__ . "/models/Food.php";
    require_once __DIR__ . "/models/Game.php";
    require_once __DIR__ . "/models/Category.php";

    // 2 categorie
    
    $dogs = new Category('Dogs', 'fa-solid fa-dog');
    $cats = new Category('Cats', 'fa-solid fa-cat');

    //creare istanze delle altre classi
    $prdouct = new Product ("Collare", 10.00, "img/thea-GY_JFp-Pei0-unsplash.jpg", true, 10, $dogs);
    $food = new Food("Crocchette", 20.00, "img/ayla-verschueren-jnq52JjkLAg-unsplash.jpg", true, 10, $cats);
    $game = new Game("Palla da tennis", 5.00, "img/kevin-mueller-Q-fL04RhuMg-unsplash.jpg", true, 10, $dogs);
    
    $food->setCalories(200);
    $game->setGenre("ball");

    $products = [
        $prdouct,
        $food,
        $game
    ];
?>

<!DOCTYPE html>
<html lang="en" class="dark:bg-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous'/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <main>
        <div class="h-screen flex items-center justify-center"> 
            <div class="row container flex mx-auto gap-4 ">
                <?php foreach($products as $element): ?>
                    <div class="card text-start bg-white">
    
                        <img class="card-img-top" 
                        src="<?php echo $element->image; ?>" 
                        alt="<?php echo $element->name; ?>" />
    
                        <div class="card-body">
                            <h4 class="card-title font-bold"><?php echo $element->name; ?></h4>
                            <p class="card-text">€<?php echo $element->price; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
    </main>
</body>
</html>