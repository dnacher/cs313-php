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
    echo "<div class=\"checkout\"><h1>Checkout:</h1><form action=\"purchase.php\" method=\"post\">
        <div class=\"container\">
        <div class=\"row\">Street: <input required type=\"text\" name=\"street\"></div> <br>
        <div class=\"row\">State: <input type=\"text\" name=\"state\"></div> <br>
        <div class=\"row\">City: <input type=\"text\" name=\"city\"></div> <br>
        <input type=\"submit\" value=\"Confirm Order\">
    </form></div>";
  }
  else {
    echo "<p>You have nothing to purchase</p>";
  }
?>

<a href="cart.php">Cart</a><br>
<a href="items_list.php">Continue Shopping</a>

<?php
   include('footer.php')
?>