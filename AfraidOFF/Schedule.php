<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
if(isset($_GET['progid'])){
    $query= "SELECT * FROM dbShnkr23stud2.tbl_224_schedule_drone WHERE D_id='".$_GET['progid']."'"; 
    $res=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($res);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>

    <title>AfraidOFF Schedule</title>
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
                <a class="navbar-brand text-light" href="index.php"><b><i class="bi bi-house-door me-2 mr-2"></i>Home</b></a>
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
            <p class="Breadcrumbs">Home/Schedule</p>
        </div>
        <!--  http://se.shenkar.ac.il/students/2022-2023/web1/dev_224/AfraidOFF.php-->
        <form action="http://se.shenkar.ac.il/students/2022-2023/web1/dev_224/AfraidOFF.php" method="POST" autocomplete="on">
            City:<br>
            <select name="city" id="selectFromJson"class="form-select" aria-label="Default select example">
            </select><br>
            Address:<br>
            <input type="text" name="Address" class="form-control" placeholder="enter the address" value="<?php if(isset($_GET['progid'])){ echo $row["D_address"];}  ?>"
                required><br>
            Time:<br>
            <div class="input-group">
                <input type="number" class="form-control" placeholder="hour:" name="hour" pattern="[1-12]{1,2}" min="1"
                    max="12" value="<?php if(isset($_GET['progid'])){ echo $row["D_hour"];}  ?>" required>
                <input type="number" class="form-control" placeholder="minute:" name="minute" pattern="[0-59]{1,2}"
                    min="0" max="59" value="<?php if(isset($_GET['progid'])){ echo $row["D_minute"];}  ?>" required>
                <input type="radio" class="btn-check" id="btnradio1" name="amOrpm" value="AM" autocomplete="off"
                    required>
                <label class="btn btn-outline-primary text-primary-emphasis border-black" for="btnradio1"><b>AM</b></label>
                <input type="radio" class="btn-check" id="btnradio2" name="amOrpm" value="PM" autocomplete="off"
                    required>
                <label class="btn btn-outline-primary text-primary-emphasis border-black" for="btnradio2"><b>PM</b></label>
            </div><br>
            <div class="form-group">
                <label for="dateInput">Select Date:</label>
                <input type="date" name="dateInput" value="<?php if(isset($_GET['progid'])){ echo $row["D_date"];}  ?>" class="form-control" min="" required>
            </div>
            <input type="hidden" id="progid" name="progid" value="<?php if(isset($_GET['progid'])){ echo $_GET['progid'];}else{echo"0";}?>">
            <input type="submit" class="btn btn-primary" name="submit" value="Click to Schedule">
        </form>
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