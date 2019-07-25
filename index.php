<!DOCTYPE html>
<html>
<head>
	<title>LOGIN TOKO KOMPUTER</title>
	<link rel="stylesheet" href="assets/bootstrap.css">
	<script src="assets/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/bootstrap.js"></script>
</head>
<body>
 <div class="container">
 <div class="row">
 <div class="col-4"></div>
 <div class="col-4 mt-5">
	<h1 class="mb-3"><center>LOGIN<center></h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger'>Username Atau Password Tidak Sesuai !</div>";
		}
	}
	?>
 	<form action="cek_login.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control"  aria-describedby="emailHelp" placeholder="Username" required="required">	
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		</div>
		
		<button type="submit" class="btn btn-primary">LOGIN</button>
		<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#ModalRegistrasi">Daftar</button>
    
	</form>

	<!-- MODAL BOOTSTRAP -->
	<div class="modal fade" id="ModalRegistrasi" tabindex="-1" role="dialog" aria-labelledby="myModalRegistrasi">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalRegistrasi">Pendaftaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="FormRegistrasi" action="tambahPelanggan.php" method="post">
          <div class="form-label-group">        
            <input name="nama" class="form-control" type="text" placeholder="Nama Pelanggan" autocomplate="no" required="">
			<label></label>
          </div>
          <div class="form-label-group">
            <input name="alamat" class="form-control" type="text"  placeholder="Alamat" autocomplete="no" required="">
            <label></label>
          </div>

		  <div class="form-label-group mb-3">
		  <label>Jenis Kelamin :</label>
		  <div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L">
			<label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P">
			<label class="form-check-label" for="inlineRadio2">Perempuan</label>
			</div>
			</div>
          <div class="form-label-group">        
            <input name="username" class="form-control" type="text"  placeholder="Username" required="">
            <label></label>
          </div>
          <div class="form-label-group">        
            <input name="password" class="form-control" type="password" placeholder="Password" required="">
            <label></label>
          </div>
  <select class="custom-select" name="level" id="inlineFormCustomSelect">
        
        <option value="admin">Admin</option>
        <option value="pelanggan">Pelanggan</option>
        
</select>
			
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">SIGNUP</button>
        </div>
        </form>
      </div>
    </div>
  </div>
	</div>
	<div class="col-4"></div>
	</div>
	</div>
</body>
</html>