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
    <div class="nav-wrapper blue">
	  <a href="<?php echo base_url();?>absensikelas_add" class="brand-logo hide-on-med-and-down">&nbsp; Edit Siswa </a>
	  <a href="<?php echo base_url();?>absensikelas_add" class="hide-on-med-and-up">&nbsp; Edit Siswa </a>
    </div>
  </nav>
</div>
<!--end header-->
<br>
<div class="container">
<?php echo form_open( 'absensikelas_add/update'); ?>
<div class="row card">
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input disabled id="nomor_induk" name="nomor_induk" value="<?php echo $nomor_induk ?>" type="number" id="disabled">
	  <label for="nomor_induk">Nomor Induk</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input disabled id="nama_siswa" name="nama_siswa" value="<?php echo $nama_siswa ?>" type="text" id="disabled">
	  <label for="nama_siswa">Nama Siswa</label>
	</div>
	<div class="input-field col s12 m6">
	  <input disabled id="nama_panggilan" name="nama_panggilan" value="<?php echo $nama_panggilan ?>" type="text" id="disabled">
	  <label for="nama_panggilan">Nama Panggilan</label>
	</div>
  </div>
  <div class="col s12">
	<p>
      <input disabled="disabled" type="checkbox" id="l" />
      <label for="l">Laki-Laki</label>&nbsp;&nbsp;
      <input type="checkbox" id="p" />
      <label disabled="disabled" for="p">Perempuan</label>
    </p>
	<div class="input-field col s12 m6">
	  <textarea disabled="disabled" id="alamat" name="alamat" value="<?php echo $alamat ?>" class="materialize-textarea"></textarea>
	  <label for="alamat">Alamat</label>
	</div>
	<div class="input-field col s12 m6">
	  <input disabled="disabled" id="nomor_hp" name="nomor_hp" value="<?php echo $nomor_hp ?>" type="text">
	  <label for="nomor_hp">Nomor telepon</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12 m6">
	  <input disabled="disabled" id="jabatan" name="jabatan" value="<?php echo $jabatan ?>" type="text" id="disabled">
	  <label for="batan">Jabatan</label>
	</div>
  </div>
  <div class="col s12">
	<div class="input-field col s12">
	  <textarea disabled="disabled" id="sifat" name="sifat" value="<?php echo $sifat ?>" class="materialize-textarea"></textarea>
	  <label for="sifat">Sifat</label>
	</div>
  </div>
  <div class="col s4 left">
	<button class="waves-effect waves-light btn" type="submit" value="tambah" name="tambah"> Simpan </button>
 </div>
</div>
<?php echo form_close(); ?>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>