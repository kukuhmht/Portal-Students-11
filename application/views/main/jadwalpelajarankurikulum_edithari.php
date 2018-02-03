<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Edit Jadwal Pelajaran Hari <?php echo $hari ?> Kelas <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Edit Jadwal Pelajaran Hari <?php echo $hari ?> Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Edit Jadwal Pelajaran Hari <?php echo $hari ?> Kelas <?php echo $namakelas ?></a>
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
<?php echo form_open('jadwalpelajaran_kurikulum/update_hari/'.$namakelas."/".$idkelas."/".$hari."/".$id); ?>
<div class="row card">
<br>
	<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
	<input hidden type="text" id="hari" name="hari" value="<?php echo $hari ?>" />
	<input hidden type="text" id="id" name="id" value="<?php echo $id ?>" />
  <div class="col s12">
	<div class="col s12 m5 input-field">
	  <select id="kode_mapel required" name="kode_mapel" required class="required">
		<option><?php echo $kode_mapel ?></option>
			<?php foreach ($mapel as $row) {?>
		<option name="kode_mapel"> <?php echo $row->nama_pelajaran ?> </option>
			<?php } ?>
	  </select>
	  <label for="kode_mapel">Matapelajaran</label>
	</div>
  </div>
  <div class="col s12">
	<div class="col s12 m4 input-field">
	  <select id="kode_guru required" name="kode_guru" required class="required">
		<option><?php echo $kode_guru ?></option>
			<?php foreach ($mapel_guru as $row) {?>
		<option name="kode_guru"> <?php echo $row->nama_guru ?> </option>
			<?php } ?>
	  </select>
	  <label for="kode_guru">Nama Guru</label>
	</div>
	<div class="col s12 m4 input-field">
	  <select id="ruang_kelas required" name="ruang_kelas" required class="required">
		<option><?php echo $ruang_kelas ?></option>
			<?php foreach ($ruangkelas as $row) {?>
		<option name="ruang_kelas"> <?php echo $row->ruang_kelas ?> </option>
			<?php } ?>
	  </select>
	  <label for="ruang_kelas">Ruang Kelas</label>
	</div>
	<div class="input-field col s12 m4">
		<label for="jam">Waktu</label><br><input name="jam" id="jam" required class="timepicker" type="time" value="<?php echo $jam ?>">
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