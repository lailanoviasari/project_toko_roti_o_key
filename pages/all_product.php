<?php

include("../database/connection.php");

$products = mysqli_query($connection, "SELECT * FROM product");

?>

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
      <div class="collapse navbar-collapse" id="collapsibleNavId">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 20 20">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- end :: navbar -->

  <!-- begin :: category product -->
  <section id="category_product" class="container-fluid bg-coklat p-5">
    <div class="text-center m-5">
      <h1 class="text-second">Product Category</h1>
    </div>
    <div class="overflow-auto">
      <div class="row row-cols-md-6 row-cols-sm-3 g-4 text-center mx-5 my-3">
        <a href="#all" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/4532579.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">All</h5>
            </div>
          </div>
        </a>
        <a href="#bread" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/bread.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Breads</h5>
            </div>
          </div>
        </a>
        <a href="#doughnat" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/donat.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Doughnats</h5>
            </div>
          </div>
        </a>
        <a href="#pudding" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/pudding.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Pudding</h5>
            </div>
          </div>
        </a>
        <a href="#cake" style="text-decoration: none; color:black;" class="col">
          <div class="card shadow py-3">
            <img src="../assets/img/cake.png" class="card-img-top mx-auto" alt="..." style="width:50%">
            <div class="card-body">
              <h5 class="card-title">Cakes</h5>
            </div>
          </div>
        </a>
        <a href="#rollCake" style="text-decoration: none; color:black;" class="col">
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
  <section id="all" class="container-fluid bg-nav p-5">
    <div class="all-product-section text-center my-5">
      <h1>All of Product</h1>
      <p>Let's choose your favorite product</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) { ?>
            <div class="col">
              <div class="card shadow">
                <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php if (strlen($value['product_name']) < 15) {
                      echo substr($value['product_name'], 0, 15);
                    } else {
                      echo substr($value['product_name'], 0, 15) . '...';
                    } ?>
                  </h5>
                  <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: all product -->

  <!-- begin :: breads product -->
  <section id="bread" class="container-fluid bg-coklat p-5">
    <div class="text-center my-5">
      <h1 class="text-second">Breads</h1>
      <p class="text-light">Let's choose your favorite breads</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) {
            if ($value['category_id'] == 1) { ?>
              <div class="col">
                <div class="card shadow">
                  <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if (strlen($value['product_name']) < 15) {
                        echo substr($value['product_name'], 0, 15);
                      } else {
                        echo substr($value['product_name'], 0, 15) . '...';
                      } ?>
                    </h5>
                    <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: breads product -->

  <!-- begin :: doughnats product -->
  <section id="doughnat" class="container-fluid bg-nav p-5">
    <div class="all-product-section text-center my-5">
      <h1>Doughnats</h1>
      <p>Let's choose your favorite Doughnats</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) {
            if ($value['category_id'] == 2) { ?>
              <div class="col">
                <div class="card shadow">
                  <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if (strlen($value['product_name']) < 15) {
                        echo substr($value['product_name'], 0, 15);
                      } else {
                        echo substr($value['product_name'], 0, 15) . '...';
                      } ?>
                    </h5>
                    <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: doughnats product -->

  <!-- begin :: pudding product -->
  <section id="pudding" class="container-fluid bg-coklat p-5">
    <div class="text-center my-5">
      <h1 class="text-second">Pudding</h1>
      <p class="text-light">Let's choose your favorite pudding</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) {
            if ($value['category_id'] == 3) { ?>
              <div class="col">
                <div class="card shadow">
                  <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if (strlen($value['product_name']) < 15) {
                        echo substr($value['product_name'], 0, 15);
                      } else {
                        echo substr($value['product_name'], 0, 15) . '...';
                      } ?>
                    </h5>
                    <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: pudding product -->

  <!-- begin :: cakes product -->
  <section id="cake" class="container-fluid bg-nav p-5">
    <div class="all-product-section text-center my-5">
      <h1>Cakes</h1>
      <p>Let's choose your favorite cakes</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) {
            if ($value['category_id'] == 4) { ?>
              <div class="col">
                <div class="card shadow">
                  <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if (strlen($value['product_name']) < 15) {
                        echo substr($value['product_name'], 0, 15);
                      } else {
                        echo substr($value['product_name'], 0, 15) . '...';
                      } ?>
                    </h5>
                    <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: cakes product -->

  <!-- begin :: rollCakes product -->
  <section id="rollCake" class="container-fluid bg-coklat p-5">
    <div class="text-center my-5">
      <h1 class="text-second">Roll Cakes</h1>
      <p class="text-light">Let's choose your favorite roll cakes</p>
      <div class="scroll my-3" style="height: 450px;">
        <div class="row justify-content-center row-cols-md-5 row-cols-sm-4 g-4 p-5">
          <?php foreach ($products as $key => $value) {
            if ($value['category_id'] == 5) { ?>
              <div class="col">
                <div class="card shadow">
                  <img src="../assets/img/upload/<?php echo $value['product_image'] ?>" class="card-img-top" alt="<?php echo $value['product_name'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?php if (strlen($value['product_name']) < 15) {
                        echo substr($value['product_name'], 0, 15);
                      } else {
                        echo substr($value['product_name'], 0, 15) . '...';
                      } ?>
                    </h5>
                    <p class="card-text">Rp<?php echo number_format($value['price']) ?></p>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end :: rollCakes product -->

  <!-- begin :: footer -->
  <footer class="container-fluid text-center bg-nav pt-3 pb-1">
    <div class="container">
      <p>Copyright &copy; 2023 lailanoviasari. All Rights Reserved</p>
    </div>
  </footer>
  <!-- end :: footer -->

  <!-- begin :: btn scroll top -->
  <a href="#category_product" id="scroll-btn" class="btn ms-auto" style="width: max-content;">&uarr;</a>
  <!-- end :: btn scroll top -->

  <!-- begin :: CDN jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- end :: CDN jquery -->

  <!-- begin :: scroll-top -->
  <script>
    // ketika pengunjung scroll kebawah 75px dari atas dokumen, maka tampilkan tombol scroll-btn
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
        document.getElementById("scroll-btn").style.display = "block";
      } else {
        document.getElementById("scroll-btn").style.display = "none";
      }
    }
  </script>
  <!-- end :: scroll-top -->

</body>

</html>