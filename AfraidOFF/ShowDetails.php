<?php
include 'db.php';
include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: ' . URL . 'index.php');
}
$us_id = $_SESSION["user_id"];

if (isset($_GET["escortId"])) {
    $id=$_GET["escortId"];
    $query  = "SELECT * FROM dbShnkr23stud2.tbl_224_escorts WHERE user_id=".$us_id." and id=".$id."";
    $res=mysqli_query($connection, $query);
    $row=mysqli_fetch_assoc($res);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>

    <title>AfraidOFF Escort Show Details</title>

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
            <p class="Breadcrumbs">Home/Escorts/ShowDetails</p>
        </div>
        <div class="container mt-5">
<div class="card ">
    <div class="card-header">
      Escort Details:
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Type:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php if($row["img"]=="images/drone.png") {echo' Drone Escort';}else{echo' Guardian Escort';} ?></p>
      </div>
      <div class="form-group">
        <label>Name:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php echo $row["Name"];?></p>
      </div>
      <div class="form-group">
        <label>Date:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php echo $row["Date"];?></p>
      </div>
      <div class="form-group">
        <label>Location:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php echo $row["Location"];?></p>
      </div>
      <div class="form-group">
        <label>Duration:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php echo $row["Duration"].' hours';?></p>
      </div>
      <div class="form-group">
        <label>Drone Activate:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php if($row["Drone_Activate"]==0){echo' No';}else{echo' Yes';}?></p>
      </div>
      <div class="form-group">
        <label>SOS Activate:</label>
        <p class="form-control-plaintext gray-box pl-3"><?php if($row["SOS_Activate"]==0){echo' No';}else{echo' Yes';}?></p>
      </div>
      <button type="button" onclick="location.href='index1.php?dell=<?php echo $row['id'] ;?>'" class="btn btn-outline-danger"><i class="bi bi-trash3 me-2 mr-2"></i>Delete</button>
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
</body>

</html>
<?php
  mysqli_close($connection);
?>