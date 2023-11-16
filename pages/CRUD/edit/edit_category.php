<?php

include("../../../database/connection.php");

$category_id = $_POST['category_id'];

$categories = mysqli_query($connection, "SELECT * FROM category WHERE category_id = $category_id");

$result = mysqli_fetch_array($categories);

?>

<form id="form_edit_Data" method="POST" action="edit/update/update_category.php">
    <div class="mb-3">
        <label for="category_id" class="col-form-label">Category id:</label>
        <input type="text" class="form-control" name="category_id" id="category_id" value="<?php echo $result['category_id'] ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="category_name" class="col-form-label">Category Name:</label>
        <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $result['category_name'] ?>">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-utama">Submit</button>
    </div>
</form>