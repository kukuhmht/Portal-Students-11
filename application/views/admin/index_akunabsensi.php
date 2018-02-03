<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $title ?></title>

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
		<a href="<?php echo base_url('admin/user');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?> </a>
		<a href="<?php echo base_url('admin/user');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?> </a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
<br>
 <div class="container">
 <div class="row">
<!--Belum Terdaftar-->
	<div class="row">  
		<div class="col s12 m5">
          <div class="card">
			<div class="card-image">
			 <a href="<?php echo base_url('admin/user_absensi/akunabsensi_belumterdaftar/');?>" class="waves-effect waves-light">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
			  <span class="card-title">Akun Absensi Belum Terdaftar</span>
			 </a>
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">keyboard_arrow_right</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
			  <b> Data Akun Absensi yang Belum Terdaftar </b>
			  <p> agar Absensi dapat login atau memiliki akun di aplikasi Portal Student.</p>
			  <p> hanya Admin yang bisa membuat username dan juga password. </p>
			  <p> buatlah akun Absensi sesuai dengan Nama atau NIS Siswa tersebut. </p>
			</div>
		  </div>
        </div>
	
<!--Sudah Terdaftar--> 
		<div class="col s12 m5 right">
          <div class="card">
			<div class="card-image">
			 <a href="<?php echo base_url('admin/user_absensi/akunabsensi_sudahterdaftar/');?>" class="waves-effect waves-light">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
			  <span class="card-title">Akun Absensi Sudah Terdaftar</span>
			 </a>
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">keyboard_arrow_right</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
			  <b> Data Akun Absensi yang Sudah Terdaftar </b>
			  <p> Sie Absensi disini sudah terdaftar di aplikasi Portal Student.</p>
			  <p> Admin bisa melakukan perubahan Username dan juga Password disini. </p>
			</div>
		  </div>
        </div>
	</div>
 </div>
 </div>
</main>

<?php $this->load->view('layout/footer');?>