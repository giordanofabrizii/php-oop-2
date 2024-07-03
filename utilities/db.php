<?php  

// # Animali
$cane = new Animale('fa-solid fa-dog','Cane');
$gatto = new Animale('fa-solid fa-cat','Gatto');
$pesce = new Animale('fa-solid fa-fish','Pesce');
$uccello = new Animale('fa-solid fa-dove','Uccello');

// * Items
$canin_mini = new Cibo($cane, 'Royal Canin Mini Adult', '43,99','https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg','454g', ['Prosciutto','Riso']);
$tonno_e_riso = new Cibo($cane, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44,99','https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg','600g', ['Manzo','Cereali']);
$cat_daily = new Cibo($gatto, 'Almo Nature Cat Daily Lattina', '34,99','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg','400g', ['Tonno','Pollo','Prosciutto']);
$mangime_pesci = new Cibo($pesce, 'Mangime per Pesci Guppy in Fiocchi', '2.95','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','30g', ['Pesci e sottoprodotti dei pesci','Cereali','Lieviti','Alghe']);
$voliera = new Accessorio($uccello, 'Voliera Wilma in Legno', '184,99','Legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'M: L 83 x P 67 x H 153 cm');
$cartucce = new Accessorio($pesce, 'Cartucce Filtranti per Filtro EasyCrystal', '2,29','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','Materiale espanso', 'ND');
$kong = new Gioco($cane, 'Kong Classic', '13,49','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','Galleggia e rimablza', '8,5 cm x 10 cm');
$mouse = new Gioco($gatto, 'Topini di peluche Trixie', '4,99','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','Morbido con codina in corda', '8,5 cm x 10 cm');

$allProducts = Prodotto::all();