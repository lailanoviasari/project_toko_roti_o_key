<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O-Key Bakery</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

    <!-- begin :: CSS local -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- end :: CSS local -->

</head>

<body class="container-fluid my-3">

    <!-- begin :: navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-nav px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">O-Key</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 ">
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Manajemen CRUD
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/CRUD/product.php">Product</a></li>
                            <li><a class="dropdown-item" href="pages/CRUD/category.php">Category</a></li>
                            <li><a class="dropdown-item" href="pages/CRUD/patissier.php">Patissier</a></li>
                            <li><a class="dropdown-item" href="pages/CRUD/make_product.php">Make Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/all_product.php">All Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/about.php">About</a>
                    </li>
                </ul>
                <form class="search d-flex" role="search">
                    <input class="form me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end :: navbar -->

    <!-- begin :: header -->
    <div class="container-fluid bg-hero p-5">
        <div class="darken">
            <div id="carouselExampleCaptions" class="carousel slide d-flex" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container text-center my-5 p-5">
                            <h1 class="greeting">Welcome to <br>
                                <span>O-Key Bakery</span>
                            </h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container text-center my-5 p-5">
                            <h1 class="greeting">Lorem ipsum dolor sit.<br>
                                <span>Lorem, ipsum.</span>
                            </h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container text-center my-5 p-5">
                            <h1 class="greeting">Lorem ipsum dolor sit amet.<br>
                                <span>Lorem, ipsum dolor.</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- end :: header -->

    <!-- begin :: new product -->
    <div class="container-fluid bg-coklat p-5">
        <div class="row align-items-center px-5">
            <div class="col-9 text-center">
                <div class="row row-cols-md-2 g-4">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="col text-center">
                            <div class="card shadow mb-3" style="max-width: 540px;">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-6">
                                        <img src="assets/img/cakes-strawberry-sweet.jpg" class="card-img-top" alt="..." width="400px">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Black Forest</h5>
                                            <p class="card-text">Rp140.000</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-3">
                <div class="new-product-section text-center">
                    <h1>New Product in This Month</h1>
                    <p>With the best ingredients and made by expert patissier</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end :: new product -->

    <!-- begin :: best product -->
    <div class="container-fluid bg-nav p-5">
        <div class="best-product-section text-center">
            <h1>Our Best Seller Product</h1>
            <p>Let's choose your favorite product</p>
            <div class="scroll">
                <div class="row row-cols-md-5 row-cols-sm-4 g-4 mx-5">
                    <?php for ($i = 0; $i < 15; $i++) { ?>
                        <div class="col">
                            <div class="card shadow">
                                <img src="assets/img/cakes-blackForest.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Black Forest</h5>
                                    <p class="card-text">Rp140.000</p>
                                    <p class="card-text">Moist chocolate layers, cherry filling, whipped cream, a classic delight.</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end :: best product -->

    <div class="container-fluid bg-coklat p-5">
        <div class="row align-items-center">
            <div class="col-4 offset-1">
                <div class="form_container">
                    <div class="heading_container">
                        <h2> Contact Us </h2>
                    </div>
                    <form id="contact_us" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label label-contact-us">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="aisyiah nasibah">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label label-contact-us">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="087656764532">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label label-contact-us">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label label-contact-us">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <div class="d-flex ">
                            <button class="btn btn-second">
                                <b>SEND NOW</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 offset-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15829.766627840367!2d112.72144118389268!3d-7.304176149536146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x2dd7fb97917c2fad%3A0x21b1122d5fe174cc!2sSurabaya%20Zoo!3m2!1d-7.2959546!2d112.73660939999999!4m0!5e0!3m2!1sen!2sid!4v1699773227260!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- begin :: footer -->
    <footer class="container-fluid text-center bg-nav">
        <div class="container">
            <p>Copyright &copy; 2023 lailanoviasari. All Rights Reserved</p>
        </div>
    </footer>
    <!-- end :: footer -->

</body>

</html>