<?php
include("../../database/connection.php");

$categories = mysqli_query($connection, "SELECT * FROM category");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category - O-Key Bakery</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

    <!-- begin :: CSS local -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../css/font-awesome.min.css" rel="stylesheet" />
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 ">
                    <li class="nav-item active">
                        <a class="nav-link active" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Manajemen CRUD
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="product.php">Product</a></li>
                            <li><a class="dropdown-item" href="category.php">Category</a></li>
                            <li><a class="dropdown-item" href="patissier.php">Patissier</a></li>
                            <li><a class="dropdown-item" href="make_product.php">Make Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../all_product.php">All Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
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

    <!-- begin :: tabel data category -->
    <div id="tabel_data" class="container-fluid bg-coklat p-5">
        <div class="my-3">
            <p class="text-second text-center">Data Category</p>
            <div class="text-center pb-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_add_data">Tambah Data</button>
            </div>
        </div>
        <div class="row align-items-center justify-content-center px-5">
            <table class="table table-bordered table-responsive bg-light" style="width: 50%;">
                <thead>
                    <tr class="text-center">
                        <th scope="col" width="25%">Category id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col" width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $key => $data) { ?>
                        <tr>
                            <td><?php echo $data['category_id'] ?></td>
                            <td><?php echo $data['category_name'] ?></td>
                            <td class="text-center">
                                <button type="button" id="btn_edit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit_data" onclick="edit_data(<?php echo $data['category_id'] ?>)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                </button>
                                <a href="delete/delete_category.php?id=<?php echo $data['category_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end :: tabel data category -->

    <!-- begin :: modal add data -->
    <div class="modal fade" id="modal_add_data" tabindex="-1" aria-labelledby="modal_add_data" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_add_data">Add New Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="add/add_category.php" id="form_add_Data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="category_id" class="col-form-label">Category id:</label>
                            <input type="text" class="form-control" id="category_id" name="category_id" placeholder="This is auto increment" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="category_name" class="col-form-label">Category Name:</label>
                            <input type="text" class="form-control" id="category_name" name="category_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-utama">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end :: modal add data -->

    <!-- begin :: modal edit data -->
    <div class="modal fade" id="modal_edit_data" tabindex="-1" aria-labelledby="modal_edit_data" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_edit_data">Edit New Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal_body_edit">
                </div>
            </div>
        </div>
    </div>
    <!-- end :: modal edit data -->

    <!-- begin :: footer -->
    <footer class="container-fluid text-center bg-nav fixed-bottom">
        <div class="container">
            <p>Copyright &copy; 2023 lailanoviasari. All Rights Reserved</p>
        </div>
    </footer>
    <!-- end :: footer -->

    <!-- begin :: btn scroll top -->
    <a class="btn btn-dark scroll-top" href="#tabel_data" tmpleft="1275" tmptop="550">^</a>
    <!-- end :: btn scroll top -->

    <!-- begin :: CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- end :: CDN jquery -->

    <!-- begin :: jquery edit data category -->
    <script>
        function edit_data(category_id) {
            $.ajax({
                method: 'POST',
                url: 'edit/edit_category.php',
                data: {
                    category_id: category_id
                },
                success: function(result) {
                    $('#modal_body_edit').html(result)
                    /* confirm('Are you sure want to save your change?') */
                }
            })
        }
    </script>
    <!-- end :: jquery edit data category -->

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