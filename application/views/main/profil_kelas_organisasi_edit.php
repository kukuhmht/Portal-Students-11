<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Kelas</title>

  <!-- CSS  -->
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
    <div class="nav-wrapper">
	  <a href="<?php echo base_url();?>profil_kelas" class="brand-logohide-on-med-and-down">&nbsp; Edit Kelas</a>
	  <a href="<?php echo base_url();?>profil_kelas" class="hide-on-med-and-up">&nbsp; Edit Kelas</a>
    </div>
  </nav>
</div>
<ul id="slide-out" class="side-nav">
    <li>
	  <div class="userView">
		<div class="background">
			<img src="https://newevolutiondesigns.com/images/freebies/google-material-design-wallpaper-1.jpg">
		</div>
		<a href="#!user"><img class="circle" src="https://www.edumor.com/uploads/instance/57690c9a38b69/pic_logo.png"></a>
		<a href="#!name"><span class="white-text name">XI-RPL 2</span></a>
		<a href="#!email"><span class="white-text email">xi_rpl2@gmail.com</span></a>
      </div>
	</li>
    <li><a href="#!"><i class="material-icons">insert_emoticon</i>Menu Utama</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Sub Menu</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Menu Utama</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Sub Menu</a></li>
</ul>
<!--end Header-->
<br>
<div class="container">
<?php echo form_open( 'profil_kelas/edit_organisasi'); ?>
<div class="row">
	<div class="input-field col s12 m6">
		<select class="icons">
		  <option value="km" disabled selected>Pilih Ketua Murid</option>
		  <?php foreach($namasiswa as $row) { ?>
			<option value="km" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
		  <?php } ?>
		</select>
		<label for="km">Ketua Murid</label>
	</div>
</div>
<?php echo form_close(); ?>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>