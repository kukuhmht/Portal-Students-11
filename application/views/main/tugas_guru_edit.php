<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Tugas</title>

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
	  <a href="<?php echo base_url();?>tugas_guru" class="brand-logo hide-on-med-and-down">&nbsp; Edit Tugas </a>
	  <a href="<?php echo base_url();?>tugas_guru" class="hide-on-med-and-up">&nbsp; Edit Tugas </a>
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
<!--end header-->
<br>
<div class="container">
	<div class="row">
	  <form action="<?php echo base_url('tugas_guru/update/'.$ID); ?>" method="post">
		<div class="card z-depth-2 grey lighten-5">
		  <div class="col s12">	
			<div class="input-field col s3 hide-on-med-and-down">
				<select multiple>
				  <option value="" disabled selected>Tidak ada kelas</option>
				  <option value="1">XII RPL 1</option>
				  <option value="2">XII RPL 2</option>
				  <option value="3">XII RPL 3</option>
				</select>
				<label>Pilih Kelas</label>
			</div>
			<div class="input-field col s12 hide-on-med-and-up">
				<select multiple>
				  <option value="" disabled selected>Choose your option</option>
				  <option value="1">XII RPL 1</option>
				  <option value="2">XII RPL 2</option>
				  <option value="3">XII RPL 3</option>
				</select>
				<label>Pilih Kelas</label>
			</div>
		  </div>
			  <div class="col s12">
				<div class="input-field col s6">
				  <input id="judul_tugas" name="judul_tugas" value="<?php echo $judul_tugas ?>" type="text">
				  <label for="judul_tugas">Judul Tugas</label>
				</div>
			  </div>
			  <div class="col s12">
				<div class="input-field">
				  <textarea id="isi_tugas" class="materialize-textarea" name="isi_tugas"><?php echo $isi_tugas ?></textarea>
				  <label for="isi_tugas">Tugas apa yang ingin Anda berikan?</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s5">
				  <input id="tanggal_dikembalikan" value="<?php echo $tanggal_dikembalikan ?>" type="text" name="tanggal_dikembalikan" class="datepicker">
				  <label for="tanggal_dikembalikan">Batas Akhir Tugas</label>
				</div>
			  </div>
			  <button class="btn-floating btn-large halfway-fab waves-effect waves-light green" type="submit" value="simpan" name="simpan"> <i class="material-icons">save</i> </button>
		</div>
	  <?php echo form_close(); ?>
	</div>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>