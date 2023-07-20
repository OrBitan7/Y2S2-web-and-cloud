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
    $query= "SELECT D_city, COUNT(*) AS city_count
                FROM dbShnkr23stud2.tbl_224_schedule_drone
                GROUP BY D_city ORDER BY city_count DESC"; 
    $result =mysqli_query($connection, $query);
    $city_array=["Kiryat gat","Ashkelon","Tel aviv","Ramat gan","Raanana","Rishon lezion","Kiryat shmona","Kiryat arba","Bat yam"];
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

    <title>AfraidOFF Drone manage</title>
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
            <p class="Breadcrumbs">Home/Drone Manage</p>
        </div>
        <div class="cardsManage mt-5">
        <?php
        while($row = mysqli_fetch_assoc($result)){
            
    echo    '<div class="card  fluid text-bg-';
            if($row["city_count"]<5){
                echo 'success';
            }else if($row["city_count"]<10){
                echo 'warning';
            }else{
                echo 'danger';
            }
    echo        ' text-center mb-3 me-3" style="max-width: 18rem;">
                <div class="card-header text-center">Schedule Drones: </div>
                <div class="card-body">
                    <h5 class="card-title text-center">'.$row["D_city"].'</h5>
                    <p class="card-text text-center">'.$row["city_count"].'</p>';
            echo '<button type="button" onclick="location.href='."'manage.php?city=".$row["D_city"]."'".'" class="btn btn-secondary mx-5 my-1 btn-lg mt-1 rounded-pill">Manage</button>';
      echo'              
                </div>
            </div>
            ';
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