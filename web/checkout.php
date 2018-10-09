<?php
    session_start();
    include('header.php');
?>

<h2>Are you sure you want these items?</h2>

<?php
  if (count($_SESSION['myproducts']) == 0) {
      echo "<p>Your cart is empty</p>";
  }  
  else {
      echo "<p>You have:</p><ul>";
      foreach ($_SESSION['myproducts'] as $value) {
          echo "<div class="alert alert-primary" role="alert"><li>$value</li></div>";
      }
      echo "</ul>";
  }
?>

<?php
  if (count($_SESSION['myproducts']) != 0) {
    echo "<p><div class=\"alert alert-success\" role=\"alert\">Your Cart is Empty</div></p>";
    echo "<div class=\"checkout\"><h1>Checkout:</h1><form action=\"confirmed.php\" method=\"post\">
        Street: <input required type=\"text\" name=\"street\"> <br>               
        State: <input type=\"text\" name=\"state\"> <br>
        City: <input type=\"text\" name=\"city\"> <br>
        <input type=\"submit\" value=\"Confirm\">
    </form></div>";
  }
  else {
    echo "<p>You have nothing to purchase</p>";
  }
?>

<a href="cart.php">View Cart</a>
<a href="browse.php">Continue Shopping</a>

<?php
   include('footer.php')
?>