<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Membuat Jadwal Pelajaran Kelas <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Tambah Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit/'.$namakelas.'/'.$idkelas);?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Tambah Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
<div class="container">
<div class="row">

<!--Jadwal Tab Head-->
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3 green lighten-3"><a class="white-text" href="#senin">Senin</a></li>
        <li class="tab col s3 green lighten-2"><a class="white-text" href="#selasa">Selasa</a></li>
        <li class="tab col s3 yellow lighten-3"><a class="white-text" href="#rabu">Rabu</a></li>
        <li class="tab col s3 yellow lighten-2"><a class="white-text" href="#kamis">Kamis</a></li>
        <li class="tab col s3 red lighten-3"><a class="white-text" href="#jumat">Jumat</a></li>
        <li class="tab col s3 red lighten-2"><a class="white-text" href="#sabtu">Sabtu</a></li>
      </ul>
    </div>
<!--end Jadwal Tab Head-->

	<form method="post" action="<?php echo site_url('jadwalpelajaran_kurikulum/tambah_jadwalpelajaran_kurikulum/');?>">
<!--senin-->
		<div id="senin" class="card col s12 grey lighten-5">
			<div class="card card-title center green lighten-3">
				<span> Senin </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_1 required" name="senin_mapel_1" required class="required">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_1 required" name="senin_ruangkelas_1" required class="required">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_1" name="senin_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_1" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_2" name="senin_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_2" name="senin_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_2" name="senin_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_2" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_3" name="senin_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_3" name="senin_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_3" name="senin_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_3" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_4" name="senin_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_3">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_4" name="senin_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_4" name="senin_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_4" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="no_mapel" name="no_mapel" value="4" />
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_5" name="senin_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_5" name="senin_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_5" name="senin_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_5" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 5-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="senin_mapel_6" name="senin_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="senin_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="senin_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="senin_ruangkelas_6" name="senin_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="senin_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="senin_nama_guru_6" name="senin_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="senin_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="senin_waktu_6" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end senin-->

<!--selasa-->
		<div id="selasa" class="card col s12 grey lighten-5">
			<div class="card card-title center green lighten-2">
				<span> Selasa </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_1" name="selasa_mapel_1" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_1" name="selasa_ruangkelas_1" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_1" name="selasa_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_1" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_2" name="selasa_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_2" name="selasa_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_2" name="selasa_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_2" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_3" name="selasa_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_3" name="selasa_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_3" name="selasa_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_3" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_4" name="selasa_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_4">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_4" name="selasa_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_4" name="selasa_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_4" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_5" name="selasa_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_5" name="selasa_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_5" name="selasa_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_5" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 5-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="selasa_mapel_6" name="selasa_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="selasa_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="selasa_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="selasa_ruangkelas_6" name="selasa_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="selasa_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="selasa_nama_guru_6" name="selasa_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="selasa_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="selasa_waktu_6" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end selasa-->

<!--rabu-->
		<div id="rabu" class="card col s12 grey lighten-5">
			<div class="card card-title center yellow lighten-3">
				<span> Rabu </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_1" name="rabu_mapel_1" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_1" name="rabu_ruangkelas_1" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_1" name="rabu_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_1" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_2" name="rabu_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_2" name="rabu_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_2" name="rabu_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_2" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_3" name="rabu_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_3" name="rabu_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_3" name="rabu_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_3" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_4" name="rabu_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_3">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_4" name="rabu_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_4" name="rabu_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_4" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_5" name="rabu_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_5" name="rabu_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_5" name="rabu_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_5" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 5-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="rabu_mapel_6" name="rabu_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="rabu_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="rabu_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="rabu_ruangkelas_6" name="rabu_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="rabu_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="rabu_nama_guru_6" name="rabu_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="rabu_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="rabu_waktu_6" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end rabu-->

<!--kamis-->
		<div id="kamis" class="card col s12 grey lighten-5">
			<div class="card card-title center yellow lighten-2">
				<span> Kamis </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_1" name="kamis_mapel_1" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_1" name="kamis_ruangkelas_1" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_1" name="kamis_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_1" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_2" name="kamis_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_2" name="kamis_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_2" name="kamis_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_2" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_3" name="kamis_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_3" name="kamis_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_3" name="kamis_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_3" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_4" name="kamis_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_4">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_4" name="kamis_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_4" name="kamis_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_4" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_5" name="kamis_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_5" name="kamis_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_5" name="kamis_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_5" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 5-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="kamis_mapel_6" name="kamis_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="kamis_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="kamis_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="kamis_ruangkelas_6" name="kamis_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="kamis_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="kamis_nama_guru_6" name="kamis_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="kamis_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input name="kamis_waktu_6" id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end kamis-->

<!--jumat-->
		<div id="jumat" class="card col s12 grey lighten-5">
			<div class="card card-title center red lighten-3">
				<span> Jumat </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_1" name="jumat_mapel_1" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_1" name="jumat_ruangkelas_1" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_1" name="jumat_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_1">Waktu</label><br/>
						<input name="jumat_waktu_1" id="jumat_waktu_1" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_2" name="jumat_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_2" name="jumat_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_2" name="jumat_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_2">Waktu</label><br/>
						<input name="jumat_waktu_2" id="jumat_waktu_2" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_3" name="jumat_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_3" name="jumat_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_3" name="jumat_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_3">Waktu</label><br/>
						<input name="jumat_waktu_3" id="jumat_waktu_3" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_4" name="jumat_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_4">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_4" name="jumat_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_4" name="jumat_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_4">Waktu</label><br/>
						<input name="jumat_waktu_4" id="jumat_waktu_4" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_5" name="jumat_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_5" name="jumat_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_5" name="jumat_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_5">Waktu</label><br/>
						<input name="jumat_waktu_5" id="jumat_waktu_5" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="jumat_mapel_6" name="jumat_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="jumat_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="jumat_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="jumat_ruangkelas_6" name="jumat_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="jumat_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="jumat_nama_guru_6" name="jumat_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="jumat_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="jumat_waktu_6">Waktu</label><br/>
						<input name="jumat_waktu_6" id="jumat_waktu_6" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end jumat-->

<!--sabtu-->
		<div id="sabtu" class="card col s12 grey lighten-5">
			<div class="card card-title center red lighten-2">
				<span> Sabtu </span>
			</div>
		<!--Mapel 1-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_1" name="sabtu_mapel_1" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_1"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_1">Matapelajaran 1</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_1" name="sabtu_ruangkelas_1" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_1"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_1" name="sabtu_nama_guru_1" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_1"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_1">Waktu</label><br/>
						<input name="sabtu_waktu_1" id="sabtu_waktu_1" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 1-->
		<!--Mapel 2-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_2" name="sabtu_mapel_2" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_2"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_2">Matapelajaran 2</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_2" name="sabtu_ruangkelas_2" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_2"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_2" name="sabtu_nama_guru_2" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_2"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_2">Waktu</label><br/>
						<input name="sabtu_waktu_2" id="sabtu_waktu_2" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 2-->
		<!--Mapel 3-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_3" name="sabtu_mapel_3" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_3"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_3">Matapelajaran 3</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_3" name="sabtu_ruangkelas_3" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_3"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_3" name="sabtu_nama_guru_3" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_3"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_3">Waktu</label><br/>
						<input name="sabtu_waktu_3" id="sabtu_waktu_3" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 3-->
		<!--Mapel 4-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_4" name="sabtu_mapel_4" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_4"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_4">Matapelajaran 4</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_4" name="sabtu_ruangkelas_4" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_4"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_4" name="sabtu_nama_guru_4" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_4"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_4">Waktu</label><br/>
						<input name="sabtu_waktu_4" id="sabtu_waktu_4" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 4-->
		<!--Mapel 5-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_5" name="sabtu_mapel_5" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_5"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_5">Matapelajaran 5</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_5" name="sabtu_ruangkelas_5" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_5"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_5" name="sabtu_nama_guru_5" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_5"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_5">Waktu</label><br/>
						<input name="sabtu_waktu_5" id="sabtu_waktu_5" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 5-->
		<!--Mapel 6-->
			<div class="col s12 m6">
				<div class="card col s12">
					<div class="input-field">
					  <select id="sabtu_mapel_6" name="sabtu_mapel_6" class="form-control">
						<option>Pilih Matapelajaran</option>
							<?php foreach ($mapel as $row) {?>
						<option name="sabtu_mapel_6"> <?php echo $row->nama_pelajaran ?> </option>
							<?php } ?>
					  </select>
					  <label for="sabtu_mapel_6">Matapelajaran 6</label>
					</div>
					<div class="input-field col s3 left">
					 <select id="sabtu_ruangkelas_6" name="sabtu_ruangkelas_6" class="form-control">
						<option>Pilih Ruang Kelas</option>
							<?php foreach ($ruangkelas as $row) {?>
						<option name="sabtu_ruangkelas_6"> <?php echo $row->ruang_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Ruang Kelas</label>
					</div>
					<div class="input-field col s7 right">
						<select id="sabtu_nama_guru_6" name="sabtu_nama_guru_6" class="form-control">
						  <option>Pilih Guru</option>
							<?php foreach ($dataguru as $row) {?>
						  <option name="sabtu_nama_guru_6"> <?php echo $row->nama_guru ?> </option>
							<?php } ?>
						</select>
						<label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="sabtu_waktu_6">Waktu</label><br/>
						<input name="sabtu_waktu_6" id="sabtu_waktu_6" class="timepicker" type="time">
					</div>
						
						<input hidden type="text" id="kode_kelas" name="kode_kelas" value="<?php echo $idkelas ?>" />
						<input hidden type="text" id="namakelas" name="namakelas" value="<?php echo $namakelas ?>" />
				</div>
			</div>
		<!--end Mapel 6-->
		</div>
<!--end sabtu-->

<!--Button Tambah Jadwal Pelajaran-->
	<div class="fixed-action-btn">
		<input type="submit" value="simpan" class="btn-large waves-effect waves-light blue" />
	</div>
<!--end Button Tambah Jadwal Pelajaran-->
	</form>
</div>
</div>
<?php $this->load->view('layout/footer');?>

<script>
function myFunction() {
    var x = document.getElementById("required").required;
    document.getElementById("demo").innerHTML = x;
}
</script>