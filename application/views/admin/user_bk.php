<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title> <?php echo $title ?></title>

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
		<a href="<?php echo base_url('admin/user');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> </a>
		<a href="<?php echo base_url('admin/user');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i><?php echo $title ?> </a>
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
              <th>Nama User</th>
              <th>Username</th>
              <th>Password</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($userbk as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->username ?> </td>
            <td> <?php echo $row->no_identitas ?> </td>
            <td> <?php echo $row->password ?> </td>
            <td> <a href="<?php echo base_url('admin/user_bk/edit_akunbk/'.$row->ID); ?>"><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Edit Akun">edit</i></a> </td>
            <td> <a href="<?php echo base_url('admin/user_bk/hapus_akunbk/'.$row->ID); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Hapus Akun">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($userbk) == 0) { ?>
		  <tr>
			<td colspan="8" class="center">
				<b> Tidak Ada Akun BK </b>
				<p>silahkan buat akun BK agar sistem aplikasi Portal Student berfungsi dengan baik.</p>
			</td>
		  </tr>
		  <tr>
			<td colspan="5">
			  <center>
				<a href="<?php echo base_url('admin/user_bk/view_tambahakunbk'); ?>" class="btn waves-effect waves-light"> Tambah Akun BK </a>
			  </center>
			</td>
		  </tr>
	  <?php } ?>
        </tbody>
    </table>
	</div>
<!--Button Tambah User BK-->
	<div class="fixed-action-btn">
		<a href="<?php echo base_url('admin/user_bk/view_tambahakunbk/'); ?>" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Akun BK">
		  <i class="large material-icons">add</i>
		</a>
	</div>
<!--end Button Tambah User BK-->
</div>
</div>
</main>
<?php $this->load->view('layout/footer'); ?>