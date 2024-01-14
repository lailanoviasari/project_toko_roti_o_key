<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - O-Key Bakery</title>

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
      <a class="navbar-brand" href="index.php">O-Key</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mb-2 ">
          <li class="nav-item">
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
          <li class="nav-item active">
            <a class="nav-link active" href="about.php">About</a>
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

  <!-- begin :: heading about -->
  <div id="header" class="container-fluid bg-coklat p-5">
    <div class="container align-items-center text-center px-5">
      <img src="../assets/img/Screenshot 2023-11-11 224820.png" class=" mx-auto" alt="" style="width: 20%;">
      <p class="text-normal mx-auto py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsa repellendus laboriosam obcaecati sequi nam aut incidunt minima autem? Repellat reprehenderit nulla dolorum quisquam tempore, sint ea magnam placeat vel. Qui libero facilis magni aliquam est soluta eveniet corporis ex adipisci veniam rem aliquid corrupti molestias possimus fugit atque esse quam tempora ab dolores, officiis ullam exercitationem animi! Ullam, dicta suscipit exercitationem veniam possimus atque itaque inventore ab doloribus libero sint voluptatem facilis nihil modi.</p>
    </div>
  </div>
  <!-- end :: heading about -->

  <!-- begin :: best product -->
  <div class="container-fluid bg-nav p-5">
    <h1 class="text-header text-center">Our Outlets</h1>
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <li class="row row-cols-md-2 g-4 text-center mx-5 px-5">
        <ul class="col">Ini alamat outlets dibeberapa kota di Indonesia.</ul>
        <ul class="col">Ini alamat outlets dibeberapa kota di Indonesia.</ul>
      </li>
    <?php } ?>
  </div>
  <!-- end :: best product -->

  <div class="container-fluid bg-coklat text-center p-5">
    <h1 class="text-second text-center">Map</h1>
    <p class="p-text-second">You can check the google map to visit out outlets</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15829.766627840367!2d112.72144118389268!3d-7.304176149536146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x2dd7fb97917c2fad%3A0x21b1122d5fe174cc!2sSurabaya%20Zoo!3m2!1d-7.2959546!2d112.73660939999999!4m0!5e0!3m2!1sen!2sid!4v1699773227260!5m2!1sen!2sid" height="640" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- begin :: footer -->
  <footer class="container-fluid text-center bg-nav pt-3 pb-1">
    <div class="container">
      <p>Copyright &copy; 2023 lailanoviasari. All Rights Reserved</p>
    </div>
  </footer>
  <!-- end :: footer -->

  <!-- begin :: btn scroll top -->
  <a href="#header" id="scroll-btn" class="btn ms-auto" style="width: max-content;">&uarr;</a>
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