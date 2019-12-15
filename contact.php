<!DOCTYPE html>
<html>
 <?php include "header.php";?>

  <body>
    <div class="page-wrapper">
    <?php include "navigation.php";?>
    <?php include "navbar.php";?>
        
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
            <img src="image/contact.jpg">
          </div>
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

      <?php include "subscription.php"; ?>
      <?php include "footer.php"; ?>
    </div>
  </body>
</html>