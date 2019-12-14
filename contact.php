<html>

 <?php include "header.php";?>

<body>
  <div class="page-wrapper">
  <?php include "navigation.php";?>
    </div>
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
        <h1 class="heading-title">Contact Us</h1>
        <div class="heading-text">Let's Connect. We're ready for you anytime.</div>
      </div>
    </div>

    <!--------------Contents-------------------->
    <div class="container-contact">
      <div class="contact-wrap">
        <div class="contact-photo">
          <img src="image/contact.jpg"></div>
        <div class="contact-text">
          <div class="contact-title">Our Office</div>
          <div class="contact-text-body">
            180 New Montgomery Street<br>
            San Francisco<br>
            CA 94105<br>
            United States
           </div>

           <div class="opening-time-title">
                OPENING TIMES
           </div>
           <div class="opening-time">  
                Mon - Fri 08:00 to 22:00<br>
                Sat - 09:00 to 20:00<br>
                Sun - 12:00 to 18:00
           </div>
        </div>
      </div>

      <div class="map-wrap">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.97109671429!2d-122.4023228986238!3d37.79071712348194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858089e61e5a53%3A0x9208f4aa14737387!2s180%20Montgomery%20St%2C%20San%20Francisco%2C%20CA%2094104!5e0!3m2!1sko!2sus!4v1571671803321!5m2!1sko!2sus" frameborder="0" style="border:0;" area-hidden="true" class="map"></iframe>
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


 
  </div>
</body>