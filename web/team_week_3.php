<!DOCTYPE HTML>  
<html>
<head>
    <title>Team 7 Week 3</title>
    <style> 
        .error {
            color:red;
        }
        </style>
</head>
<body>  
    
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $majorErr = "";
$name = $email = $major = $comment = "";
$cb1 = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["major"])) {
    $majorErr = "Major is required";
  } else {
    $major = test_input($_POST["major"]);
  }
  
  $cb1 = $_POST["cb1"];
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="major" <?php if (isset($major) && $major=="comp sci") echo "checked";?> value="comp sci">comp sci
  <input type="radio" name="major" <?php if (isset($major) && $major=="web design") echo "checked";?> value="web design">web design
  <input type="radio" name="major" <?php if (isset($major) && $major=="computer IT") echo "checked";?> value="computer IT">computer IT
  <input type="radio" name="major" <?php if (isset($major) && $major=="computer Engineer") echo "checked";?> value="computer Engineer">computer Engineer
    <span class="error">* <?php echo $majorErr;?></span>
  <br><br>
  <input type="checkbox" value="NA" name="cb1[]" <?php if (isset($cb1) && in_array("NA", $cb1)) echo "checked";?> >North America<br>
<input type="checkbox" value="SA" name="cb1[]" <?php if (isset($cb1) && in_array("SA", $cb1)) echo "checked";?> >South America<br>
<input type="checkbox" value="E" name="cb1[]" <?php if (isset($cb1) && in_array("E", $cb1)) echo "checked";?> >Europe<br>

  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo "<a href='mailto:$email'>$email</a>";
echo "<br>";
echo $comment;
echo "<br>";
echo $major;
echo "<br>";

foreach ($cb1 as $value) {
    echo $value . "<br>";
    
}

?>    
    
</body>
</html>