<!--========================================HEAD================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $title?></title>

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
<!--======================================END HEAD==============================================-->
<!--=======================================HEADER===============================================-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('dashboard'); ?>" class="brand-logo hide-on-med-and-down">&nbsp; <?php echo $title ?></a>
		<a href="<?php echo base_url('dashboard'); ?>" class="hide-on-med-and-up">&nbsp; <?php echo $title ?></a>
	  </div>
	</nav>
</div>
<!--=====================================END HEADER=============================================-->
<br>
<div class="container">
<div class="row">
<!--Button Tambah Jadwal Pelajaran-->
<div class="fixed-action-btn">
	<a href="<?php echo base_url('strukturorganisasi/v_tambah');?>" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Edit Struktur Organisasi">
	  <i class="large material-icons">edit</i>
	</a>
</div>
<!--end Button Tambah Jadwal Pelajaran-->
<!--Struktur Organisasi-->	
	<div class="card col s12">
<!--KM-->
			<div class="row">
				<div class="col s12 m4 left">				  
				  <div class="card">
					<div class="card-image">
					  <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/background.jpg" />
					  <span class="card-title">Ketua Murid</span>
					</div>
					<div class="card-content">
						<?php foreach($km as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
				  </div>
				</div>
<!--end KM-->
<!--Wakil KM-->
				<div class="col s12 m4 right">
				  <div class="card">
					<div class="card-image">
					  <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/background.jpg" />
					  <span class="card-title">Wakil Ketua Murid</span>
					</div>
					<div class="card-content">
						<?php foreach($wkm as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
				  </div>
				</div>
			</div>
<!--end Wakil KM-->
<!--Sekretaris-->
			<div class="row">
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sekretaris</span>
					</div>
					<div class="card-content">
						<?php foreach($sekretaris as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sekretaris<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($sekretaris as $row) { ?>
						  <li>Sekretaris: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wsekretaris as $row) { ?>
						  <li>Wakil Sekretaris: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end sekretaris-->
<!--Absensi-->
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Absensi</span>
					</div>
					<div class="card-content">
						<?php foreach($absensi as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Absensi<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($absensi as $row) { ?>
						  <li>Absensi: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wabsen as $row) { ?>
						  <li>Wakil Absensi: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end Absensi-->
<!--Rohani-->
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Rohani</span>
					</div>
					<div class="card-content">
						<?php foreach($ksrohani as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Rohani<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($ksrohani as $row) { ?>
						  <li>Sie Rohani: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wksrohani as $row) { ?>
						  <li>Wakil Sie Rohani: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
			</div>
<!--end Rohani-->
<!--Keamanan-->
			<div class="row">
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Keamanan</span>
					</div>
					<div class="card-content">
						<?php foreach($keamanan as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Keamanan<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($keamanan as $row) { ?>
						  <li>Sie Keamanan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wkeamanan as $row) { ?>
						  <li>Wakil Sie Keamanan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end Keamanan-->
<!--Bendahara-->
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Bendahara</span>
					</div>
					<div class="card-content">
						<?php foreach($bendahara as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Bendahara<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($bendahara as $row) { ?>
						  <li>Sie Bendahara: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wbendahara as $row) { ?>
						  <li>Wakil Sie Bendahara: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end Bendahara-->
<!--Kebersihan-->
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Kebersihan</span>
					</div>
					<div class="card-content">
						<?php foreach($kebersihan as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Kebersihan<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($kebersihan as $row) { ?>
						  <li>Sie Kebersihan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wkebersihan as $row) { ?>
						  <li>Wakil Sie Kebersihan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
			</div>
<!--end Kebersihan-->
<!--Olahraga-->
			<div class="row">
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Olahraga</span>
					</div>
					<div class="card-content">
						<?php foreach($olahraga as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Olahraga<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($olahraga as $row) { ?>
						  <li>Sie Olahraga: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wolahraga as $row) { ?>
						  <li>Wakil Sie Olahraga: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end Olahraga-->
<!--Peralatan-->
				<div class="col s12 m4">
				  <div class="card">
					<div class="card-image">
					  <img src="<?php echo base_url();?>assets/images/background.jpg">
					  <span class="card-title">Sie Peralatan</span>
					</div>
					<div class="card-content">
						<?php foreach($peralatan as $row) { ?>
					  <span class="card-title activator grey-text text-darken-4"><?php echo $row->nama_siswa ?><i class="material-icons right">keyboard_arrow_right</i></span>
						<?php } ?>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Sie Peralatan<i class="material-icons right">close</i></span>
						<ul>
							<?php foreach($peralatan as $row) { ?>
						  <li>Sie Peralatan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
							<?php foreach($wperalatan as $row) { ?>
						  <li>Wakil Sie Peralatan: <?php echo $row->nama_siswa ?> </li>
							<?php } ?>
						</ul>
					</div>
				  </div>
				</div>
<!--end Peralatan-->
			</div>
<!--end Strukur Organisasi-->
	</div>
	
<!--========================================================MODAL=============================================================-->
	<!-- Modal Trigger>
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a-->

	<!-- Modal Struktur Organisasi -->
	<div id="organisasi" class="modal modal-fixed-footer">
	  <div class="modal-content">
		<h4>Edit Struktur Organisasi Kelas XI-RPL 2</h4>
		<form action="<?php echo base_url();?>profil_kelas/simpan" method="POST">
		<div class="row">
	  <!--KM-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="km" disabled selected>Pilih Ketua Murid</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="km" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="km">Ketua Murid</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wkm" disabled selected>Pilih Wakil Ketua Murid</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wkm" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wkm">Wakil Ketua Murid</label>
			</div>
		  </div>
	  
	  <!--Sekretaris-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="sekretaris" disabled selected>Pilih Ketua Sekretaris</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="sekretaris" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="sekretaris">Ketua Sekretaris</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wsekretaris" disabled selected>Pilih Wakil Sekretaris</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wsekretaris" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wsekretaris">Wakil Sekretaris</label>
			</div>
		  </div>
	  
	  <!--Absensi-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="absensi" disabled selected>Pilih Ketua Absensi</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="absensi" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="absensi">Ketua Absensi</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wabsen" disabled selected>Pilih Wakil Absensi</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wabsen" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wabsen">Wakil Absensi</label>
			</div>
		  </div>
		  
	  <!--Bendahara-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="absensi" disabled selected>Pilih Ketua Bendahara</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="bendahara" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="absensi">Ketua Bendahara</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wbendahara" disabled selected>Pilih Wakil Bendahara</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wbendahara" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wabsen">Wakil Bendahara</label>
			</div>
		  </div>
		  
	  <!--Seksi Rohani-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="ksrohani" disabled selected>Pilih Ketua Seksi Rohani</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="ksrohani" dat-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="ksrohani">Ketua Seksi Rohani</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wksrohani" disabled selected>Pilih Wakil Seksi Rohani</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wksrohani" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wksrohani">Wakil Seksi Rohani</label>
			</div>
		  </div>
		  
	  <!--Seksi Keamanan-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="keamanan" disabled selected>Pilih Ketua Seksi Keamanan</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="keamanan" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="keamanan">Ketua Seksi Keamanan</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wkeamanan" disabled selected>Pilih Wakil Seksi Keamanan</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wkeamanan" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wkeamanan">Wakil Seksi Keamanan</label>
			</div>
		  </div>
		  
	  <!--Seksi Kebersihan-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="kebersihan" disabled selected>Pilih Ketua Seksi Kebersihan</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="kebersihan" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="kebersihan">Ketua Seksi Kebersihan</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wkebersihan" disabled selected>Pilih Wakil Seksi Kebersihan</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wkebersihan" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wkebersihan">Wakil Seksi Kebersihan</label>
			</div>
		  </div>
		  
	  <!--Seksi Olahraga-->
		  <div class="col s12">
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="olahraga" disabled selected>Pilih Ketua Seksi Olahraga</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="olahraga" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="olahraga">Ketua Seksi Olahraga</label>
			</div>
			<div class="input-field col s12 m6">
				<select class="icons">
				  <option value="wolahraga" disabled selected>Pilih Wakil Seksi Olahraga</option>
				  <?php foreach($datasiswa as $row) { ?>
					<option value="wolahraga" data-icon="images/sample-1.jpg" class="left circle"><?php echo $row->nama_siswa ?></option>
				  <?php } ?>
				</select>
				<label for="wolahraga">Wakil Seksi Olahraga</label>
			</div>
		  </div>
		</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-light btn-flat">Simpan</a>
	  </div>
	</div>
</div>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>