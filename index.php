<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<?php include_once "db_connect.php";
?>

    <body>
        <div class="page-wrapper">
            <?php include "navigation.php";?>
            <?php include "navbar.php";?>

            <!------------- Image Slider------------>
            <div class="carousel">
                <div id="carousel-1" class="carousel-container">
                    <div class="text">
                        <div class="title1">NEW THIS AUTUMN</div>
                        <div class="title2">Don't Wake Me Up<br>I am sleeping</div>
                        <a class="title3" href="product_item.php?id=5">Discover</a>
                    </div>
                    <div class="image-container">
                        <img class="image" src="image/slideimage-1.png">
                    </div>
                </div>
                <div id="carousel-2" class="carousel-container">
                    <div class="text">
                        <div class="title1">BEST SELLER IN OCTOBER</div>
                        <div class="title2">Protect Me<br>From the Monster</div>
                        <a class="title3" href="product_item.php?id=8">Discover</a>
                    </div>
                    <div class="image-container2">
                        <img class="image" src="image/slideimage-2.png">
                        <div class="circle"></div>
                    </div>
                </div>
                <div id="carousel-arrow-left" class="arrow left">
                    <img src="image/carousel_arrow_left.svg" class="carousel-arrow" alt="carousel-arrow-left">
                </div>
                <div id="carousel-arrow-right" class="arrow right">
                    <img src="image/carousel_arrow_right.svg" class="carousel-arrow" alt="carousel-arrow-left">
                </div>
            </div>

            <!------------- Our Story------------>

            <section id="ourstory" class="section-story">
                <div class="container-story">
                    <div class="ourstory-text">
                        A better sleep makes a better daily life. <br>We help people having sleep
                        disorders by introducing best products and tips that improve the quality of your sleep.
                    </div>
                </div>
                <div class="btn-container">
                    <a class="btn" href="ourstory.php">Read More</a>
                </div>
            </section>

            <!-------------Best Sellers------------>
            <section id="bestseller" class="section-best">
                <div class="container-best">
                    <div class="section-title-block">
                        <h2 class="section-title">Best Sellers</h2>
                    </div>

                    <div class="container-product-list">
                        <div class="container-product-list-w-items">
                            <div class="item-row">
                            <?
                                $query_string = "SELECT * FROM `products` WHERE isBest=1" ;
                                $result = $conn -> query($query_string);

                                if($conn->errno) die($conn->error);
                                while($row = $result->fetch_object()) {
                                //  <!-- this is a template a looping structure-->
                            ?>
                            <div class="col-sm-6 col-md-3 col-min-width">
                                <div class="product-item">
                                    <a href="product_item.php?id=<?= $row->id ?>" class="product-item-link">
                                        <img src="image/product/<?= $row->image ?>" alt="<?= $row->productName?>image">
                                        <div class="product-description">
                                            <div class="product-title"> <?= $row->productName ?></div>
                                            <div class="product-body"><?= $row->price ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?
                            }?>

                        </div>
                    </div>
                </div>
            </section>
        <?php include "subscription.php"; ?>
        <?php include "footer.php"; ?>
    </body>
</html>