<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Matapelajaran</title>

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
		<a href="<?php echo base_url('matapelajaran_kurikulum');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Edit Matapelajaran</a>
		<a href="<?php echo base_url('matapelajaran_kurikulum');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Edit Matapelajaran</a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<div class="container">
<?php echo form_open( 'matapelajaran_kurikulum/update/'.$ID); ?>
<div class="row card">
  <div class="col s12">
	<div class="input-field col s7">
	  <input id="kode_mapel" name="kode_mapel" value="<?php echo $kode_mapel ?>" type="text" class="validate">
	  <label for="kode_mapel">Kode Matapelajaran</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m10">
	  <input id="nama_pelajaran" name="nama_pelajaran" value="<?php echo $nama_pelajaran ?>" type="text" class="validate">
	  <label for="nama_pelajaran">Matapelajaran</label>
	</div>
  </div>
	<span class="col s12">
		<button class="waves-effect waves-light blue btn right" type="submit" value="daftar" name="daftar"> Simpan </button>
		<br/>
		<br/>
		<br/>
	</span>
</div>
<?php echo form_close(); ?>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>