<!DOCTYPE html>
<html lang="ind">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tambah Data Nilai Siswa</title>

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
		<a href="<?php echo base_url('nilai_guru');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Data Nilai Siswa <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('nilai_guru');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Data Nilai Siswa <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>

<div class="container">
<div class="row">
	<div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Nomor Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
			  <th><th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td> <?php echo $row->nama_siswa ?> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
			<td>
				<a href="<?php echo base_url('nilai_guru/lihat_nilai_siswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID.'');?>" class="tooltipped" data-position="up" data-delay="50" data-tooltip="Tambah/Edit Nilai">
				<i class="material-icons">edit</i>
				</a>
			</td>
			<td>
				<a href="<?php echo base_url('nilai_guru/view_nilai_siswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID.'');?>" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lihat Nilai">
				<i class="material-icons">remove_red_eye</i>
				</a>
			</td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="8" class="center">
				<b>Tidak Ada Siswa di Kelas ini</b> <br>
				Anda tidak bisa menambahkan Data Nilai, kemungkinan Kesiswaan belum menambahkan data Siswa di Kelas <?php echo $namakelas ?>
			</td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
	</div>
</div>
</div>

<?php $this->load->view('layout/footer'); ?>
