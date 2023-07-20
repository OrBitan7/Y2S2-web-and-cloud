<?php
    include 'db.php';
    include 'config.php';
    session_start();


    if(!empty($_POST["EmailNEW"])) { // true if form was submitted
        $query  = "SELECT * FROM tbl_224_users WHERE email='" 
        .$_POST["EmailNEW"] 
        ."'";
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result);

        if(is_array($row)) {
            $message = "This Email alredy have an acount."; // can't start echo if header comes after it
        } 
        else {
            $query  = "INSERT INTO dbShnkr23stud2.tbl_224_users (fullname,password,email,city,phone,type)
            VALUES ('".$_POST["fullnameNEW"]."','".$_POST["PasswordNEW"]."','".$_POST["EmailNEW"]."','".$_POST["CityNEW"]."','".$_POST["PhoneNEW"]."','user')";
            if (!mysqli_query($connection, $query)) {
                echo "Error inserting data: " . mysqli_error($connection);
            }
            header('Location: ' . URL . 'index1.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
        <title>AfraidOFF Sign Up</title>
</head>
<body >
<div>
    <div id="logo" class="container-fliud">
            <div class="d-flex justify-content-center">
            <a  href="index.php">
                <img  src="images/LOGO.png">
            </a>
            </div>
    </div>
    <div class="container text-center">
           <h1 class="my-3">Sing up:</h1>
           <form action="#" method="post" id="frm">
               <div class="form-group">
                   <label for="fullnameNEW">Full name: </label>
                   <input type="test" required class="form-control" name="fullnameNEW" id="fullnameNEW"  placeholder="Full name:">
               </div>
               <div class="form-group">
                   <label for="CityNEW">City: </label>
                   <input type="test" required class="form-control" name="CityNEW" id="CityNEW"  placeholder="City:">
               </div>
               <div class="form-group">
                   <label for="PhoneNEW">Phone: </label>
                   <input type="test"  required class="form-control" name="PhoneNEW" id="PhoneNEW" placeholder="Phone:">
               </div>
               <div class="form-group">
                   <label for="EmailNEW">Email: </label>
                   <input type="email" required class="form-control" name="EmailNEW" id="EmailNEW" placeholder="email:">
               </div>
               <div class="form-group">
                   <label for="PasswordNEW">Password: </label>
                   <input type="password" required class="form-control" name="PasswordNEW" id="PasswordNEW" placeholder="Password">
               </div>
               <br>
               <div class="error-message text-danger"><?php if(isset($message)) { echo $message; } ?></div>   
               <br>
               <button type="submit" class="btn btn-primary">Sign up</button>
          </form>
          <button type="submit" onclick="location.href='index.php'" class="btn btn-outline-danger mt-3 mb-5"><i class="bi bi-trash3 me-1 mr-1"></i>Cancel</button>

 	   </div>
</div>
</body>
</html>
<?php
  mysqli_close($connection);
?>