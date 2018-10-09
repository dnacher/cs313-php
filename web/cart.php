<?php
    session_start();
    include('header.php');
?>

<h1>Cart Information</h1>

<?php
  if (count($_SESSION['myproducts']) == 0) {
      echo "<p>Your cart is empty</p>";
  }  
  else {
      echo "<p>You have:</p>";
      foreach ($_SESSION['myproducts'] as $value) {
          echo "<div class=\"product\">
                <h3>$value</h3>
                </div>";
      }
  }
?>

<a href="items_list.php">Go back to items</a><br>
<a href="checkout.php">Checkout</a>

<?php
   include('footer.php')
?>