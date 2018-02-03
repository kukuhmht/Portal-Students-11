<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $title ?> <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?> <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?> <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<br>
<br>
<div class="container">
<div class="row">
<?php echo form_open( 'jadwalpelajaran_kurikulum/update_walikelas/'.$namakelas.'/'.$idkelas.'/'.$id); ?>
	<div class="col s3">
	</div>
	<div class="card col s12 m6">
	  <br/><br/>
	  <div class="row">
		<div class="input-field col s12">
			<select id="wali_kelas" name="wali_kelas" class="form-control">
			  <option><?php echo $wali_kelas ?></option>
				<?php foreach ($walikelas as $row) {?>
			  <option name="wali_kelas"> <?php echo $row->nama_guru ?> </option>
				<?php } ?>
			</select>
			<label>Wali Kelas</label>
		</div>
	  </div>
		<center>
			<button class="waves-effect waves-light btn blue" type="submit" value="tambah" name="tambah"> Simpan </button>
		</center>
		<br>
		<br>
	</div>
	<div class="col s3">
	</div>
<?php echo form_close(); ?>
</div>
</div>
<br>
<br>
<br>
<br>
<?php echo $this->load->view('layout/footer');?>