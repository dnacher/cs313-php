<?php
    session_start();
    include('header.php');
?>

<h1>We will send these items</h1>
<h2>Your order will be shipped to <?php echo htmlspecialchars($_POST["street"]); ?>!</h2>

<?php
    echo "<p>Your purchase: </p><ul>";
    foreach ($_SESSION['myproducts'] as $value) {
        echo "<li><div class=\"alert alert-primary\" role=\"alert\">$value</div></li>";
    }
    echo "</ul>";
session_destroy(); 
?>

<a href="items_list.php">Return to Shopping</a>

<?php
   include('footer.php')
?>