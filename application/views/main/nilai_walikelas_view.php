<!DOCTYPE html>
<html lang="ind">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Data Nilai Siswa Kelas <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('nilai_walikelas/edit/'.$namakelas.'/'.$idkelas);?>" class="brand-logo hide-on-med-and-down">&nbsp; Data Nilai Siswa Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('nilai_walikelas/edit/'.$namakelas.'/'.$idkelas);?>" class="hide-on-med-and-up">&nbsp; Data Nilai Siswa Kelas <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--end Header-->
<br>

<div class="container">
<div class="row">
<!--Semester Tab Head-->
  <div class="row">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3 green lighten-3"><a class="white-text" href="#semester1">Semester 1</a></li>
        <li class="tab col s3 green lighten-2"><a class="white-text" href="#semester2">Semester 2</a></li>
        <li class="tab col s3 yellow lighten-3"><a class="white-text" href="#semester3">Semester 3</a></li>
        <li class="tab col s3 yellow lighten-2"><a class="white-text" href="#semester4">Semester 4</a></li>
        <li class="tab col s3 red lighten-3"><a class="white-text" href="#semester5">Semester 5</a></li>
        <li class="tab col s3 red lighten-2"><a class="white-text" href="#semester6">Semester 6</a></li>
      </ul>
    </div>
<!--end Semester Tab Head-->

<!--Semester Tab Isi-->

<!--semester 1-->
    <div id="semester1" class="col s12">
		<center> <h5>Semester 1</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts1">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas1">UAS</a></li>
			  </ul>
			</div>
		<!--tabel nilai uts semester 1-->
			<div id="uts1" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts1 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts1) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 1-->
		<!--tabel nilai uas semester 1-->
			<div id="uas1" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas1 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas1) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

					</form>
				</table>
			</div>
		<!--end tabel nilai uas semester 1-->
		</div>
	</div>
<!--end semester 1-->

<!--semester 2-->
    <div id="semester2" class="col s12">
		<center> <h5>Semester 2</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts2">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas2">UAS</a></li>
			  </ul>
			</div>
			<div id="uts2" class="col s12">
		<!--tabel nilai uts semester 2-->
			<div id="uts2" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts2 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts2) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 2-->
			</div>
			<div id="uas2" class="col s12">
		<!--tabel nilai uas semester 2-->
			<div id="uas2" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas2 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas2) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uas semester 2-->
			</div>
		</div>
	</div>
<!--end semester 2-->

<!--semester 3-->
    <div id="semester3" class="col s12">
		<center> <h5>Semester 3</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts3">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas3">UAS</a></li>
			  </ul>
			</div>
			<div id="uts3" class="col s12">
		<!--tabel nilai uts semester 3-->
			<div id="uts3" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts3 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts3) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 3-->
			</div>
			<div id="uas3" class="col s12">
		<!--tabel nilai uas semester 3-->
			<div id="uas3" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas3 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas3) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uas semester 3-->
			</div>
		</div>
	</div>
<!--end semester 3-->

<!--semester 4-->
    <div id="semester4" class="col s12">
		<center> <h5>Semester 4</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts4">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas4">UAS</a></li>
			  </ul>
			</div>
			<div id="uts4" class="col s12">
		<!--tabel nilai uts semester 4-->
			<div id="uts4" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts4 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts4) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 4-->
			</div>
			<div id="uas4" class="col s12">
		<!--tabel nilai uas semester 4-->
			<div id="uas4" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas4 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas4) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uas semester 4-->
			</div>
		</div>
	</div>
<!--end semester 4-->

<!--semester 5-->
    <div id="semester5" class="col s12">
		<center> <h5>Semester 5</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts5">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas5">UAS</a></li>
			  </ul>
			</div>
			<div id="uts5" class="col s12">
		<!--tabel nilai uts semester 5-->
			<div id="uts5" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts5 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts5) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 5-->
			</div>
			<div id="uas5" class="col s12">
		<!--tabel nilai uas semester 5-->
			<div id="uas5" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas5 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas5) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uas semester 5-->
			</div>
		</div>
	</div>
<!--end semester 5-->

<!--semester 6-->
    <div id="semester6" class="col s12">
		<center> <h5>Semester 6</h5> </center>
		<div class="row">
			<div class="col s12">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab col s3"><a class="active blue-text" href="#uts6">UTS</a></li>
				<li class="tab col s3"><a class="blue-text" href="#uas6">UAS</a></li>
			  </ul>
			</div>
			<div id="uts6" class="col s12">
		<!--tabel nilai uts semester 6-->
			<div id="uts1" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uts6 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uts6) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uts semester 6-->
			</div>
			<div id="uas6" class="col s12">
		<!--tabel nilai uas semester 6-->
			<div id="uas6" class="col s12">
				<table>
					<thead>
					  <tr>
						  <th>No.</th>
						  <th>Matapelajaran</th>
						  <th>Pengetahuan</th>
						  <th>Keterampilan</th>
					  </tr>
					</thead>
					<?php $no=1; foreach($nilai_siswa_uas6 as $row) { ?>
					<tbody>
					  <tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->mapel ?></td>
						<td><?php echo $row->pengetahuan ?></td>
						<td><?php echo $row->keterampilan ?></td>

					  </tr>
					<?php }?>
					<?php if(count($nilai_siswa_uas6) == 0) { ?>
					  <tr>
						<td colspan="5" class="center">
							<b>Siswa ini Belum Memiliki Nilai</b> <br>
							Guru yang bersangkutan belum menginputkan Nilai kepada Siswa ini
						</td>
					  </tr>
					<?php } ?>
					</tbody>

				</table>
			</div>
		<!--end tabel nilai uas semester 6-->
			</div>
		</div>
	</div>
<!--end semester 6-->
  </div>
<!--end Semester Tab Isi-->
</div>
</div>

<?php $this->load->view('layout/footer'); ?>