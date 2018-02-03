<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $title ?></title>

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
		<a href="<?php echo base_url('strukturorganisasi/v_tambah');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?></a>
		<a href="<?php echo base_url('strukturorganisasi/v_tambah');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?></a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<br>
<br>
<div class="container">
<?php echo form_open('strukturorganisasi/update_jabatan/'.$ID); ?>
<div class="row card">
  <div class="col s12">
  <br/>
  <br/>
	<div class="input-field col s12">
	  <input readonly id="nama_siswa" name="nama_siswa" value="<?php echo $nama_siswa ?>" type="text">
	  <label for="nama_siswa">Nama Siswa</label>
	</div>
	<div class="input-field col s12">
	  <select id="jabatan" name="jabatan" class="form-control">
		<option><?php echo $jabatan ?></option>
		<option value="">Tidak Memiliki Jabatan</option>
		<option value="Ketua Murid"> Ketua Murid </option>
		<option value="Wakil Murid"> Wakil Murid </option>
		<option value="Ketua Sekretaris"> Ketua Sekretaris </option>
		<option value="Wakil Sekretaris"> Wakil Sekretaris </option>
		<option value="Ketua Absensi"> Ketua Absensi </option>
		<option value="Wakil Absensi"> Wakil Absensi </option>
		<option value="Ketua Sie Rohani"> Ketua Sie Rohani </option>
		<option value="Wakil Sie Rohani"> Wakil Sie Rohani </option>
		<option value="Ketua Sie Keamanan"> Ketua Sie Keamanan </option>
		<option value="Wakil Sie Keamanan"> Wakil Sie Keamanan </option>
		<option value="Ketua Sie Bendahara"> Ketua Sie Bendahara </option>
		<option value="Wakil Sie Bendahara"> Wakil Sie Bendahara </option>
		<option value="Ketua Sie Kebersihan"> Ketua Sie Kebersihan </option>
		<option value="Wakil Sie Kebersihan"> Wakil Sie Kebersihan </option>
		<option value="Ketua Sie Olahraga"> Ketua Sie Olahraga </option>
		<option value="Wakil Sie Olahraga"> Wakil Sie Olahraga </option>
		<option value="Ketua Sie Peralatan"> Ketua Sie Peralatan </option>
		<option value="Wakil Sie Peralatan"> Wakil Sie Peralatan </option>
	  </select>
	  <label for="jabatan">Jabatan</label>
	</div>
  </div>
  <div class="col s12 center">
	<button class="waves-effect waves-light btn" type="submit" value="tambah" name="tambah"> Simpan </button>
	<br/>
	<br/>
	<br/>
  </div>
</div>
<?php echo form_close(); ?>
</div>
<br>
<br>
</main>

<?php $this->load->view('layout/footer'); ?>