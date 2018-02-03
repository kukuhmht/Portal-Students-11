<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Siswa</title>

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
		<a href="<?php echo base_url('siswa');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Edit Siswa</a>
		<a href="<?php echo base_url('siswa');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Edit Siswa</a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<div class="container">
<?php echo form_open( 'siswa/update/'.$ID); ?>
<div class="row card">
<br>
  <div class="col s12">
	<div class="input-field col s12 m4">
	  <input readonly id="nomor_induk" name="nomor_induk" value="<?php echo $nomor_induk ?>" type="number" class="validate">
	  <label for="nomor_induk">Nomor Induk</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input readonly id="nama_siswa" name="nama_siswa" value="<?php echo $nama_siswa ?>" type="text" class="validate">
	  <label for="nama_siswa">Nama Siswa</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="nama_panggilan" name="nama_panggilan" value="<?php echo $nama_panggilan ?>" type="text" class="validate">
	  <label for="nama_panggilan">Nama Panggilan</label>
	</div>
  </div>
  <div class="col s12">
	<p>
      <input <?php if ($jenis_kelamin == 'Laki-Laki'){?>checked <?php } ?> name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1" />
      <label for="test1">Laki-Laki</label>
      <input <?php if ($jenis_kelamin == 'Perempuan'){?>checked <?php } ?> name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
      <label for="test2">Perempuan</label>
    </p>
	<div class="input-field col s12 m6">
	  <input id="nomor_hp" name="nomor_hp" value="<?php echo $nomor_hp ?>" type="number" class="validate">
	  <label for="nomor_hp">Nomor telepon</label>
	</div>
	<div class="input-field col s12 m6">
	  <textarea id="alamat" name="alamat" class="materialize-textarea"><?php echo $alamat ?></textarea>
	  <label for="alamat">Alamat</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input readonly id="jabatan" name="jabatan" value="<?php echo $jabatan ?>" type="text" class="validate">
	  <label for="jabatan">Jabatan</label>
	</div>
	<div class="col s12 m4">
		<button class="waves-effect waves-light btn right" type="submit" value="tambah" name="tambah"> Simpan </button>
	</div>
  </div>
</div>
<?php echo form_close(); ?>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>