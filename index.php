<?php 

// < import section
require_once __DIR__ . '/classes/Animale.php';
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/products/Accessorio.php';
require_once __DIR__ . '/classes/products/Gioco.php';
require_once __DIR__ . '/classes/products/Cibo.php';
require_once __DIR__ . '/utilities/db.php';


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link rel="stylesheet" href="style/style.css">

    <!-- Fontawesome 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>BOOLSHOP</h1>
    </header>
    <main>
        <section class="container">
            <h2>I nostri prodotti</h2>

            <div class="article-container">
                <?php foreach($allProducts as $prodotto) {?>
        
                    <article>
                        <img src="<?php echo $prodotto->getFoto() ?>" alt="product image">
                        <h3><?php echo $prodotto->getNome() ?></h3>
    
                        
                        <?php $animale = $prodotto->getAnimale() ?>
                        <p><i class="<?php echo $animale->getIcon() ?>"></i> <?php echo $animale->getSpecies() ?></p>
    
                        <p>Prezzo: € <?php echo $prodotto->getPrezzo() ?></p>

                        <?php if(get_class($prodotto) == 'Cibo') {?>
                            <p>Peso Netto: <?php echo $prodotto->getPeso() ?></p>
                            <p>
                                Ingredienti: 
                                <?php $ingredienti = $prodotto->getIngredienti();
                                foreach($ingredienti as $index => $ingrediente) {
                                    if ($index != count($ingredienti) - 1) {
                                        echo $ingrediente . ', ';
                                    } else {
                                        echo $ingrediente;
                                    }
                                }
                                ?>
                            </p>
                        <?php } else if (get_class($prodotto) == 'Gioco') { ?>
                            <p>Caratteristiche: <?php echo $prodotto->getCaratteristiche() ?></p>
                            <p>Dimensioni: <?php echo $prodotto->getDimensioni() ?>
                        <?php } else if (get_class($prodotto) == 'Accessorio') { ?>
                            <p>Materiale: <?php echo $prodotto->getMateriale() ?></p>
                            <p>Dimensioni: <?php echo $prodotto->getDimensioni() ?>
                        <?php } ?>
                    </article>
        
                <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>