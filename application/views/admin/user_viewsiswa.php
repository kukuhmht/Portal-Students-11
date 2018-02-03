<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $title ?> <?php echo $namakelas ?> </title>

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
		<a href="<?php echo base_url('admin/user_siswa/akunsiswa_belumdaftar');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('admin/user_siswa/akunsiswa_belumdaftar');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>
<main>
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
              <th>Nama Panggilan</th>
              <th>Nomor Telepon</th>
              <th>Alamat</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td> <?php echo $row->nama_siswa ?> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->nama_panggilan ?> </td>
            <td> <?php echo $row->nomor_hp ?> </td>
            <td> <?php echo $row->alamat ?> </td>
            <td> <a href="<?php echo base_url('admin/user_siswa/set_user/'.$namakelas.'/'.$idkelas.'/'.$row->ID); ?>"><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Buat Akun">edit</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> <b> Belum Ada Siswa di Kelas <?php echo $namakelas ?> </b>
				<p>Kesiswaan belum menambahkan Siswa di Kelas <?php echo $namakelas ?></p>
			</td>
		  </tr>
	  <?php } ?>
        </tbody>
     </table>
   </div>
</div>
</div>
</main>

<?php $this->load->view('layout/footer'); ?>