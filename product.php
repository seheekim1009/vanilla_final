<html>

<?php include "product-header.php";?>


<body>

<div class="page-wrapper">

<?php include "navigation.php";?>

  <div id="search-container">
    <div class="search-field">
      <input id="search" class="search-field-input" type="text" placeholder="search..">
      <div id="search-button">search</div>
    </div>
  </div>
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
        <div class="cart-wrapper">
          <img src="image/cart.svg" class="cart-icon" alt="cart">
        </div>
        <div class="cart-num-wrapper">
          <div id="cart-num">0</div>
        </div>
      </div>
    </div>
  </section>


  <!-- item -->
  <section id="single-product" class="section-single-product">
    <div class="container-item">
      <div class="item-photo">
        <!-- <img src="image/product/product04_socks.jpg"> -->
      </div>
      <div class="item-box">
        <div class="item-name">
          <h1>Item Name</h1>
          <div class="label-item-price">Cost</div>
        </div>
        <div class="item-price">
          <div class="price">Cost</div>
          <!-- <div class="price-original">10$</div> -->
        </div>
        <div class="label-quantity">Quantity</div>
        <div class="add-to-cart">
          <input type="text" id="add-to-cart-text" value=1>
          <input id="add-to-cart-button" type="submit" value="Add to Cart">
        </div>
        <div class="label-desc">Description</div>
        <div class="item-description"></div>
        <div class="label-item-detail">Details</div>
        <ul class="item-info-row"></ul>
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