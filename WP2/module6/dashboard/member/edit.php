<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

if (isset($_GET['id'])) {
    $member_id = $_GET['id'];
    $query = "SELECT * FROM member WHERE id_member = $member_id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $nama_lengkap       = $row['nama_lengkap'];
        $gender             = $row['gender_daftar'];
        $alamat             = $row['alamat']; 
        $tanggal            = $row['tanggallahir']; 
        $nomor              = $row['nomor_telepon']; 
        $hobi               = $row['hobi']; 
        $nama_orang_tua     = $row['nama_orang_tua']; 
        $username           = $row['nama_lengkap'];
    }
}

?>

<div class="container" style="padding-bottom:70px">
    <center style="padding-top:25px">
        <h1>Edit Member</h1>    
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
     <form action="edit_process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
        <div class="form-group">
            <label for="product_name">Nama Lengkap:</label>
            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required>
        </div>
        <div class="form-group">
            <label for="product_description">gender:</label>
            <select id="gender_daftar" name="gender_daftar" required>
                <option value="1" <?php echo ($gender == "L") ? "selected" : ""; ?>>Man</option>
                <option value="2" <?php echo ($gender == "P") ? "selected" : ""; ?>>Woman</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Alamat:</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="tanggallahir" value="<?php echo $tanggal; ?>" required>
        </div>
        <div class="form-group">
            <label for="product_photo">No Telepon:</label>
            <input type="number" class="form-control" name="nomor_telepon" value="<?php echo $nomor; ?>" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Hobi:</label>
            <input type="text" class="form-control" name="hobi" value="<?php echo $hobi; ?>"  required>
        </div>
        <div class="form-group">
            <label for="product_photo">Nama Orang Tua:</label>
            <input type="text" class="form-control" name="nama_orang_tua" value="<?php echo $nama_orang_tua; ?>"  required>
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
                <a href="index.php" class="btn btn-primary" style="background-color: red">Back to Member list</a>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" style="width:100%">Update Member</button>
            </div>
        </div>
    </form>
</div>
<?php
include('../../../footer.php');
?>

