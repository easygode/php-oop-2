<?php
require_once __DIR__.'/Models/dog.php';

$cane1 = new Dog("Crocchette per cani", "Crochette pollo e tacchino", 10.99, "Doberman", "Grande");
$cane2 = new Dog("Orecchie di maiale", "Maiale francese, prodotto liofilizzato", 4.99, "Tutte", "Tutti");
$cane3 = new Dog("Dentifricio per cani", "Pastiglie da 5 grammi", 1.99, "Tutte", "Tutti");

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
    $cane1->sprint();
    $cane2->sprint();
    $cane3->sprint(); 
    ?>
</body>
</html>