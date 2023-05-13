<?php
if (isset($_GET['submit'])) {
  $city = $_GET['city'];
  $address = $_GET['Address'];
  $time = $_GET['hour'] . ':' . $_GET['minute'] . ' ' . $_GET['amOrpm'];
  $date = $_GET['dateInput'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Schedule Confirmation</title>
</head>

<body>
  <header>
        <div class="profile-container">
            <img src="images/profile_img.jpg" alt="Profile Image" class="profile-img-circle">
            <div class="green-circle"></div>
        </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navigation</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Escorts</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Help Others</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Settings</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sing Out</a>
            </div>
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.eran.org.il/">“Eran” website</a>
            </div>
        </nav>
    </header>
    <section class="wrapper"> 
  <div id="logo">
    <a href="index.html"><div class="logo-container"></div></a>
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
          <p>City: <?php echo $city; ?></p>
          <p>Address: <?php echo $address; ?></p>
          <p>Time: <?php echo $time; ?></p>
          <p>Date: <?php echo $date; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#showConfirmation').click(function() {
        $('#confirmationModal').modal('show');
      });
    });
  </script>
</body>

</html>
