<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $title ?> <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('admin/user_absensi');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('admin/user_absensi');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
 <div class="container">
 <div class="row">
<form class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">search</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Cari Kelas</label>
      </div>
	</div>
</form>
<!--Kelas-->
	<div class="row">
  <?php foreach($kelas as $row) {?>
  
		<div class="col s12 m4">
          <div class="card">
			<div class="card-image">
			 <a href="<?php echo base_url('admin/user_absensi/view_akunabsensi_belumdaftar/'.$row->nama_kelas.'/'.$row->ID);?>" class="waves-effect waves-light">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
			  <span class="card-title"><?php echo $row->nama_kelas?></span>
			 </a>
			</div>
          </div>
        </div>
  <?php } ?>
	</div>
 </div>
 </div>
</main>

<?php $this->load->view('layout/footer');?>