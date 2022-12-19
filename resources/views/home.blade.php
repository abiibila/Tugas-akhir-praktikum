<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareFood</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Link Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #588909;">
        <div class="container">
            <a class="navbar-brand" href="#">
                ShareFood
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-dark navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" style="color:white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user-circle" style="color:white"></i></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-bars" style="color:white"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Leaderboard</a></li>
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </nav>

    <!-- Main Page -->
    <div class="hero-image">
        <div class="container">
            <div class="row justify-content-center align-items-center inner-row">
                <div class="col-md-5">
                    <div class="form-box p-3">
                        <div class="form-title">
                            <h2 class="mb-3" style="font-family:'Playfair Display';">SHAREFOOD</h2>
                            <h6 class="mb-3" style="font-family: 'Montserrat';">Setiap Rp.10000 yang disumbangkan kami
                                gunakan untuk
                                membeli makanan kepada yang membutuhkan</h6>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="form-row text-center">
                                <div class="d-inline p-2">
                                    <button type="submit" class="btn btn-light"
                                        style="font-family:'Montserrat'; font-size: 13px;">1⠀
                                        Makanan</button>
                                    <button type="submit" class="btn btn-light"
                                        style="font-family:'Montserrat'; font-size: 13px;">5⠀
                                        Makanan</button>
                                </div>
                                <div class="d-block p-2">
                                    <button type="submit" class="btn btn-light"
                                        style="font-family:'Montserrat'; font-size: 13px;">10
                                        Makanan</button>
                                    <button type="submit" class="btn btn-light"
                                        style="font-family:'Montserrat'; font-size: 13px;">20
                                        Makanan</button>
                                </div>
                                <div class="d-grid gap-1 col-6 mx-auto">
                                    <input type="text" class="form-row text-center" placeholder="Masukkan Jumlah Lain"
                                        id="floatingInput"><label for="floatingInput"></label></input>
                                    <button type="submit" class="btn btn-warning"
                                        style="font-family:'Montserrat'; font-size: 13px; color:white; background-color:#DCB427; border-color: #DCB427;">Selanjutnya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaderboard -->
    <div class="grid-container">

        <div class="grid-child" style="background-color:#DCB427;">
            <p>LEADERBOARD</p>
            <div class="flex-container">
                <span class="satu" style="font-family:'Montserrat'; font-size: 10px; color: #588909;">SEARCH ⠀<i
                        class="fa fa-search"></i></span>
                <div class="time">
                    <span style="font-family:'Montserrat'; font-size: 10px; color: #588909;">MOST
                        RECENT</span>
                    <span style="font-family:'Montserrat'; font-size: 10px; color:#588909;">MOST
                        FOODS</span>
                </div>
            </div>

            <div class="board">
                <div class="Leader">
                    <span class="Name">Cheryl Correa</span>
                </div>

                <div class="Leader">
                    <span class="Name">Tamika Walker</span>
                </div>

                <div class="Leader">
                    <span class="Name">Judith EarnHardt</span>
                </div>

                <div class="Leader">
                    <span class="Name">Judith EarnHardt</span>
                </div>

                <div class="Leader">
                    <Span class="Name">Shawn Hanna</Span>
                </div>

            </div>

            <button class="view">VIEW EVERYONE</button>
        </div>

        <!-- Gallery -->
        <div class="grid-child" style="background-color:#DCB427;">
            <p>GALLERY</p>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/Distribute-free-food-to-the-poor-share-food-for-the-hungry-1129321635_web-1.jpg"
                            class="d-block w-100" alt="gallery">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/people-waiting-food-hungry.jpg" class="d-block w-100" alt="gallery">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/O6MVLLIEO5CPPPLO6JTKCPBC3Y.jpg" class="d-block w-100" alt="gallery">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    </div>

    <!-- Reviews -->
    <div class="containers">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/review1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/review2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/review3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <div class="contain">
        <footer class="text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-white mt-3"
                            style="font-family:'Playfair Display'; font-weight: 500; font-size: 25px;">ShareFood</h5>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-white mt-4"
                            style="font-family:'Playfair Display'; font-weight: 500; font-size: 13px;">Quick Link</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-white"
                                    style="font-family: 'Montserrat'; font-size: 13px;">Home</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white"
                                    style="font-family: 'Montserrat'; font-size: 13px;">Leaderboard</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-white mt-4" style="font-size: 15px">Address</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-white"
                                    style="font-family: 'Montserrat'; font-size: 13px;">Malang, Jawa Timur</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-white mt-4"
                            style="font-family:'Playfair Display'; font-weight: 500; font-size: 13px;">Newsletter</h5>

                        <div class="form-outline form-white mt-3">
                            <div class="news">
                                <input type="email" id="form5Example2" class="form-control"
                                    style="border-radius: 0px;">
                                <button type="submit" class="btn btn-outline-white" style="background-color:#DCB427; border-radius: 0px; color: white; font-family: 'Montserrat';" >Subscribe</button>
                            </div>

                            <label class="form-label" for="form5Example2"
                            style="color:#fff; font-family:'Montserrat'; font-size: 11px;">Your email is safe
                            with us, we don't spam.</label>

                            <h5 class="text-white mt-4"
                            style="font-family:'Playfair Display'; font-weight: 500; font-size: 13px;">Follow Us</h5>
                            <i class="fab fa-twitter" aria-hidden="true" style="color:#fff"></i>
                            <i class="fa fa-instagram" aria-hidden="true" style="color: white;"></i>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
        </footer>

    </div>
    <!-- End of .container -->
</body>

</html>