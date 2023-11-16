<?php

include("../../../database/connection.php");

$make_product_id = $_POST['make_product_id'];

$make_products = mysqli_query($connection, "SELECT * FROM make_product WHERE make_product_id = $make_product_id");
$products = mysqli_query($connection,"SELECT * FROM product");
$patissiers = mysqli_query($connection,"SELECT * FROM patissier");

$result = mysqli_fetch_array($make_products);

?>

<form id="form_edit_Data" action="edit/update/update_make_product.php" method="POST">
    <div class="mb-3">
        <label for="make_product_id" class="col-form-label">make_product_id:</label>
        <input type="text" class="form-control" name="make_product_id" id="make_product_id" value="<?php echo $result['make_product_id'] ?>" placeholder="Auto Increment" readonly>
    </div>
    <div class="mb-3">
        <label for="product_id" class="col-form-label">product_id:</label>
        <select class="form-select" name="product_id" id="product_id">
            <option value=""></option>
            <?php foreach ($products as $key => $data) {
                if ($data['product_id'] == $result['product_id']) { ?>
                    <option value="<?php echo $data['product_id'] ?>" selected><?php echo $data["product_id"] . ' | ' .  $data["product_name"] ?></option>
                <?php } else { ?>
                    <option value="<?php echo $data['product_id'] ?>"><?php echo $data["product_id"] . ' | ' .  $data["product_name"] ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="patissier_id" class="col-form-label">patissier_id:</label>
        <select class="form-select" name="patissier_id" id="patissier_id">
            <option value=""></option>
            <?php foreach ($patissiers as $key => $data) {
                if ($data['patissier_id'] == $result['patissier_id']) { ?>
                    <option value="<?php echo $data['patissier_id'] ?>" selected><?php echo $data["patissier_id"] . ' | ' .  $data["nama_patissier"] ?></option>
                <?php } else { ?>
                    <option value="<?php echo $data['patissier_id'] ?>"><?php echo $data["patissier_id"] . ' | ' .  $data["nama_patissier"] ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="make_date" class="col-form-label">make_date:</label>
        <input type="datetime-local" class="form-control" name="make_date" id="make_date" value="<?php echo $result['make_date'] ?>">
    </div>
    <div class="mb-3">
        <label for="exp_date" class="col-form-label">exp_date:</label>
        <input type="datetime-local" class="form-control" name="exp_date" id="exp_date" value="<?php echo $result['exp_date'] ?>">
    </div>
    <div class="mb-3">
        <label for="quantity" class="col-form-label">quantity:</label>
        <input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo $result['quantity'] ?>">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-utama" onclick="confirm('Are you sure to save your changes?')">Submit</button>
    </div>
</form>