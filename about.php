<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HighTech - IT Solutions Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>South Konawe, Kendari</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>bungipermai@gmail.com</small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div>
                    <div class="top-link">
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Bungi<span class="text-secondary">Village</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php?id_uraian=1" class="nav-item nav-link">Geographical</a>
                            <a href="about.php?id_uraian=2" class="nav-item nav-link">Population</a>
                            <a href="about.php?id_uraian=3" class="nav-item nav-link">Potency</a>
                            <a href="about.php?id_uraian=4" class="nav-item nav-link">Investment</a>
                            <a href="about.php?id_uraian=5" class="nav-item nav-link">Marketing</a>
                            <a href="about.php?id_uraian=6" class="nav-item nav-link">Resident</a>
                            <a href="about.php?id_uraian=9" class="nav-item nav-link">District</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">BUNGIN PERMAI VILLAGE</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <?php
            $con=mysqli_connect("localhost","root","","desa_bungi");
        ?>
        <!-- About Start -->
        <?php
            $id_uraian=$_GET['id_uraian'];
            $sql="SELECT * FROM uraian WHERE id_uraian=$id_uraian ";
            $hasil=mysqli_query($con,$sql);
            $data=mysqli_fetch_row($hasil);
        ?>	
        <div class="container-fluid py-5 my-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                        <?php echo "<img src='assets/img/dummies/$data[4]' class='img-fluid w-75 rounded'  style='margin-bottom: 25%;'alt=''/>";?>
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <?php echo "<img src='assets/img/dummies/$data[4]' class='img-fluid w-100 rounded' alt=''/>";?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">Further Explanation</h5>
                        <h1 ><?php echo $data[1] ?></h1>
                        <p ><?php echo $data[3] ?></p>
                        <a href="index.php" style="background: #0fffc3; /* Warna latar belakang */
    border-radius: 30px;
    color: #fff; /* Warna teks */
    font-family: 'futura_ltbold', sans-serif;
    font-size: 16px;
    padding: 10px 20px;
    text-transform: uppercase;
    border: 1px solid transparent; /* Border transparan */
    text-decoration: none; /* Menghapus dekorasi tautan bawaan */
    display: inline-block; /* Membuat tautan berperilaku seperti blok */
    margin-top: 10px; /* Memberi jarak dari atas */
">Back</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->





        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">Bungi<span class="text-secondary">Village</span> </h1>
                        </a>
                        <p class="mt-4 text-light">Bungi Village, established in 1979, underwent transformations in governance, education, economy, healthcare, and social sectors, benefiting its residents. </p>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Short Link</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="index.html" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                            <a href="about.php?id_uraian=1" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Geographical</a>
                            <a href="about.php?id_uraian=2" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Population</a>
                            <a href="about.php?id_uraian=3" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Potency</a>
                            <a href="about.php?id_uraian=4" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Investment</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Help Link</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="about.php?id_uraian=5" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Marketing</a>
                            <a href="about.php?id_uraian=6" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Resident</a>
                            <a href="about.php?id_uraian=9" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>District</a>
                            <a href="contact.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Contact Us</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> South Konawe, Kendari, INA</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +123 456 7890</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> bungipermai@gmail.com</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Bungi Permai</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>