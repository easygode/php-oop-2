<?php
require_once __DIR__.'/Models/dog.php';
require_once __DIR__.'/Models/cat.php';
require_once __DIR__.'/Models/fish.php';
require_once __DIR__.'/Models/bird.php';

$dog1 = new Dog("Crocchette per cani", "Crochette pollo e tacchino", 10.99, "Doberman", "Grande");
$dog2 = new Dog("Orecchie di maiale", "Maiale francese, prodotto liofilizzato", 4.99, "Tutte", "Tutti");
$dog3 = new Dog("Dentifricio per cani", "Pastiglie da 5 grammi", 1.99, "Tutte", "Tutti");
$cat1 = new Cat("Crocchette per gatti", "Crochette salmone e acciughe", 6.99, "Persiano", "Medio");
$cat2 = new Cat("Scatoletta mela", "Mela Golden e Delicious 300g", 7.99, "Tutte", "Tutti");
$cat3 = new Cat("Gomitolo in lana merinos", "Gomitolo rotolo e srotolo", 3.25, "Tutte", "Tutti");
$fish1 = new Fish("Mangime per pesci", "Acciughe e alghe 100g", 7.99, "Pesce Pagliaccio", "Medio");
$fish2 = new Fish("Alghe decorative", "Alghe Guam del Mar Nero 5 pezzi", 24.99, "Tutte", "Tutti");
$fish3 = new Fish("Set pulizia acquario", "Kit a tre pezzi, spatola secchiello e snorkel", 45.35, "Tutte", "Tutti");
$bird1 = new Bird("Mangime per uccelli", "Vermi e Blatte 125g", 1.99, "Cormorano", "Medio");
$bird2 = new Bird("Trespolo in legno", "Trespolo in legno d'acacia, 30 cm", 24.99, "Tutte", "Grande");
$bird3 = new Bird("Abbeveratoio", "Inserto per bere da gabbia", 45.35, "Tutte", "Medio");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>
<body>
    <h1>Boolshop</h1>
    
    <?php 
    $dog1->sprint();
    $dog2->sprint();
    $dog3->sprint(); 
    $cat1->sprint();
    $cat2->sprint();
    $cat3->sprint(); 
    $fish1->sprint();
    $fish2->sprint();
    $fish3->sprint(); 
    $bird1->sprint();
    $bird2->sprint();
    $bird3->sprint(); 
    ?>
</body>
</html>