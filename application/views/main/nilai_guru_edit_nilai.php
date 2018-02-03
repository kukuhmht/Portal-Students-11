<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Nilai</title>

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
		<a href="<?php echo base_url('nilai_guru/lihat_nilai_siswa/'.$namakelas.'/'.$idkelas.'/'.$id_siswa);?>" class="brand-logo hide-on-med-and-down">&nbsp; Edit Nilai</a>
		<a href="<?php echo base_url('nilai_guru/lihat_nilai_siswa/'.$namakelas.'/'.$idkelas.'/'.$id_siswa);?>" class="hide-on-med-and-up">&nbsp; Edit Nilai</a>
	  </div>
	</nav>
</div>
<!--end header-->
<br>
<br>
<br>
<br>
<br>
<div class="container">
<?php echo form_open('nilai_guru/update_nilai/'.$namakelas."/".$idkelas."/".$id_siswa."/".$ID); ?>
<div class="row card">
<br>
	<input hidden type="text" id="ID" name="ID" value="<?php echo $id ?>" />
	<input hidden type="text" id="idkelas" name="idkelas" value="<?php echo $idkelas ?>" />
	<input hidden type="text" id="id_kelas" name="id_kelas" value="<?php echo $namakelas ?>" />
	<input hidden type="text" id="id_siswa" name="id_siswa" value="<?php echo $id_siswa ?>" />
	<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
	<input hidden type="text" id="semester" name="semester" value="<?php echo $semester ?>" />
	<input hidden type="text" id="ujian" name="ujian" value="uts" />
  <div class="col s12">
	<div class="input-field col s12 m4">
	  <input id="mapel" name="mapel" value="<?php echo $mapel ?>" type="text" class="validate">
	  <label for="mapel">Matapelajaran</label>
	</div>
	<div class="input-field col s12 m4">
	  <input id="pengetahuan" name="pengetahuan" value="<?php echo $pengetahuan ?>" type="text" class="validate">
	  <label for="pengetahuan">Nilai Pengetahuan</label>
	</div>
	<div class="input-field col s12 m4">
	  <input id="keterampilan" name="keterampilan" value="<?php echo $keterampilan ?>" type="text" class="validate">
	  <label for="keterampilan">Nilai Keterampilan</label>
	</div>
  </div>
  <div class="col s12 center">
	<button class="waves-effect waves-light btn" type="submit" value="update" name="update"> Simpan </button>
	<br/>
	<br/>
  </div>
</div>
<?php echo form_close(); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</main>

<?php $this->load->view('layout/footer'); ?>