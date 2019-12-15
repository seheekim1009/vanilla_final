<html>
<?php 
include "header_product.php";  
include_once "db_connect.php";
$addtocart = $_GET['addtocart'];
if(!isset($_GET['id'])) {
	echo "You borked it";
} else {

if($_GET['addtocart']) {
	$id = $_GET['id'];
	$sql = "UPDATE products 
                SET 
                  cart = '$addtocart'              
                WHERE 
                  id = $id";
                
       if (mysqli_query($conn, $sql)) {
          echo "";
       } else {
          echo "Error updating record: " . mysqli_error($conn);
       }
       // mysqli_close($conn);
} 
?>


<body>

<div class="page-wrapper">
<?php include "navigation.php";
include "navbar.php";?>


<?php 



$query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
$result = $conn->query($query_string);

	$query = "SELECT * FROM `products` WHERE `cart` > 0";
	$cart_result = $conn->query($query);

	if($conn->errno) die($conn->error);

	$row = $result->fetch_object();

	// the explode function makes an array
	// $exploded_images = explode(",",$row->image);

	// show the data after it's all ready
    ?>
   


<section id="single-product" class="section-single-product">
<div class="container-item">
    <div class="item-photo"><img src="image/product/<?= $row->image ?>"></div>
    
    <div class="item-box">
        <div class="item-name"> <h1><?= $row->productName ?></h1></div>
        <div class="label-desc">Description</div>
        <div class="item-description"><?= $row->description ?></div>
        <div class="label-item-detail">Details</div>
        <ul class="item-info-row">
         <li class="item-info-color"><?= $row->color ?></li>
         <li class="item-info-size"><?= $row->sizes ?></li>
        <li class="item-info-material"><?= $row->Material ?></li>
        </ul>  
        <div class="label-item-price">Cost</div>
        <div class="item-price"><div class="price">$<?= $row->price ?></div> </div>
        <div class="label-quantity">Quantity</div>
        <div class="add-to-cart">
          <form method="get">
		  <select name="addtocart" id="add-to-cart-text">
		    <option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		  </select>
		  <input type="hidden" value="<?= $row->id ?>" name="id">
		  <input id="add-to-cart-button" type="submit" value="Add to Cart">
		</form> 
        </div> 
     

    <div> 
    </div>    
    <!-- <a href="product_list.php">Back</a> -->

   
    <?php 
        }?>


</section>

  <?php include "footer.php";?>


</body>
</html>
