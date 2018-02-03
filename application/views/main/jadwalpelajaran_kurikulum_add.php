<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tambah Jadwal Pelajaran Kelas <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Tambah Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Tambah Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>

<div class="container">
<div class="row">
  <form action="" method="post">
	<div class="row">
<!--senin-->
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Senin </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="senin" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['senin'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   "				
				   <div class='card col s12'>
					<div class='input-field'>
					  <input id='matapelajaran' type='text'>
					  <label for='matapelajaran'>Matapelajaran</label>
					</div>
					<div class='input-field col s3 left'>
					 <select>
					   <option value='' disabled selected>Belum ada ruang kelas</option>
					   <option value='1'>BTI 1</option>
					   <option value='2'>BTI 2</option>
					   <option value='3'>BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class='input-field col s7 right'>
					 <select>
					   <option value=''></option>
                       <div class='input-field col s12'>
						
					   </div>
					 </select>
					 <label>Guru</label>
					</div>
					<div class='input-field col s4'>
									<label for='timepicker_ampm_dark'>Waktu</label><br/>
									<input id='timepicker_ampm_dark' class='timepicker' type='time'>
					</div>
				   </div>
				   ";
				  }
				 }
				?>
			</div>
		</div>
<!--end senin-->

<!--Selasa-->
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Selasa </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="selasa" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['selasa'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   '				
				   <div class="card col s12">
					<div class="input-field">
					  <input id="matapelajaran" type="text">
					  <label for="matapelajaran">Matapelajaran</label>
					</div>
					<div class="input-field col s3 left">
					 <select>
					   <option value="" disabled selected>Belum ada ruang kelas</option>
					   <option value="1">BTI 1</option>
					   <option value="2">BTI 2</option>
					   <option value="3">BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class="input-field col s7 right">
					 <select>
					   <option value="" disabled selected>Belum ada Guru pengajar</option>
					   <option value="1" data-icon="images/sample-1.jpg" class="left circle">Euis Nursibahhayati, S.pd</option>
					   <option value="2" data-icon="images/sample-1.jpg" class="left circle">Yudi Subekti, S.Kom</option>
					   <option value="3" data-icon="images/sample-1.jpg" class="left circle">Ani Nuraeni, S.Kom</option>
					 </select>
					 <label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
				   </div>';
				  }
				 }
				?>
			</div>
		</div>
<!--end selasa-->
	</div>
<!--rabu-->
	<div class="row">
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Rabu </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="rabu" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['rabu'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   '				
				   <div class="card col s12">
					<div class="input-field">
					  <input id="matapelajaran" type="text">
					  <label for="matapelajaran">Matapelajaran</label>
					</div>
					<div class="input-field col s3 left">
					 <select>
					   <option value="" disabled selected>Belum ada ruang kelas</option>
					   <option value="1">BTI 1</option>
					   <option value="2">BTI 2</option>
					   <option value="3">BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class="input-field col s7 right">
					 <select>
					   <option value="" disabled selected>Belum ada Guru pengajar</option>
					   <option value="1" data-icon="images/sample-1.jpg" class="left circle">Euis Nursibahhayati, S.pd</option>
					   <option value="2" data-icon="images/sample-1.jpg" class="left circle">Yudi Subekti, S.Kom</option>
					   <option value="3" data-icon="images/sample-1.jpg" class="left circle">Ani Nuraeni, S.Kom</option>
					 </select>
					 <label>Guru</label>
					</div>
					<div class="input-field col s4">
									<label for="timepicker_ampm_dark">Waktu</label><br/>
									<input id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
				   </div>';
				  }
				 }
				?>
			</div>
		</div>
<!--end rabu-->

<!--kamis-->
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Kamis </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="kamis" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['kamis'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   '				
				   <div class="card col s12">
					<div class="input-field">
					  <input id="matapelajaran" type="text">
					  <label for="matapelajaran">Matapelajaran</label>
					</div>
					<div class="input-field col s3 left">
					 <select>
					   <option value="" disabled selected>Belum ada ruang kelas</option>
					   <option value="1">BTI 1</option>
					   <option value="2">BTI 2</option>
					   <option value="3">BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class="input-field col s7 right">
					 <select>
					   <option value="" disabled selected>Belum ada Guru pengajar</option>
					   <option value="1" data-icon="images/sample-1.jpg" class="left circle">Euis Nursibahhayati, S.pd</option>
					   <option value="2" data-icon="images/sample-1.jpg" class="left circle">Yudi Subekti, S.Kom</option>
					   <option value="3" data-icon="images/sample-1.jpg" class="left circle">Ani Nuraeni, S.Kom</option>
					 </select>
					 <label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
				   </div>';
				  }
				 }
				?>
			</div>
		</div>
<!--end kamis-->
	</div>
<!--jumat-->
	<div class="row">
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Jumat </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="jumat" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['jumat'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   '				
				   <div class="card col s12">
					<div class="input-field">
					  <input id="matapelajaran" type="text">
					  <label for="matapelajaran">Matapelajaran</label>
					</div>
					<div class="input-field col s3 left">
					 <select>
					   <option value="" disabled selected>Belum ada ruang kelas</option>
					   <option value="1">BTI 1</option>
					   <option value="2">BTI 2</option>
					   <option value="3">BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class="input-field col s7 right">
					 <select>
					   <option value="" disabled selected>Belum ada Guru pengajar</option>
					   <option value="1" data-icon="images/sample-1.jpg" class="left circle">Euis Nursibahhayati, S.pd</option>
					   <option value="2" data-icon="images/sample-1.jpg" class="left circle">Yudi Subekti, S.Kom</option>
					   <option value="3" data-icon="images/sample-1.jpg" class="left circle">Ani Nuraeni, S.Kom</option>
					 </select>
					 <label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
				   </div>';
				  }
				 }
				?>
			</div>
		</div>
<!--end jumat-->

<!--sabtu-->
		<div id="card_matapelajaran" class="card col s12 m6">
			<div class="card card-title center grey lighten-5">
				<span> Sabtu </span>
			</div>
			<div class="col s12">
				<div class="card col s12">
				<form method="post" action="">
					<div class="input-field">
					  <input id="matapelajaran" name="matapelajaran" type="number">
					  <label for="matapelajaran">Jumlah Matapelajaran</label>
					</div>
					<input type="submit" class="btn" name="sabtu" value="submit">
				</form>
				</div>

				<?php
				 if(isset($_POST['sabtu'])){
				  $no = $_POST['matapelajaran'];
				  for($i=1;$i<=$no;$i++){
				   echo 
				   '				
				   <div class="card col s12">
					<div class="input-field">
					  <input id="matapelajaran" type="text">
					  <label for="matapelajaran">Matapelajaran</label>
					</div>
					<div class="input-field col s3 left">
					 <select>
					   <option value="" disabled selected>Belum ada ruang kelas</option>
					   <option value="1">BTI 1</option>
					   <option value="2">BTI 2</option>
					   <option value="3">BTI 3</option>
					 </select>
					 <label>Ruang</label>
					</div>
					<div class="input-field col s7 right">
					 <select>
					   <option value="" disabled selected>Belum ada Guru pengajar</option>
					   <option value="1" data-icon="images/sample-1.jpg" class="left circle">Euis Nursibahhayati, S.pd</option>
					   <option value="2" data-icon="images/sample-1.jpg" class="left circle">Yudi Subekti, S.Kom</option>
					   <option value="3" data-icon="images/sample-1.jpg" class="left circle">Ani Nuraeni, S.Kom</option>
					 </select>
					 <label>Guru</label>
					</div>
					<div class="input-field col s4">
						<label for="timepicker_ampm_dark">Waktu</label><br/>
						<input id="timepicker_ampm_dark" class="timepicker" type="time">
					</div>
				   </div>';
				  }
				 }
				?>
			</div>
		</div>
<!--end sabtu-->
	</div>
<!--Button Tambah Jadwal Pelajaran-->
	<div class="fixed-action-btn">
		<a href="#" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Simpan">
		  <i class="large material-icons">save</i>
		</a>
	</div>
<!--end Button Tambah Jadwal Pelajaran-->
</form>
</div>
</div>

<?php $this->load->view('layout/footer'); ?>