<?php

include("../../../database/connection.php");

$product_id = $_POST['product_id'];

$products = mysqli_query($connection, "SELECT * FROM product WHERE product_id = $product_id");
$categories = mysqli_query($connection, "SELECT * FROM category");

$result = mysqli_fetch_array($products);

?>

<form id="form_edit_Data" action="edit/update/update_product.php" method="POST" enctype="multipart/form-data"> <!--  -->
    <div class="mb-3">
        <label for="product_id" class="col-form-label">Product id:</label>
        <input type="text" class="form-control" name="product_id" id="product_id" value="<?php echo $result['product_id'] ?>" placeholder="Auto Increment" required readonly>
    </div>
    <div class="mb-3">
        <label for="product_name" class="col-form-label">Product Name:</label>
        <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $result['product_name'] ?>" required autofocus>
    </div>
    <div class="mb-3">
        <label for="price" class="col-form-label">Price:</label>
        <input type="text" class="form-control" name="price" id="price" value="<?php echo $result['price'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="col-form-label">Stock:</label>
        <input type="number" class="form-control" name="stock" id="stock" value="<?php echo $result['stock'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="product_img" class="col-form-label">Product Image:</label>
        <input type="file" class="form-control" name="product_img" id="product_img" value="<?php echo $result['product_image'] ?>" required >
    </div>
    <div class="mb-3">
        <label for="description" class="col-form-label">Description:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="5" required><?php echo $result['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="date_add" class="col-form-label">Add Date:</label>
        <input type="datetime-local" class="form-control" name="date_add" id="date_add" value="<?php echo $result['date_add'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="category_id" class="col-form-label">Category id:</label>
        <select class="form-select" name="category_id" id="category_id" value="<?php echo $result['category_id'] ?>" required>
            <option value=""></option>
            <?php foreach ($categories as $key => $data) {
                if ($data['category_id'] == $result['category_id']) { ?>
                    <option value="<?php echo $data['category_id'] ?>" selected><?php echo $data["category_id"] . ' | ' .  $data["category_name"] ?></option>
                <?php } else { ?>
                    <option value="<?php echo $data['category_id'] ?>"><?php echo $data["category_id"] . ' | ' .  $data["category_name"] ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-utama" onclick="confirm('Are you sure to save your changes?')">Submit</button>
    </div>
</form>