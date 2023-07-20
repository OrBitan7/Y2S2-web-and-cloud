<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
if($_SESSION["user_type"]!="admin"){
    header('Location: ' . URL . 'index.php');
}
if(isset($_GET["dellid"])){
    $query="DELETE FROM dbShnkr23stud2.tbl_224_schedule_drone WHERE D_id=".$_GET['dellid']; 
    mysqli_query($connection, $query);
}
if(isset($_GET["city"])){
    $query= "SELECT * FROM dbShnkr23stud2.tbl_224_schedule_drone AS drones INNER JOIN dbShnkr23stud2.tbl_224_users AS users
        WHERE D_city='".$_GET["city"]."'and drones.user_id=users.id"; 
    $result =mysqli_query($connection, $query);
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

    <title>AfraidOFF Drone manage city</title>
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
            <p class="Breadcrumbs">Home/Drone Manage/Manage</p>
        </div>
        <h1 class="text-center mt-4">Drones at :<?php echo $_GET["city"];?></h1>
        <div class=" d-flex flex-column align-items-center mt-5">
        <?php
        while($row = mysqli_fetch_assoc($result)){
            
        echo '<div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>'.$row["fullname"].'</li>
                    <li class="list-group-item"><b>Addres: </b>'.$row["D_address"].'</li>
                    <li class="list-group-item"><b>Date: </b>'.$row["D_date"].'</li>
                    <li class="list-group-item"><b>Time: </b>'.$row["D_hour"].':'.$row["D_minute"].' '.$row["D_am_pm"].'</li>
                </ul>
                <div class="card-footer d-flex flex-column align-items-center">';
        echo        '<button type="button" onclick="location.href='."'manage.php?city=".$_GET["city"]."&dellid=".$row["D_id"]."'".'" class="btn btn-secondary mx-5 btn-lg mt-1 rounded-pill"><i class="bi bi-trash3 me-2 mr-2"></i>Cancle</button>';
        echo    '</div>
            </div>';

        }
        ?>
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