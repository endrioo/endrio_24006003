<?php
session_start();
include_once "settings/check_session_before_login.php";
include('../header.php');
include('../menu.php');
?>
<div class="container">
	<div class="main">
      	<form id="formlogin" method="post" action="register_member_process.php">
			<h2>Register</h2><hr/>		
			<label>Full Name :</label>
			<input type="text" id="nama_lengkap_daftar" name="nama_lengkap_daftar" required>
			<label>Gender :</label>
			<select id="gender_daftar" name="gender_daftar" required>
			    <option value="1">Man</option>
			    <option value="2">Woman</option>
		    </select>
            <br><br>
			<label>Address :</label><br>
			<textarea id="alamat_daftar" name="alamat_daftar" cols="30" rows="5" required></textarea>
			<br><br>
			<label>Date of birth :</label>
			<input id="tanggal_lahir" type="date" name="tanggal_lahir" required/><br><br>

			<label>Phone Number :</label>
			<input id="nomor_telepon" type="number" name="nomor_telepon" required/><br><br>

            <label>Hobbies :</label>
			<input type="text" id="hobi" name="hobi" required/><br><br>

			<label>Parent Name :</label>
			<input type="text" id="nama_orang_tua" name="nama_orang_tua" required><br><br>

			<label>Password :</label>
			<input type="password" id="password_daftar" name="password_daftar" required>

			<input type="submit" id="submit_daftar" name="submit_daftar" value="REGISTER">
			<center>
				<h5>If you already have an account? Please <a href="index.php">Login</a></h5>
			</center>
	  	</form>
	</div>
	<br><br><br><br>
</div>
<?php
include('../footer.php');
?>
