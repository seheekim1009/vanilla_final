<html>
<?php include "header.php"; ?>

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
        <h1 class="heading-title">Our Story</h1>
        <div class="heading-text">Meet the best products for your sleep </div>
      </div>
    </div>

    <!--------------Contents-------------------->
    <div class="container-introduction">
      <div class="introduction-wrap">
        <div class="introduction-photo">
          <img src="image/bedroom.jpg"></div>
        <div class="introduction-text">
          <div class="introduction-title">How Well Do You Sleep?</div>
          <div class="introduction-text-body">
            Many of us experience trouble sleeping at one time or another. It generally because of stress, illness or
            other temporary interruptions to your normal routine.
            <br>
            However, if sleep problems are a regular occurrence it impacts your daily life.
            50-70 million US adults have a sleep disorder.* 37.9% reported unintentionally falling asleep during the day
            at least once in the preceding month. (American Sleep Association).
            <br> “Sleeping Better” is now one of the important and worthy challenges
            to all of us in modern society to maintain your mental health and condition of life.

            <br><br>

            Vanilla Dream is a service that allows users to have a better night sleep.
            We help people having sleep disorders
            and provide products/tips which improve the quality of your sleep.

            If you are willing to have a better sleep for a better life, start with us.
            Sleep well and have a vanilla dream. </div>
        </div>
      </div>


      <div class="container-whyvanilla">
        <div class="whyvanilla-wrap">

          <div class="reason-col">
            <div class="reason-image-wrapper">
              <img src="image/ourstory/reason1.png">
            </div>
            <div class="reason-desc-wrapper">
              <div class="reason-title">12-items For Sleep </div>
              <div class="reason-desc">
                Check out our smart, out of the ordinary, and cherry-picked items for better sleep.
              </div>
            </div>
          </div>

          <div class="reason-col">
            <div class="reason-image-wrapper">
              <img src="image/ourstory/reason2.png">
            </div>
            <div class="reason-desc-wrapper">
              <div class="reason-title">Vanilla Tips </div>
              <div class="reason-desc">
                  Sign up and hear the latest, proven tips that are useful for better sleep and mental health. 
              </div>
            </div>
          </div>

          <div class="reason-col">
            <div class="reason-image-wrapper">
              <img src="image/ourstory/reason3.png">
            </div>
            <div class="reason-desc-wrapper">
              <div class="reason-title">12-items For Sleep </div>
              <div class="reason-desc">
                Vanilla Dream offers you various classes of yoga, meditation, and other mental health classes with our
                partners.
                <br>Discount available for members. (Coming out 2020)
              </div>
            </div>
          </div>

          <!-- <div class="reason-col">
              <img src="image/ourstory/reason2.png">
               <div class="reason-title">Vanilla Tips </div>
              <div class="reason-desc">
                  Sign up and hear the latest, proven tips that are worth trying for better sleep and mental health. 
              </div>
              </div>  

          <div class="reason-col">
                  <img src="image/ourstory/reason3.png">
                   <div class="reason-title">Mental Health Class </div>
                  <div class="reason-desc">
                      Vanilla Dream offers you various classes of yoga, meditation, and other mental health classes with our partners. 
                      <br>Discount available for members. (Coming out 2020)
                  </div>
            </div>     -->

        </div>
      </div>

    </div>

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