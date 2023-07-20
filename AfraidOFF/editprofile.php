<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
else{
    $query= "SELECT * FROM dbShnkr23stud2.tbl_224_users WHERE id=".$_SESSION["user_id"]; 
    $res=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($res);
}
if(isset($_POST['submit'])){
    $query = "UPDATE dbShnkr23stud2.tbl_224_users SET fullname='".$_POST["fullnameNEW"]."',password='".$_POST["passwordNEW"]."',email='".$_POST["emailNEW"]."',city='".$_POST["cityNEW"]."',phone='".$_POST["phoneNEW"]."',img='".$_POST["imgNEW"]."' WHERE id=".$_SESSION["user_id"];
    mysqli_query($connection, $query);
    header('Location: ' . URL . 'index.php');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>

    <title>AfraidOFF Edit profile</title>
</head>

<body>
    <header>
        <div class="profile-container">
            <img src="<?php echo $_SESSION["profile_img"]; ?>" alt="Profile Image" class="profile-img-circle">
        </div>
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list mx-3"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                <a class="navbar-brand" href="#"><i class="bi bi-shield-shaded me-2 mr-2"></i>Help Others</a>

                </li>
                <li>
                <a class="navbar-brand" href="editprofile.php"><i class="bi bi-gear me-2"></i>Edit Profile</a>

                </li>
                <li>
                <a class="navbar-brand" href="index.php?logout=1"><i class="bi bi-box-arrow-in-left me-2 mr-2"></i>Sing Out</a>

                </li>
                <li>
                <a class="navbar-brand" href="https://www.eran.org.il/"><i class="bi bi-globe2 me-2 mr-2"></i>“Eran” website</a>

                </li>
                
            </ul>
        </div>
        <nav class="navbar bg-body-tertiary" id="navbarCollapse">
            <div class="container-fluid delcontainer ">
                <a class="navbar-brand text-light" href="index.php"><b class=""><i class="bi bi-house-door me-2"></i>Home</b></a>
            </div>
            <div class="container-fluid delcontainer">
                <a class="navbar-brand" href="#"><i class="bi bi-cursor-fill me-2 mr-2"></i>Navigation</a>
            </div>
            <div class="container-fluid delcontainer">
                <a class="navbar-brand" href="Escorts.php"><i class="bi bi-clock-history me-2 mr-2"></i>Escorts</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-shield-shaded me-2 mr-2"></i>Help Others</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="editprofile.php"><i class="bi bi-gear me-2"></i>Edit Profile</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?logout=1"><i class="bi bi-box-arrow-in-left me-2 mr-2"></i>Sing Out</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.eran.org.il/"><i class="bi bi-globe2 me-2 mr-2"></i>“Eran” website</a>
            </div>
        </nav>

    </header>
    <section class="wrapper">
        <div id="logo">
            <div class="d-flex justify-content-center">
            <a  href="index.php">
                <img  src="images/LOGO.png">
            </a>
            </div>
            <p class="Breadcrumbs">Edit profile</p>
        </div>
        <form action="#" method="POST" autocomplete="on">
            Full Name:<br>
            <input type="text" name="fullnameNEW" class="form-control" placeholder="enter new full name" value="<?php if(isset($_SESSION["user_id"])){ echo $row["fullname"];}  ?>"
                required><br>
            Email:<br>
            <input type="email" name="emailNEW" class="form-control" placeholder="enter new email" value="<?php if(isset($_SESSION["user_id"])){ echo $row["email"];}  ?>"
                required><br>
            Password:<br>
            <input type="text" name="passwordNEW" class="form-control" placeholder="enter new password" value="<?php if(isset($_SESSION["user_id"])){ echo $row["password"];}  ?>"
                required><br>
            City:<br>
            <input type="text" name="cityNEW" class="form-control" placeholder="enter new city" value="<?php if(isset($_SESSION["user_id"])){ echo $row["city"];}  ?>"
                required><br>
            Phone:<br>
            <input type="text" name="phoneNEW" class="form-control" placeholder="enter new phone" value="<?php if(isset($_SESSION["user_id"])){ echo $row["phone"];}  ?>"
                required><br>
            img URL:<br>
            <input type="text" name="imgNEW" class="form-control" placeholder="enter new img url" value="<?php if(isset($_SESSION["user_id"])){ echo $row["img"];}  ?>"
                required><br>
            <br>
            <input type="submit" class="btn btn-primary" name="submit" value="Save ">
            
        </form>
        <button type="submit"  onclick="location.href='index1.php'" class="btn btn-outline-danger cancelbtn my-2"><i class="bi bi-x-square me-1 mr-1"></i>Cancel</button>
        
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 third">
                    <a href="Escorts.php">
                        <img class="bl" src="images/escorts_icon.png">
                        Escorts
                    </a>
                </div>
                <div class="col-md-4 third">
                    <a href="index.php">
                        <img class="bl" src="images/home_icon.png">
                        Home
                    </a>
                </div>
                <div class="col-md-4 third">
                    <a href="#">
                        <img class="bl" src="images/navigation_icon.png">
                        Navigation
                    </a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
<?php
  mysqli_close($connection);
?>