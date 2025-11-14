<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

?>
<div class="container" style="padding-bottom:70px">
    <center style="padding-top:25px">
        <h1>Add Data Member Form</h1>
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
     <form action="add_process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_name">Nama Lengkap:</label>
            <input type="text" class="form-control" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="product_description">gender:</label>
			<select id="gender_daftar" name="gender_daftar" required>
			    <option value="1">Man</option>
			    <option value="2">Woman</option>
		    </select>
        </div>
        <div class="form-group">
            <label for="weight">Alamat:</label>
            <input type="text" class="form-control" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="price">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="tanggallahir" required>
        </div>
        <div class="form-group">
            <label for="product_photo">No Telepon:</label>
            <input type="number" class="form-control" name="nomor_telepon" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Hobi:</label>
            <input type="text" class="form-control" name="hobi" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Nama Orang Tua:</label>
            <input type="text" class="form-control" name="nama_orang_tua" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
                <a href="index.php" class="btn btn-primary" style="background-color: red">Back to Member list</a>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" style="width:100%">Add Member</button>
            </div>
        </div>
    </form>
</div>
<?php
include('../../../footer.php')
?>
