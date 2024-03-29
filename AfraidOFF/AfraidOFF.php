<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
$us_id = $_SESSION["user_id"];
if(isset($_POST['submit'])){
    $cityNEW = $_POST['city'];
    $addressNEW = $_POST['Address'];
    $hourNEW=$_POST['hour'];
    $minuteNEW=$_POST['minute'];
    $amOrpmNEW=$_POST['amOrpm'];
    $dateNEW=$_POST['dateInput'];
    $timeNEW = $_POST['hour'] . ':' . $_POST['minute'] . ' ' . $_POST['amOrpm'];
}
if (isset($_POST['progid'])&& $_POST['progid']!=0) {
        $query = "UPDATE tbl_224_schedule_drone SET D_city='".$cityNEW."',D_address='".$addressNEW."',D_hour='".$hourNEW."',D_minute='".$minuteNEW."',D_am_pm='".$amOrpmNEW."',D_date='".$dateNEW."' 
        WHERE D_id=".$_POST["progid"];  
    if (!mysqli_query($connection, $query)) {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}
else{
    if (isset($_POST['submit'])) {
        $query  = "INSERT INTO dbShnkr23stud2.tbl_224_schedule_drone (user_id,D_city,D_address,D_hour,D_minute,D_am_pm,D_date)
                   VALUES ('".$_SESSION["user_id"]."','".$cityNEW."','".$addressNEW."','".$hourNEW."','".$minuteNEW."','".$amOrpmNEW."','".$dateNEW."') ";
        if (!mysqli_query($connection, $query)) {
            echo "Error inserting data: " . mysqli_error($connection);
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
    <title>AfraidOFF Schedule Confirmation</title>
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
        <div class="container mt-5">
            <h2>Escort successfully scheduled!</h2><br>
            <div class="col-3">
                <button id="showConfirmation" class="btn btn-primary">Show Details</button>
            </div>
        </div>

        <div id="confirmationModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Schedule Details:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>City:
                            <?php echo $cityNEW; ?>
                        </p>
                        <p>Address:
                            <?php echo $addressNEW; ?>
                        </p>
                        <p>Time:
                            <?php echo $timeNEW; ?>
                        </p>
                        <p>Date:
                            <?php echo $dateNEW; ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#showConfirmation').click(function () {
                $('#confirmationModal').modal('show');
            });
        });
    </script>
</body>

</html>
<?php
  mysqli_close($connection);
?>