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
<main>
<!--Header-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('dashboard');?>" class="brand-logo hide-on-med-and-down">&nbsp; <?php echo $title ?> </a>
		<a href="<?php echo base_url('dashboard');?>" class="hide-on-med-and-up">&nbsp; <?php echo $title ?> </a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
<main>
<div class="container">
<div class="row">
<!--User Admin-->
	<div class="col s12">
		<div class="col s2 m2">
		</div>
		<a href="user_admin">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Admin </center>
			<center class="card-title hide-on-med-and-down">Admin</center>
		  </div>
		</div>
		</a>
		<!--User Kurikulum-->
		<a href="user_kurikulum">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Kurikulum </center>
			<center class="card-title hide-on-med-and-down">Kurikulum</center>
		  </div>
		</div>
		</a>
		<div class="col s2 m2">
		</div>
	</div>
	<div class="col s12">
<!--User Kesiswaan-->
		<a href="user_kesiswaan">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Kesiswaan </center>
			<center class="card-title hide-on-med-and-down">Kesiswaan</center>
		  </div>
		</div>
		</a>
<!--User Guru-->
		<a href="user_guru">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Guru </center>
			<center class="card-title hide-on-med-and-down">Guru</center>
		  </div>
		</div>
		</a>
<!--User BK-->
		<a href="user_bk">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> BK </center>
			<center class="card-title hide-on-med-and-down">BK</center>
		  </div>
		</div>
		</a>
	</div>
	<div class="col s12">
<!--User Walikelas-->
		<a href="user_walikelas">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Walikelas </center>
			<center class="card-title hide-on-med-and-down">Walikelas</center>
		  </div>
		</div>
		</a>
<!--User Absensi-->
		<a href="user_absensi">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Absensi </center>
			<center class="card-title hide-on-med-and-down">Absensi</center>
		  </div>
		</div>
		</a>
<!--User Siswa-->
		<a href="user_Siswa">
		<div class="col s4 m4">
		  <div class="transparent">
			<div class="card-image">
			  <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
			</div>
			<center class="subjudulsmall-menu hide-on-med-and-up"> Siswa </center>
			<center class="card-title hide-on-med-and-down">Siswa</center>
		  </div>
		</div>
		</a>
	</div>
</div>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>