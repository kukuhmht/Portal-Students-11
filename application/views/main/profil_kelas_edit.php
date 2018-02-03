<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Profil Kelas</title>

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
		<a href="<?php echo base_url('profil_kelas');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Edit Profil Kelas</a>
		<a href="<?php echo base_url('profil_kelas');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Edit Profil Kelas</a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
<div class="container">
<?php echo form_open('profil_kelas/update'); ?>
<!--<form method="post" action="<?php //base_url()."/index.php/profil_kelas/update"; ?>">-->
<div class="row">
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input readonly id="nama_kelas" name="nama_kelas" value="<?php echo $nama_kelas ?>" type="text" class="validate">
	  <label for="nama_kelas">Nama Kelas</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="slogan" name="slogan" value="<?php echo $slogan ?>" type="text" class="validate">
	  <label for="slogan">Slogan Kelas</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input readonly id="ruang_kelas" name="ruang_kelas" value="<?php echo $ruang_kelas ?>" type="text" class="validate">
	  <label for="ruang_kelas">Ruang Kelas</label>
	</div>
  </div>
  <div class="col s4 left">
	<button class="waves-effect waves-light btn" type="submit" value="Simpan" name="simpan"> Simpan </button>
 </div>
</div>
<!--</form>-->
<?php echo form_close(); ?>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>