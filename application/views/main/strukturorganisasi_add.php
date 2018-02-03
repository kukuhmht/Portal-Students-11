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
		<a href="<?php echo base_url('strukturorganisasi'); ?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?></a>
		<a href="<?php echo base_url('strukturorganisasi'); ?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> <?php echo $title ?></a>
	  </div>
	</nav>
</div>
<!--=====================================END HEADER=============================================-->
<br>
<form method="post" action="">
<div class="row">
  <div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Nomor Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jabatan</th>
			  <th> </th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td> <?php echo $row->nama_siswa ?> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->jabatan ?> </td>
			<td> <a href="<?php echo base_url('strukturorganisasi/tambah_jabatan/'.$row->ID); ?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Tambah Jabatan"><i class="material-icons">edit</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="5" class="center"> Data Siswa Tidak Ada </td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
   </div>

</div>
</form>
<?php $this->load->view('layout/footer'); ?>