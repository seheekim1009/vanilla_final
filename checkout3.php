<?php include "header.php"; ?>
<?php include_once "db_connect.php";?>
<?php
$delete = $_POST['delId'];
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

<?php 

if($delete) {
$query_string = "UPDATE `products` SET cart = 0 WHERE `id` = $delete";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

}
// $query_string = "SELECT * FROM `products` WHERE `id` IN(9,13,34)";
$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);
while($row = $result->fetch_object()){
// $amount = rand(2,7);  // amount is random
?>


<!-------------Check Out Item List -------------------->
<div class="container-checkout">
    <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-line-price">Total</label>
                <label class="product-line-price">Remove</label>
    <div>


    <div class="container-cart-item">
     <div class="item">
         <img src="image/product/<?= $row->image ?>" class="item-image">   
        <div class="item-name"><?= $row->productName ?></div>
        <div class="item-price">$<?= $row->price ?> </div>
        <div class="item-quantity"><?= $row->cart ?>
         <div class="subtotal">  $<?= ($row->price * $row->cart) ?> </div>
        <img class="item-remove-btn" src="image/remove_1.svg"> 
        <form method="post">
			<input type="submit" name="submit" value="delete">
			<input type="hidden" name="delId" value="<?= $row->id ?>">
        </form>
     </div>
    </div>

 <div>   

    <?php
}
 ?>
 
 <!--------------------- Total Checkout ----------------------->

<div class="container-total">
     <div class="total">
        <label>Subtotal</label> 
        <div class="totals-value" id="cart-subtotal"> 	$<?= $total ?> </div>
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
       <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
        <label>Grand Total</label>
         <div class="totals-value" id="cart-total">???? </div>
           <div class="btn-checkout"> Checkout </div> 
     </div>
</div>


    


</section>

  </body>