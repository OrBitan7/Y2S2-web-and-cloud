<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
if(isset($_GET["guardian"])){
    if($_GET["guardian"]==1){
      $query="INSERT INTO dbShnkr23stud2.tbl_224_escorts (user_id,Name,Date,Location,Duration,Drone_Activate,SOS_Activate,img)
      VALUES ('".$_SESSION["user_id"]."','Ronit Shvartz','2.5.2023','Kiryat gat','2.5','0','0','images/escort_profile_1.png')";
    }else if($_GET["guardian"]==2){
        $query="INSERT INTO dbShnkr23stud2.tbl_224_escorts (user_id,Name,Date,Location,Duration,Drone_Activate,SOS_Activate,img)
        VALUES ('".$_SESSION["user_id"]."','Ayala Hasidof','1.3.2023','Tel aviv','1.5','1','1','images/escort_profile_2.png')";
    }else {
        $query="INSERT INTO dbShnkr23stud2.tbl_224_escorts (user_id,Name,Date,Location,Duration,Drone_Activate,SOS_Activate,img)
        VALUES ('".$_SESSION["user_id"]."','Avi Bokobza','20.2.2023','Raanana','0.5','1','0','images/escort_profile_3.png')";
    }
    mysqli_query($connection, $query);
    header('Location: ' . URL . 'index1.php');
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

    <title>AfraidOFF Guardian</title>
</head>

<body>
    <header>
        <div class="profile-container">
            <img src="<?php echo $_SESSION["profile_img"]; ?>" alt="Profile Image" class="profile-img-circle">
        </div>
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
            <p class="Breadcrumbs">Home/Guardian Escort</p>
        </div>

            <div class="Escort-box mt-5">
                <img src="images/escort_profile_1.png">
                    <h3 class="name my-auto ms-3">Ronit Shvartz</h3>
                <a href="Guardian.php?guardian=1" class="button-link">20 meter</a>
            </div>
            <div class="Escort-box">
                <img src="images/escort_profile_2.png">
                    <h3 class="name my-auto ms-3">Ayala Hasidof</h3>
                <a href="Guardian.php?guardian=2" class="button-link">35 meter</a>
            </div>
            <div class="Escort-box">
                <img src="images/escort_profile_3.png">
                    <h3 class="name my-auto ms-3">Amihai Bokobza</h3>
                <a href="Guardian.php?guardian=3" class="button-link">65 meter</a>
            </div>
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