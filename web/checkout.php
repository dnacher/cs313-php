<?php
    // Start the session
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    include('header.php');
?>

<h2>Confirm that you want to checkout these items?</h2>

<?php
  if (count($_SESSION['myproducts']) == 0) {
      echo "<p>Your cart is empty</p>";
  }  
  else {
      echo "<p>You have:</p><ul>";
      foreach ($_SESSION['myproducts'] as $value) {
          echo "<li>$value</li>";
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