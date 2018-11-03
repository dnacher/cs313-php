<?php
  require("dbconnect.php");
  $db = get_db();

  $user = $pass = "";
  $userError = $passError = "";
  $good = TRUE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      error_log("doing POST");
      
      if (empty($_POST["txtName"])) {
          $userErr = "User is required";
          $good = FALSE;
      } else {
          $user = fix_input($_POST["user"]);        
      }
      if (empty($_POST["txtPassword"])) {
          $passErr = "Pass is required";
          $good = FALSE;
      } else {
          $pass = fix_input($_POST["pass"]);        
      }
      if (empty($_POST["txtPassword2"])) {
          $passErr = "Pass2 is required";
          $good = FALSE;
      } else{
        if($_POST["txtPassword"] =! $_POST["txtPassword2"]){
          $passErr = "Your password must match";
          $good = FALSE;
        }
      }
      $userType = $_POST[""];

      
      if ( $good ) {
          error_log("logging user in.");
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $query = "insert into users (name, pass) values (:name, :pass)";
          try {
              error_log("starting add");
              $stmt = $db->prepare($query);
              if ($stmt->execute(array($user,$hash))) {
                  error_log("Add success!");
                  header('Location: ./week7TeamLogin.php');
                  die();
              } else { 
                  error_log("add fail!");
                  $loginErr = "There was a problem logging in.  Check you user and pass and try again...";
              }
          } catch (PDOException $ex) {
              $loginError = "Error logging in.";
              error_log("Error logging in: " . $ex->getMessage());
              $good = FALSE;
          }
      } 
  }
  function fix_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Insert Item Type</title>
    <link rel="stylesheet" href="/library/css/style.css">

    <!-- BEGIN bootstrap -->     
    <link rel="stylesheet" href="/library/css/bootstrap.min.css">
    <link rel="stylesheet" href="/library/js/bootstrap.min.js">
    <!-- END   bootstrap -->
    <script src="/library/js/js.js"></script>
  </head>

  <body>
    <h2>Item Type</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name of the item">
          </div>
          <div class="form-group">
            <label for="txtPassword">Password</label>
            <input type="password" class="form-control" id="txtPassword" placeholder="Password">
            <label for="txtPassword2">Password</label>
            <input type="password" class="form-control" id="txtPassword2" placeholder="Repeat Password">
          </div>
          <input type="submit" value="Add Item">
          <div class="form-group">
            <label for="cmbAuthor">Author</label>
            <select class="form-control" id="cmbAuthor" name="cmbAuthor">
              <?php
                $statement = $db->prepare("SELECT user_type_id, name FROM user_type");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                  echo '<option  value=' .$row[user_type_id] . '>' . $row['name'] . '</option>';
                }
              ?>
            </select>
          </div>
    </form>
  </body>
</html>