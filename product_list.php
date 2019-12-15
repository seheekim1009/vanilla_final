
<html>
  
<?php include "header.php"; ?>

<?php include_once "db_connect.php";
$search = $_GET['search'];

?>
  <body>
      <div class="page-wrapper">
      <?php include "navigation.php";?>
      <?php include "navbar.php";?>
    <!------------- Page-Heading----------->
    <div class="page-heading">
      <div id="container-heading" class="container-heading">
        <h1 class="heading-title">Shop</h1>
        <div class="heading-text">Meet the best products for your sleep </div>
      </div>
    </div>
    <!-------------Shop------------>
    <section id="bestseller" class="section-best">
      <div class="container-best">
        <div class="section-title-block">
          <h2 class="section-title">Our Products</h2>
        </div>
      </div>

      <div class="container-product-list">
        <div class="container-product-list-w-items">
            <div class="item-row">
              <?
              $query_string = "SELECT * FROM `products` ORDER BY `productName` ASC" ;
                
              if($search && strlen($search) > 0) {
                $query_string = "SELECT * FROM `products` WHERE `productName` LIKE '%". $search ."%' ORDER BY `productName` ASC";
                
              }


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
    <?php include "footer.php";?>
  </body>
</html>


