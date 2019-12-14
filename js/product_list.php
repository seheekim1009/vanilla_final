
<?php include "header.php";?>
<?php include_once "db_connect.php";?>

<!DOCTYPE html>
<html>
<head>

<title>Product List</title>

</head>


<body>

<div class="page-wrapper">
<?php include "navigation.php";?>
  <!-- <div id="search-container">
    <div class="search-field">
      <input id="search" class="search-field-input" type="text" placeholder="search..">
      <div id="search-button">search</div>
    </div>
  </div> -->

  <section id="header" class="home-section">
    <div class="container-navbar">
      <div class="burger-wrap" id="hamburger">
        <img src="image/hamburger.png" class="hamburger" alt="logo">
      </div>
      <a href="index.php" class="logo-wrap">
          <img src="image/logosmall.png" class="logo" alt="logo">
      </a>
      <div class="nav-icons-wrapper">
        <div class="search-field-trigger">
          <img src="image/search_icon.svg" class="search-icon" alt="search">
        </div>
        <a href="checkout.php" class="cart-wrapper">
          <img src="image/cart.svg" class="cart-icon" alt="cart">
        </a>
        <div class="cart-num-wrapper">
            <div id="cart-num">0</div>
          </div>
      </div>
    </div>
  </section>

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
      <div class="col-sm-6 col-md-3 col-min-width">
          <div class="product-item">
        <?
        $query_string = "SELECT * FROM `products` ORDER BY `productName` ASC" ;
        $result = $conn -> query($query_string);

        if($conn->errno) die($conn->error);
        while($row = $result->fetch_object()) {
        //  <!-- this is a template a looping structure-->
        ?>
    
         <a href="product_item.php?id=<?= $row->id ?>" class="product-item-link">
          <img src="image/product/<?= $row->image ?>" alt="<?= $row->productName?>image">
        <div class="product-description">
          <div class="product-title"> <?= $row->productName ?></div>
          <div class="product-body"><?= $row->price ?></div>
          </a>
        </div>
        </div>
      <?
        }?>
    </div>
    </div>
  </div>
  </section>


  <!-------------Subscription------------>

  <section id="subscription" class="section-subscribe">
      <div class="container-subscribe">
        <div class="message-w-deco-line">
          <div class="form-deco-line"></div>
          <div class="subscribe-headline">Enjoy Vanilla</div>
          <div class="form-deco-line"></div>
        </div>
      </div>
      <div class="subscribe-message">
        Sign up and get free vanilla items for your better sleep! </div>

      <div class="form-block">
        <form id="form-subscribe" class="form" name="subscribe" data-name="subscribe-form">
          <input id="User-s-Name" class="text-field-input" type="text" maxlength="256" name="User-s-Name"
            data-name="UserName" paceholder="yourname@vanilladream.io">
          <input class="btn-subscribe" type="submit" value="Subscirbe" data-wait="Please Wait..">
        </form>
      </div>
  </div>
  </div>
  </section>

  <?php include "footer.php";?>
  </div>

</body>
</html>


