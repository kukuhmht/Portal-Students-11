<!--head-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $title ?> </title>

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
<!--header-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="login" class="brand-logo hide-on-med-and-down">&nbsp; <?php echo $title ?></a>
		<a href="login" class="hide-on-med-and-up">&nbsp; <?php echo $title ?></a>
	  </div>
	</nav>
</div>
<!--end header-->

<main>
	<div class="container">
	<div class="row">
<br/>
<div class="col s12">
<div class="col s1">
</div>
	<div class="col s12 m10 z-depth-2">
		<center>
			<p class="brand-logo" style="font-Style: roboto; font-Size: 30px;"> Daftar sebagai Siswa </p>
		</center>
	<form action="<?php echo base_url(). 'login/daftar_siswa/tambah_siswa'; ?>" method="post">
	  <div class="col s12">
		<div class="input-field col s5" name="kelas">
			<select id="id_kelas required" name="id_kelas" required class="required">
				<option>Pilih Kelas</option>
					<?php foreach ($kelas as $row) {?>
				<option name="id_kelas"> <?php echo $row->nama_kelas ?> </option>
					<?php } ?>
			</select>
			<label>Kelas</label>
		</div>
	  </div>
	  <div class="col s12">
		<div class="input-field col s6">
          <input id="nomor_induk" name="nomor_induk" type="number" class="validate">
          <label for="nomor_induk">NIS</label>
        </div>
	  </div>
	  <div class="col s12">
		<div class="input-field col s12 m7">
          <input id="nama_siswa" name="nama_siswa" type="text" class="validate">
          <label for="nama_siswa">Nama Lengkap</label>
        </div>
		<div class="input-field col s12 m5">
          <input id="nama_panggilan" name="nama_panggilan" type="text" class="validate">
          <label for="nama_panggilan">Nama Panggilan</label>
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
		  <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
		  <label for="alamat">Alamat</label>
		</div>
	  </div>
		<span class="col s12">
			<button class="waves-effect waves-light green btn right" type="submit" value="daftar" name="daftar"> Daftar </button>
			<br/>
			<br/>
			<br/>
		</span>
	</form>
	<br>
	</div>
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