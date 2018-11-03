<?php
  require("dbconnect.php");
  $db = get_db();

  $good = TRUE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $user = $pass = $userType = $description;
    $userError = $passError;
    
    $description = $_POST["txtDescription"];
    $userType = $_POST["cmbUserType"];

    if(empty ($_POST["txtName"])){
      $userError = "User name cannot be Empty";
      $good = FALSE;
    }else{
      $user = $_POST["txtName"];
    }

    if(empty ($_POST["txtPassword"])){
      $passError = "Password cannot be Empty";
      $good = FALSE;
    }else{
      $pass = $_POST["txtPassword"];
    }
  
    if($_POST["txtPassword"] != $_POST["txtPassword2"]){
      $passError = "Password doesn't match";
      $good = FALSE;
    }
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
            <label>Name</label> <?php if(!empty ($userError)){ echo '<div class="alert alert-danger" role="alert">' . $userError . '</div>';} ?>
            <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name of the item">
          </div>
          <div class="form-group">
            <label for="txtDescription">Description</label>
            <textarea class="form-control" id="txtDescription" name="txtDescription" placeholder="Description of the item" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="txtPassword">Password</label> <?php if(!empty ($passError)){ echo '<div class="alert alert-danger" role="alert">' . $passError . '</div>';} ?>
            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
            <label for="txtPassword2">Password</label>
            <input type="password" class="form-control" id="txtPassword2" name="txtPassword2" placeholder="Repeat Password">
          </div>
          <div class="form-group">
            <label for="cmbUserType">Author</label>
            <select class="form-control" id="cmbUserType" name="cmbUserType">
              <?php
                $statement = $db->prepare("SELECT user_type_id, name FROM user_type");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                  echo '<option  value=' .$row[user_type_id] . '>' . $row['name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <input type="submit" class="btn btn-primary" value="Add Item"><br>

          
          <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {              
              if($good){                  
                  $pass = hash('ripemd160', $pass);
                  try{  
                    $query = "INSERT INTO users (name, description, active, password,user_type_id)
                    VALUES ('$user', '$txtDescription', true, '$pass','$userType')";
                    $statement = $db->prepare($query);
                    $statement->execute();
                  }catch (Exception $ex){
                    echo "Error with DB. Details: $ex";
                    die();
                  }
                  echo '<div class="alert alert-success" role="alert">User created.</div>';
              }else{
                  echo '<div class="alert alert-danger" role="alert">there was something wrong.</div>';
              }
            }
          ?>
    </form>
  </body>
</html>