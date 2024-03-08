<?php
    /*
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        - L'e-commerce vende prodotti per animali.
        - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    */

    class Prodotto{
        public $name;
        public $prezzo;
        public $immagine;
        public $categoria;

        public function __construct($name, $prezzo, $immagine, $categoria){
            $this->name = $name;
            $this->prezzo = $prezzo;
            $this->immagine = $immagine;
            $this->categoria = $categoria;
        }
    }

    class Cibo extends Prodotto {
        public $tipo = "Cibo";
        public function tipoCibo(){
            return $this->tipo;
        }
    }

    class Gioco extends Prodotto {
        public $tipo = "Gioco";
        public function tipoGioco(){
            return $this->Gioco;
        }
    }

    class Cuccia extends Prodotto {
        public $tipo = "Cuccia";
    
        public function tipoCuccia(){
            return $this->tipo;
        }
    }



    $cibo = new Cibo("Crocchette", "19.99", "immagine_cibo.jpg", "Cane");
    $gioco = new Gioco("Pallina", "4.99", "immagine_pallina.jpg", "Gatto");
    $cuccia = new Cuccia("Cuccia Morbida", "39.99", "immagine_cuccia.jpg", "Cane");

    var_dump($cibo, $gioco, $cuccia);



?>

<!DOCTYPE html>
<html lang="en" class="dark:bg-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <h1 class="text-3xl  ">
        Hello world!
    </h1>
    
</body>
</html>