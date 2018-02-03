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
		<a href="<?php echo base_url('admin/user_siswa/akunsiswa_sudahdaftar');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('admin/user_siswa/akunsiswa_sudahdaftar');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> <?php echo $namakelas ?></a>
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
              <th>Nama Siswa</th>
              <th>Username</th>
              <th>Password</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->username ?> </td>
            <td> <?php echo $row->no_identitas ?> </td>
            <td> <?php echo $row->password ?> </td>
            <td> <a href="<?php echo base_url('admin/user_siswa/edit_akunsiswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID); ?>"><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Edit Akun">edit</i></a> </td>
			<td> <a href="<?php echo base_url('admin/user_siswa/hapus_akunsiswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? Jika Anda menghapus Akun Siswa ini maka Siswa tersebut tidak dapat mengakses aplikasi Portal Student dan seluruh data yang Ia kerjakan di aplikasi Portal Student akan hilang. Tetapi Anda bisa mendaftarkan Siswa ini sebagai Akun lagi di menu Akun Siswa Belum Terdaftar. Apakah Anda yakin?')"><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Hapus Akun Siswa">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> <b>Belum Ada Akun Siswa Terdaftar di Kelas <?php echo $namakelas ?></b>
			<p>untuk membuat Akun Siswa silahkan klik &nbsp;&nbsp;<a href="<?php echo base_url('admin/user_siswa/edit/'.$namakelas.'/'.$idkelas); ?>" class="btn waves-effect waves-light">disini</a> </p>
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