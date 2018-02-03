<!--head-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> Daftar Sebagai Guru </title>

  <!-- CSS  -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/iconlogo_v6.png');?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/-->
<!--==================================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.css">
  
</head>

<body>
<!--end head-->
<!--Header-->
<div class="navbar-fixed">
  <!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="login/login/logout">Logout</a></li>
	</ul>
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="login" class="brand-logo hide-on-med-and-down">&nbsp Daftar Sebagai Guru</a>
		<a href="login" class="hide-on-med-and-up">&nbsp Daftar Sebagai Guru</a>
		<ul class="right hide-on-med-and-down">
		  <!-- Dropdown Trigger -->
		  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Akun<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	  </div>
	</nav>
</div>
<!--end header-->

<main>
	<div class="container">
	<div class="row">
<div class="col s12">
<div class="col s1">
</div>
	<form action="<?php echo base_url(). 'login/daftar_guru/tambah_guru'; ?>" method="post">
		<div class="card col s12 m10">
		 <!--div class="card col s12">
			ini dialog error
		 </div-->
			<p class="brand-logo center" style="font-Style: roboto; font-Size: 30px;"> Daftar sebagai Guru </p>
		  
		  <div class="col s12">
			<div class="input-field col s12 m5">
			  <input id="nip" name="nip" type="number" class="validate">
			  <label for="nip">NIP</label>
			</div>
		  </div>
		  <div class="col s12">
			<div class="input-field col s12 m7">
			  <input id="kode_mapel" name="kode_mapel" type="text" class="validate">
			  <label for="kode_mapel">Kode Matapelajaran</label>
			</div>
			<div class="input-field col s12 m6">
			  <input id="matapelajaran" name="matapelajaran" type="text" class="validate">
			  <label for="matapelajaran">Matapelajaran</label>
			</div>
		  </div>
		  <div class="col s12">
			<div class="input-field col s12 m7">
			  <input id="nama_guru" name="nama_guru" type="text" class="validate">
			  <label for="nama_guru">Nama guru</label>
			</div>
		  </div>
		  <div class="col s12">
			<p class="col s6">
			  <!--input <?php if ($jenis_kelamin == 'Laki-Laki'){?>checked <?php } ?> name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1" /-->
			  <input name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1" />
			  <label for="test1">Laki-Laki</label>
			  <!--input <?php if ($jenis_kelamin == 'Perempuan'){?>checked <?php } ?> name="jenis_kelamin" value="Perempuan" type="radio" id="test2" /-->
			  <input name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
			  <label for="test2">Perempuan</label>
			</p>
			<div class="input-field col s6">
				<input id="nomor_hp" type="text" name="nomor_hp" />
				<label for="nomor_hp">Nomor Telepon</label>
			</div>
		  </div>
		  <div class="col s12">
			<div class="input-field col s12 m6">
			  <input id="jabatan" name="jabatan" type="text">
			  <label for="jabatan">Jabatan</label>
			</div>
			<div class="input-field col s12 m6">
			  <input id="status_pekerja" name="status_pekerja" type="text">
			  <label for="status_pekerja">Status Pekerja</label>
			</div>
		  </div>
		  <div class="col s12">
			<div class="input-field col s12 m7">
			  <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
			  <label for="alamat">Alamat</label>
			</div>
		  </div>
		  <div class="col s12">
			<BR>
			<button class="waves-effect waves-light btn right" type="submit" value="daftar" name="daftar"> Daftar </button>
			<br>
			<br>
			<br>
		  </div>
		</div>
	</form>
	<br>
<div class="col s1">
</div>
</div>
	</div>
	</div>
	<br>
	<br>
</main>

<!--footer-->
<?php echo $this->load->view('layout/footer'); ?>