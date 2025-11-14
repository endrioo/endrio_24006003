<?php
session_start();
include_once "../settings/check_session_after_login.php";
include('../../header.php');
include('../../menu.php');
include_once "../settings/connection.php";

// Query to calculate the number of member data
$queryMember = "SELECT COUNT(*) as jumlahMember FROM member";
$resultMember = mysqli_query($connection, $queryMember);
$dataMember = mysqli_fetch_assoc($resultMember);
$jumlahMember = $dataMember['jumlahMember'];

// Query to calculate the number of product data
$queryProduct = "SELECT COUNT(*) as jumlahProduct FROM product";
$resultProduct = mysqli_query($connection, $queryProduct);
$dataProduct = mysqli_fetch_assoc($resultProduct);
$jumlahProduct = $dataProduct['jumlahProduct'];

?>
<div class="container dashboard-box" style="padding-top: 30px">
    <div class="box">
        <a href="member/">
            <div class="count">
                <?php
                    echo $jumlahMember;
                ?>
            </div>
            <div class="label">Total Members</div>
        </a>
    </div>
    <div class="box">
        <a href="product/">
            <div class="count">
                <?php
                    echo $jumlahProduct;
                ?>
            </div>
            <div class="label">Total Products</div>
        </a>
    </div>
    <div class="row" style="padding:55px">

        <h1>Welcome <?php echo $_SESSION['nama_lengkap']; ?> on the Members page</h1>

        <h3>Your profile details:</h3>
        <ul>
            <li><strong>ID Member:</strong> <?php echo $_SESSION['id_member']; ?></li>
            <li><strong>Gender:</strong> <?php echo $_SESSION['gender']; ?></li>
            <li><strong>Alamat:</strong> <?php echo $_SESSION['alamat']; ?></li>
            <li><strong>Tanggal Lahir:</strong> <?php echo $_SESSION['tanggallahir']; ?></li>
            <li><strong>Nomor Telepon:</strong> <?php echo $_SESSION['nomor_telepon']; ?></li>
            <li><strong>Hobi:</strong> <?php echo $_SESSION['hobi']; ?></li>
            <li><strong>Nama Orang Tua:</strong> <?php echo $_SESSION['nama_orang_tua']; ?></li>
        </ul>

        <p><a href="logout.php"><strong>LOGOUT</strong></a></p>

    </div>
</div>
<?php
include('../../footer.php')
?>
