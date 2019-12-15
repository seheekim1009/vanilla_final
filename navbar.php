<?php
include_once "db_connect.php";
$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);
if ($conn->errno) {
    die($conn->error);
}

$cart_total = 0;
while ($row = $result->fetch_object()) {
    $cart_total += $row->cart;
}
?>

<section id="header" class="home-section">
    <div class="container-navbar">
        <div class="burger-wrap" id="hamburger">
            <img src="image/hamburger.png" class="hamburger" alt="logo">
        </div>
        <a href="index.php" class="logo-wrap">
            <img src="image/logosmall.svg" class="logo" alt="logo">
        </a>
        <div class="nav-icons-wrapper">
            <div class="search-field-trigger">
                <img src="image/search_icon.svg" class="search-icon" alt="search">
            </div>
            <a href="checkout.php" class="cart-wrapper">
                <img src="image/cart.svg" class="cart-icon" alt="cart">
            </a>
            <div class="cart-num-wrapper">
                <div id="cart-num"><?=$cart_total?></div>
            </div>
        </div>
    </div>
</section>
<div id="search-container">
    <div class="search-field">
        <input id="search" class="search-field-input" type="text" placeholder="search..">
        <div id="search-button">search</div>
    </div>
</div>