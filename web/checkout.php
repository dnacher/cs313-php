<?php
    session_start();
    include('header.php');
?>

<div class="alert alert-primary" role="alert">
  <h2>Confirm that you want to checkout these items?</h2>
</div>

<?php
  if (count($_SESSION['myproducts']) == 0) {
      echo "<p>Your cart is empty</p>";
  }  
  else {
      echo "<p>Purchase:</p><ul>";
      foreach ($_SESSION['myproducts'] as $value) {
          echo "<div class=\"alert alert-success\" role=\"alert\"><li>$value</li></div>";
      }
      echo "</ul>";
  }
?>

<?php
  if (count($_SESSION['myproducts']) != 0) {
    echo "<p>Your Cart is Empty</p>";
    // With more time, validation would be a nice feature
    echo "<div class=\"checkout\"><h1>Checkout:</h1><form action=\"confirmed.php\" method=\"post\">
        Street: <input required type=\"text\" name=\"street\"> <br>
        State: <input type=\"text\" name=\"state\"> <br>
        City: <input type=\"text\" name=\"city\"> <br>
        <input type=\"submit\" value=\"Confirm Order\">
    </form></div>";
  }
  else {
    echo "<p>You have nothing to purchase</p>";
  }
?>

<a href="cart.php">View Cart</a>
<a href="items_list.php">Continue Shopping</a>

<?php
   include('footer.php')
?>