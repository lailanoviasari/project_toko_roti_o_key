<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Product - O-Key Bakery</title>

  <!-- begin :: CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- end :: CDN Bootstrap -->

  <!-- begin :: CSS local -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- end :: CSS local -->

</head>

<body>

  <!-- begin :: navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-nav px-3 sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">O-Key</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 ">
          <li class="nav-item active">
            <a class="nav-link active" href="../index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manajemen CRUD
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="CRUD/product.php">Product</a></li>
              <li><a class="dropdown-item" href="CRUD/category.php">Category</a></li>
              <li><a class="dropdown-item" href="CRUD/patissier.php">Patissier</a></li>
              <li><a class="dropdown-item" href="CRUD/make_product.php">Make Product</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all_product.php">All Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
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

  <!-- begin :: category product -->
  <section id="category_product" class="container-fluid bg-coklat p-5">
    <div class="text-center">
      <h1 class="text-second">Product Category</h1>
    </div>
    <div class="overflow-auto">
      <div class="row row-cols-md-6 row-cols-sm-3 g-4 text-center mx-5 my-3">
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/4532579.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">All</h5>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/bread.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Breads</h5>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/donat.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Doughnats</h5>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/pudding.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Pudding</h5>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/cake.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Cakes</h5>
            </div>
          </div>
        </a>
        <a href="#" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/roll_cakes.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Roll Cakes</h5>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- end :: category product -->

  <!-- begin :: all product -->
  <div class="container-fluid bg-nav p-5">
    <div class="best-product-section text-center">
      <h1>All of Product</h1>
      <p>Let's choose your favorite product</p>
      <div class="scroll" style="height: 1000px;">
        <div class="row row-cols-md-5 row-cols-sm-4 g-4 mx-5">
          <?php for ($i = 0; $i < 30; $i++) { ?>
            <div class="col">
              <div class="card shadow">
                <img src="../assets/img/cakes-blackForest.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Black Forest</h5>
                  <p class="card-text">Rp140.000</p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end :: all product -->

  <!-- begin :: footer -->
  <footer class="container-fluid text-center bg-nav fixed-bottom">
    <div class="container">
      <p>Copyright &copy; 2023 lailanoviasari. All Rights Reserved</p>
    </div>
  </footer>
  <!-- end :: footer -->

  <!-- begin :: btn scroll top -->
  <a class="btn btn-dark scroll-top" href="#category_product" tmpleft="1275" tmptop="550">^</a>
  <!-- end :: btn scroll top -->

  <!-- begin :: CDN jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- end :: CDN jquery -->

  <!-- begin :: scroll-top -->
  <script>
    $(function() {
      $(window).scroll(function() {
        alignElements();
      });
    });

    function alignElements() {
      var scrollTop = $(window).scrollTop();
      $(".scroll-top").each(function() {
        $(this).offset({
          top: scrollTop + parseInt($(this).attr("tmptop")),
          left: parseInt($(this).attr("tmpleft"))
        });
      });
    }
  </script>
  <!-- end :: scroll-top -->

</body>

</html>