<head>
  <meta charset="UTF-8">
  <title>Vanilla Dream</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navigation.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/subscription.css">
  <link rel="stylesheet" href="css/shop.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/footer.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/hamburger.js"></script>
  <script src="js/util.js"></script>
  <script src="js/items.js"></script>
  <script src="js/search.js"></script>
  <script src="js/product.js"></script>
  <script>
    $(function () {
      const index = getUrlParameter('index');
      initialize(index);
      addCartEvent();
      $('.cart-wrapper').click(function () {
        const number = parseInt($('#cart-num').html());
        window.location.href = `checkout.html?index=${index}&number=${number}`
      })
    })
  </script>
</head>