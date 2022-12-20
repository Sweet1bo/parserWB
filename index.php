<?php
include __DIR__ . "/app/db.php";

$products = selectAll('product');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>СтаркOFF - мужские головные уборы</title>
</head>
<body>
<!--HEADER-->
<?php include __DIR__ . "/app/include/header.php" ?>
<!--HEADER END-->

<!--SLIDE BAR-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>
<!--SLIDE BAR END-->
<!--PRODUCT-->
<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
<!--        Выводит все продукты-->
        <?php foreach($products as $product): ?>
        <div class="col hp">
            <div class="card h-100 shadow-sm">
                <a href="<?= "https://www.wildberries.ru/catalog/{$product['product_ID']}/detail.aspx" ?>">
                    <img src="<?= $product['img'] ?>" class="card-img-top" alt="product.title" />
                </a>
                <div class="label-top shadow-sm">
                    <a class="text-white" href="<?= "https://www.wildberries.ru/catalog/{$product['product_ID']}/detail.aspx" ?>""><?= $product['product_ID']; ?></a>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3">
                        <span class="float-start badge rounded-pill bg-success"><?= $product['cost'] . "₽"; ?></span>
                    </div>
                    <h5 class="card-title">
                        <a target="_blank" href="<?= "https://www.wildberries.ru/catalog/{$product['product_ID']}/detail.aspx" ?>""><?= $product['description']; ?></a>
                    </h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!--PRODUCT END-->
</body>
</html>