<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tambah Siswa</title>

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
<main>
<!--Header-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('siswa');?>" class="brand-logo hide-on-med-and-down">&nbsp; Tambah Siswa</a>
		<a href="<?php echo base_url('siswa');?>" class="hide-on-med-and-up">&nbsp; Tambah Siswa</a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<div class="container">
<form action="<?php echo base_url(). 'siswa/tambah'; ?>" method="post">
<div class="row card">
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input id="nomor_induk" name="nomor_induk" type="number" class="validate">
	  <label for="nomor_induk">Nomor Induk</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input id="nama_siswa" name="nama_siswa" type="text" class="validate">
	  <label for="nama_siswa">Nama Siswa</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="nama_panggilan" name="nama_panggilan" type="text" class="validate">
	  <label for="nama_panggilan">Nama Panggilan</label>
	</div>
  </div>
  <div class="col s12">
	<p>
      <input name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1"/>
      <label for="test1">Laki-Laki</label>
      <input name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
      <label for="test2">Perempuan</label>
    </p>
	<div class="input-field col s12 m6">
	  <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
	  <label for="alamat">Alamat</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="nomor_hp" name="nomor_hp" type="text">
	  <label for="nomor_hp">Nomor telepon</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input id="jabatan" name="jabatan" type="text">
	  <label for="jabatan">Jabatan</label>
	</div>
  </div>
  <div class="right">
	<button class="waves-effect waves-light btn" type="submit" value="simpan" name="simpan"> Simpan </button>
  </div>
</div>
</form>
</div>
<?php $this->load->view('layout/footer'); ?>