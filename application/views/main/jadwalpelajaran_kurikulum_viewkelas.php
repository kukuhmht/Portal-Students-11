<!--================================HEAD===================================-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Jadwal Pelajaran Kelas <?php echo $namakelas ?></title>

  <!-- CSS  -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/iconlogo_v6.png');?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.css">
  
</head>

<body>
<main>
<!--==============================END HEAD=================================-->
<!--===============================HEADER==================================-->
<div class="navbar-fixed">
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Jadwal Pelajaran Kelas <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--===============================END HEADER==================================-->
<br>
<main>
 <br>
 <div class="container">
 <div class="row">
	<!--Button Tambah Jadwal Pelajaran-->
	<div class="fixed-action-btn">
		<a href="<?php echo base_url('jadwalpelajaran_kurikulum/vtambah_jadwalpelajaran_kurikulum/'.$namakelas.'/'.$idkelas.'/');?>" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Jadwal Pelajaran">
		  <i class="large material-icons">add</i>
		</a>
	</div>
	<!--end Button Tambah Jadwal Pelajaran-->
	
  <div class="card col s12 m5">
	<span class="btn card-title blue"> Wali Kelas </span><br>
	<?php foreach ($walikelas as $row) { ?><br>
	<center class="card-title"><?php echo $row->wali_kelas ?></center>
	<br>
	<a class="btn-floating halfway-fab waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Edit Wali Kelas"
	href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_walikelas/'.$namakelas.'/'.$idkelas.'/'.$row->ID); ?>">
		<i class="material-icons">edit</i>
	</a>
	<?php } ?>
  </div>
  <div class="card col s12 m5 right">
	<span class="btn card-title blue"> Ruang Kelas Tetap</span><br>
	<?php foreach ($ruangkelas as $row) { ?><br>
	<center class="card-title"><?php echo $row->ruang_kelas ?></center><br>
	<a class="btn-floating halfway-fab waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Edit Ruang Kelas"
	href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_ruangkelas/'.$namakelas.'/'.$idkelas.'/'.$row->ID); ?>">
		<i class="material-icons">edit</i>
	</a>
	<?php } ?>
  </div>
  
  <div class="col s12 m6"><br>
	<div class="card col s12">
		<!--=============================================SENIN=====================================================-->
		<div class="row">
		  <span class="btn card-title">SENIN</span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaransenin as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaransenin) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran hari Senin belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
		<!--==========================================END SENIN===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================SELASA=====================================================-->
		<div class="row">
		  <span class="btn card-title"> SELASA </span>
		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranselasa as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranselasa) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Selasa belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END SELASA===================================================-->
	</div>
	<div class="card col s12">
		<!--============================================RABU=======================================================--> 
		<div class="row">
		  <span class="btn card-title"> RABU </span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranrabu as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranrabu) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Rabu belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END RABU====================================================-->
	</div>
  </div>
  <div class="col s12 m6"><br>
	<div class="card col s12">
		<!--============================================KAMIS=====================================================-->
		<div class="row">
		  <span class="btn card-title"> KAMIS </span>		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajarankamis as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajarankamis) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Kamis belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END KAMIS===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================JUM'AT=====================================================-->
		<div class="row">
		  <span class="btn card-title"> JUMAT </span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranjumat as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranjumat) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Jumat belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END JUM'AT===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================SABTU=====================================================-->
		<div class="row">
		  <span class="btn card-title"> SABTU </span>
		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaransabtu as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>
					<tbody>
					  <tr>
						<td colspan="3">
							  <center>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/edit_hari/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>">
									<i class="material-icons">edit</i>
								</a>
								<a href="<?php echo base_url('jadwalpelajaran_kurikulum/hapus_mapel/'.$namakelas."/".$idkelas."/".$row->hari."/".$row->id); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">
									<i class="material-icons">delete</i>
								</a>
							  </center>
						</td>
					  </tr>
					</tbody>
				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaransabtu) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Sabtu belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END SABTU===================================================-->
	</div>
  </div>

 </div>
 </div>

</main>
<!--====================================FOOTER====================================-->
<?php echo $this->load->view('layout/footer');?>
<!--===================================END FOOTER=================================-->