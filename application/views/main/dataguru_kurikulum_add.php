<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tambah Guru</title>

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
	  <a href="<?php echo base_url();?>dataguru_kurikulum" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Tambah Guru </a>
	  <a href="<?php echo base_url();?>dataguru_kurikulum" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Tambah Guru </a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<div class="container">
<form action="<?php echo base_url(). 'dataguru_kurikulum/tambah'; ?>" method="post">
<div class="row card">
  <div class="col s12">
	<div class="input-field col s12 m4">
	  <input id="nip" name="nip" type="text" class="validate">
	  <label for="nip">NIP</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="kode_mapel" name="kode_mapel" type="text" class="validate">
	  <label for="kode_mapel">Kode Matapelajaran</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input id="nama_guru" name="nama_guru" type="text" class="validate">
	  <label for="nama_guru">Nama guru</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="matapelajaran" name="matapelajaran" type="text" class="validate">
	  <label for="matapelajaran">Matapelajaran</label>
	</div>
  </div>
  <div class="col s12">
	<p>
      <input name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1"/>
      <label for="test1">Laki-Laki</label>
      <input name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
      <label for="test2">Perempuan</label>
    </p>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input id="jabatan" name="jabatan" type="text">
	  <label for="jabatan">Jabatan</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12">
	  <input id="status_pekerja" name="status_pekerja" type="text">
	  <label for="status_pekerja">Status Pekerja</label>
	</div>
  </div>
  <div class="col s4 left">
	<button class="waves-effect waves-light btn" type="submit" value="simpan" name="simpan"> Simpan </button>
  </div>
</div>
</form>
</div>
<?php $this->load->view('layout/footer'); ?>