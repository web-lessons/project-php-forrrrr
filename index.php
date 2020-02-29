<?php

require_once 'template/header.php';
require_once 'config/db.php';

$products = array(
    0 => array(
        'name' => 'Товар 1',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    1 => array(
        'name' => 'Товар 2',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    2 => array(
        'name' => 'Товар 3',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    3 => array(
        'name' => 'Товар 4',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    4 => array(
        'name' => 'Товар 5',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    5 => array(
        'name' => 'Товар 6',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    6 => array(
        'name' => 'Товар 7',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    ),
    7 => array(
        'name' => 'Товар 8',
        'img' => 'img/product1.jpg',
        'description' => 'Описание БЛИН',
        'url' => '/'
    )
);

$query = 'SELECT * FROM `products`';
$result = mysqli_query($mysqli, $query);

var_dump($result);
?>
<section class="mt-4">
    <div class="row md-3">

        <?php foreach ($products as $key => $product): ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo $product ['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title"><?= $product ['name'] ?></h2>
                        <p class="card-text"><?= $product ['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php
require_once 'template/footer.php';
?>

