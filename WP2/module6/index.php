<?php
session_start();
include_once "settings/check_session_before_login.php";
include('../header.php');
include('../menu.php');
include_once "settings/connection.php";

if (isset($_POST['submit_login'])) {
    $username_login = htmlentities(trim($_POST['username_login']));
    $password_login = htmlentities(md5($_POST['password_login']));

    $seleksi = mysqli_query($connection, "SELECT id_member,nama_lengkap,gender,alamat,tanggallahir,nomor_telepon,hobi,nama_orang_tua,status_akun FROM member WHERE username = '$username_login' and password='$password_login'")
        or die("Query failed: " . mysqli_error($connection));

    $data_member = mysqli_fetch_array($seleksi);
    $jumlah_baris = mysqli_num_rows($seleksi);

    if ($jumlah_baris == 1) {
        // Store session
        $_SESSION['id_member'] = $data_member['id_member'];
        $_SESSION['nama_lengkap'] = $data_member['nama_lengkap'];
        $_SESSION['gender'] = $data_member['gender'];
        $_SESSION['alamat'] = $data_member['alamat'];
        $_SESSION['tanggallahir'] = $data_member['tanggallahir'];
        $_SESSION['nomor_telepon'] = $data_member['nomor_telepon'];
        $_SESSION['hobi'] = $data_member['hobi'];
        $_SESSION['nama_orang_tua'] = $data_member['nama_orang_tua'];
        $_SESSION['status_akun'] = $data_member['status_akun'];

        if (!empty($_POST['remember'])) {
            setcookie("username_login", $username_login, time() + (7 * 24 * 60 * 60), "/");
        } else {
            if (isset($_COOKIE['username_login'])) {
                setcookie("username_login", "", time() - 3600, "/");
            }
        }

        if (isset($_COOKIE['password_login'])) {
            setcookie("password_login", "", time() - 3600, "/");
        }
        
        if ($data_member['status_akun'] == 0){
            header("Location: dashboard/index.php");
        } else if ($data_member['status_akun'] == 1) {
            header("Location: member/index.php");
        }
        
        exit;
    } else {
        echo "
        <script language='javascript'>
        alert('Sorry, your Username or Password is incorrect..');
        document.location='index.php';
        </script>";
    }
}

?>
<div class="container">
	<div class="main">
        <form id="formlogin" method="post" action="index.php">
            <h2>Login</h2><hr/>
            <label>Username :</label>
            <input type="text" id="username_login" name="username_login"
                value="<?php if(isset($_COOKIE['username_login'])) echo $_COOKIE['username_login']; ?>" required>

            <label>Password :</label>
            <input type="password" id="password_login" name="password_login"
                value="<?php if(isset($_COOKIE['password_login'])) echo $_COOKIE['password_login']; ?>" required>

            <label>
                <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username_login'])) echo 'checked'; ?>> Remember Me
            </label>

            <input type="submit" id="submit_login" name="submit_login" value="LOGIN">
            <center>
                <h5>If you don't have an account yet? Please <a href="register.php">Register</a></h5>
            </center>
        </form>
	</div>
</div>
<?php
include('../footer.php')
?>
