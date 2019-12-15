<?php include "header.php"; ?>
<?php include_once "db_connect.php";?>
<?php
// include_once "lib/php/print_o.php";
include_once "db_connect.php";
$delete = $_POST['delId'];
$delAll = $_POST['delAll']; 
?>

<body>
<div class="page-wrapper">
<?php include "navigation.php";?>
<?php include "navbar.php";?>
  


    <!------------- Page-Heading----------->

<section id="checkout" class="section-checkout">
    <div class="section-title-block">
        <h2 class="section-title">Your Shopping List</h2>
    </div>

    <!--------------Contents-------------------->
<div class="container-checkout">
  <div class="column-labels">
          <label class="product-image">Item</label>
          <label class="product-details">Product</label>
          <label class="product-price">Price</label>
          <label class="product-quantity">Quantity</label>
          <label class="product-line-price">Total</label>
    </div>



  <?php 

if($delete) {
$query_string = "UPDATE `products` SET cart = 0 WHERE `id` = $delete";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

}

if($delAll) {
  $query_string = "UPDATE `products` SET cart = 0";
  $result = $conn->query($query_string);    
  if($conn->errno) die($conn->error);
  ?>
  <script>
      alert('상품구매가 완료되었습니다.');
  </script>
<?php
}

// $query_string = "SELECT * FROM `products` WHERE `id` IN(9,13,34)";
$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);
$total = 0;
while($row = $result->fetch_object()){
	// $amount = rand(2,7);  // amount is random
  ?>
  


<div class="container-cart-item">
    <div class="item-image"><img src="image/product/<?= $row->image ?>"></div>
    <div class="item-name"><?= $row->productName ?></div>
    <div class="item-price">$<?= $row->price ?></div>
    <div class="item-quantity"><?= $row->cart ?></div>
    <div class="item-total"> $<?= ($row->price * $row->cart) ?> </div>
    <? $total += $row->price * $row->cart; ?>
    <div class="item-remove">
              <form method="post" class="image-remove">
                <input type="image" name="submit" value="delete" src="image/remove-button.svg">
                <input type="hidden" name="delId" value="<?= $row->id ?>">
              </form>
            </div>
 </div>

 <?php
}
?>



 <!------------------Total ---------------------------->

<?php
 if($total === 0) {
  ?>
  <div class="noitem">No item in cart</div>
  <?php
 } else {
  ?>
  <div class="container-total">
  <div class="total">
    <div class="total-label">
      <div>Subtotal</div>
      <div>Tax (5%)</div>
      <div>Shipping</div>
      <div>Grand Total</div>
    </div>
    <div class="total-value">
      <div>$<?= $total ?></div>
      <div>$<?= $total*0.05 ?></div>
      <div>$15.00</div>
      <div>$<?= $total * 1.05 + 15.00 ?></div>
    </div>
  </div>

  <form method="post">
    <input type="submit" name="submit" class="btn-checkout" value="Checkout">
      <input type="hidden" name="delAll" value="true">
  </form>
 </div>

  <?php
 }
 ?>


</section>


<?php include "footer.php";?>
  


</body>