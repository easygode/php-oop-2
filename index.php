<?php
require_once __DIR__.'/Models/Category.php';
require_once __DIR__.'/Models/Product.php';
require_once __DIR__.'/Models/Food.php';

$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');

$product1 = new Product(10, 'Guinzaglio', 'Guinzaglio da collo lunghezza 3 metri', '$category_dog', 15.99, 'img/dog_pic.png');
$product2 = new Product(20, 'Osso di gomma', 'Osso di comma lunghezza 3 metri', '$category_dog', 27.99, 'img/osso-cani.png');
$product3 = new Food(30, 'Croccantini', 'Croccantini di pollo e tacchino', '$category_cat', 15.99, 'img/croc-cat.png');

$products = [
    $product1,
    $product2,
    $product3,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>
<body>
    <div class="container">
    <h1>Pet Shop Boolean</h1>
        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="<?php echo $product->get_image(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                            <p class="card-text"><?php echo $product->get_description(); ?></p>
                            <p>Prezzo: <?php echo $product->get_price(); ?> €</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>