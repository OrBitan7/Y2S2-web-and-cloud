<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
if(isset($_GET['dell'])){
    $query= "DELETE FROM dbShnkr23stud2.tbl_224_schedule_drone WHERE D_id=".$_GET['dell']; 
    mysqli_query($connection, $query);
}
if(!isset($_GET['flag'])){
    $celected = 1;
}
else{
    $celected = $_GET['flag'];
}
if($celected==1){
    $query  = "SELECT * FROM dbShnkr23stud2.tbl_224_escorts WHERE user_id='" 
        . $_SESSION["user_id"] . "' order by 'Date' ";
}
else{
    $query  = "SELECT * FROM dbShnkr23stud2.tbl_224_schedule_drone WHERE user_id='" 
        . $_SESSION["user_id"] . "' order by 'Date'";
}
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>

    <title>AfraidOFF Escorts</title>
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
            <div class="container-fluid delcontainer">
                <a class="navbar-brand" href="index.php"><i class="bi bi-house-door me-2 mr-2"></i>Home</a>
            </div>
            <div class="container-fluid delcontainer">
                <a class="navbar-brand" href="#"><i class="bi bi-cursor-fill me-2 mr-2"></i>Navigation</a>
            </div>
            <div class="container-fluid delcontainer">
                <a class="navbar-brand text-light" href="Escorts.php"><b><i class="bi bi-clock-history me-2 mr-2"></i>Escorts</b></a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-shield-shaded me-2 mr-2"></i>Help Others</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="editprofile.php"><i class="bi bi-gear me-2 mr-2"></i>Edit Profile</a>
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
            <p class="Breadcrumbs">Home/Escorts</p>
        </div>
        <?php
        if($celected == 1){
        echo '<div class="container d-flex justify-content-center mb-4 mt-4">
        <ul class="nav nav-pills col-10 d-flex justify-content-center">
        <li class="nav-item col-6 text-center">
            <a class="nav-link text-black ms-auto active mx-auto" aria-current="page" href="Escorts.php?flag=1">Escorts</a>
        </li>
        <li class="nav-item col-6 text-center">
            <a class="nav-link text-black" href="Escorts.php?flag=2">Drone Schedule</a>
        </li>
        </ul>
        </div>';
        }
        else{
            echo '<div class="container d-flex justify-content-center mb-4 mt-4">
            <ul class="nav nav-pills col-10 d-flex justify-content-center">
            <li class="nav-item col-6 text-center">
                <a class="nav-link text-black ms-auto" aria-current="page" href="Escorts.php?flag=1">Escorts</a>
            </li>
            <li class="nav-item col-6 text-center">
                <a class="nav-link active text-black mx-auto" href="Escorts.php?flag=2">Drone Schedule</a>
            </li>
            </ul>
            </div>';
        }
        ?>
        
            <div class="row justify-content-center mb-4">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <?php
            if($celected == 1){
                echo '<div id="Escorts-container">';
                while($row = mysqli_fetch_assoc($result)){
                    echo'<div class="Escort-box">';
                    echo'<img src="'.$row["img"].'">';
                    echo'<div class="name-and-date">';
                    echo'<h5 class="name">'.$row["Name"].'</h5>';
                    echo'<h6 class="date">'.$row["Date"].'</h6>';
                    echo'</div>';
                    echo'<a href="ShowDetails.php?escortId='.$row["id"].'" class="button-link">show details</a>';
                    echo'</div>';
                }
                echo'</div>';
            }
            else{
                echo'<div class="container col-10 d-flex flex-column align-items-center">';
                while($row = mysqli_fetch_assoc($result)){
                    echo'    <div class="card text-center mb-3 col-10">';
                    echo'        <div class="card-header">';
                    echo'            Drone schedule';
                    echo'        </div>';
                    echo'        <div class="card-body">';
                    echo'            <h5 class="card-title">Drone will be wating at <br>'.$row["D_city"].' '.$row["D_address"];
                    echo'            <p class="card-text">'.$row["D_date"].' '.$row["D_hour"].':'.$row["D_minute"].' '.$row["D_am_pm"].'</p>';
                    echo'            <a href="Schedule.php?progid='.$row["D_id"].'"><button type="button" class="btn btn-outline-secondary"><i class="bi bi-pencil-fill me-2 mr-2"></i>Edit  </button></a>';
                    echo'            <a href="Escorts.php?flag=2&dell='.$row["D_id"].'"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3 me-1 mr-1"></i>Cancel</button></a>';
                    echo'        </div>';
                    echo'    </div>';

                }
                echo'</div>';
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
        </div>
    </footer>
</body>

</html>
<?php
  mysqli_close($connection);
?>