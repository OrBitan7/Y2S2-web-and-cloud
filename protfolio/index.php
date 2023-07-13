<?php
  include "config.php";
  $query = "SELECT * FROM portfolioSh.protfolio_orbitan";
  $result = mysqli_query($connection , $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Or Bitan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Or Bitan</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/OrBitan7?tab=repositories" target="_blank" class="github"><i
              class="bx bxl-github"></i></a>
          <a href="https://www.facebook.com/or.bitan.5?mibextid=LQQJ4d" target="_blank" class="facebook"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/orbitan77?igshid=MmIzYWVlNDQ5Yg==" target="_blank" class="instagram"><i
              class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/or-bitan-b3b8a0223" target="_blank" class="linkedin"><i
              class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
              <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Or Bitan</h1>
      <p><span class="typed" data-typed-items="Software Engineering,Passion For Learning,Highly Motivated"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Software Engineering Student</h3>
            <p>
              Hi my name is Or Bitan,<br><br>
              I am full of motivation, desire, and willingness to expand
              My knowledge and I am looking for a job in software development.<br>
              Fast learner and determined, I always love a good challange and thrive to success.<br>
              Second-year software engineering student in Shenkar college.<br>
              I was on the dean's honors list in my first year of studies.<br><br>
              I approach every task with a strong sense of responsibility and a relentless desire to learn. <br>
              My ability to quickly grasp new concepts and adapt to new technologies sets me apart. With exceptional
              social skills,
              I thrive in collaborative environments and can effectively communicate complex ideas.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Tel aviv/Kiryat gat,
                      Israel</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <!-- <p>
            </p> add in the future-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">C++ <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>


          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">C <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SQL <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <div class="text-center"><a href="cv.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg">
            Click here to see my CV</button></a></div>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>some of my projects are listed below, for more projects please visit my github page.</p>
        </div>
        <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" style="position: relative; height: 740.952px;">

        <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100"> -->
<?php
  while($row = mysqli_fetch_assoc($result))
  {
   echo' <div class="col-lg-4 col-md-6 portfolio-item filter-web">';
   echo' <div class="portfolio-wrap">';
   echo' <img src="'.$row["img"].'" class="img-fluid" alt="">';
   echo' <div class="portfolio-links">';
   echo' <a href="'.$row["github_url"].'" title="GitHub"><i class="bx bxl-github"></i></a>';
   echo' <a href="'.$row["project_url"].'" title="More Details"><i class="bx bx-link"></i></a>';
   echo' </div>';
   echo' </div>';
   echo' </div>';
  }
?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="col-lg-5 align-items-stretch">
          <div class="row" data-aos="fade-in">
            <div class="info">

              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>orbitan77@gmail.com</p>

              <i class="bx bx-share-alt"></i>
              <h4>Social Profiles:</h4>
              <div class="mt-3 text-center">
                <a href="https://github.com/OrBitan7?tab=repositories" target="_blank" class="github"><i
                    class="bx bxl-github"></i></a>
                <a href="https://www.facebook.com/or.bitan.5?mibextid=LQQJ4d" target="_blank" class="facebook"><i
                    class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/orbitan77?igshid=MmIzYWVlNDQ5Yg==" target="_blank" class="instagram"><i
                    class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/or-bitan-b3b8a0223" target="_blank" class="linkedin"><i
                    class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
      <div class="credits">
        <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה
          בשנקר</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
  mysqli_close($connection);
?>