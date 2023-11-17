<?php

include("../../../database/connection.php");

$patissier_id = $_POST["patissier_id"];

$patissiers = mysqli_query($connection, "SELECT * FROM patissier WHERE patissier_id = $patissier_id");

$result = mysqli_fetch_array($patissiers);

?>

<form id="form_edit_Data" action="edit/update/update_patissier.php" method="POST">
    <div class="mb-3">
        <label for="patissier_id" class="col-form-label">Patissier id:</label>
        <input type="text" class="form-control" name="patissier_id" id="patissier_id" value="<?php echo $result['patissier_id'] ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nama_patissier" class="col-form-label">Name:</label>
        <input type="text" class="form-control" name="nama_patissier" id="nama_patissier" value="<?php echo $result["nama_patissier"]?>">
    </div>
    <div class="row mb-3">
        <label for="gender_patissier" class="col-form-label">Gender:</label>
        <div class="form-check col-5 ms-3">
            <input class="form-check-input" type="radio" name="gender_patissier" id="male" value="0" <?php if ($result['gender_patissier'] == 'male') { echo 'checked';} ?>>
            <label class="form-check-label" for="male">
                Male
            </label>
        </div>
        <div class="form-check col-5 ms-3">
            <input class="form-check-input" type="radio" name="gender_patissier" id="female" value="1" <?php if ($result['gender_patissier'] == 'female') { echo 'checked';} ?>>
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="telpon_patissier" class="col-form-label">Telpon:</label>
        <input type="text" class="form-control" name="telpon_patissier" id="telpon_patissier" maxlength="12" value="<?php echo $result['telpon_patissier']?>">
    </div>
    <div class="mb-3">
        <label for="email_patissier" class="col-form-label">Email:</label>
        <input type="email" class="form-control" name="email_patissier" id="email_patissier" value="<?php echo $result['email_patissier']?>">
    </div>
    <div class="mb-3">
        <label for="alamat_patissier" class="col-form-label">Alamat:</label>
        <textarea class="form-control" id="alamat_patissier" name="alamat_patissier" style="height: 100px"><?php echo $result['alamat_patissier']?></textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-utama" onclick="confirm('Are you sure to save your changes?')">Submit</button>
    </div>
</form>