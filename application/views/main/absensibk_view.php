<!--===========================================================DESKTOP VERSION=======================================================-->
<br>
<div class="row hide-on-med-and-down">

	<div class="row hide-on-med-and-down">
		<div class="input-field col s4">
				<select id="tahun" name="tahun" class="form-control">
					<option>Tahun</option>
						<?php foreach ($tahun as $row) {?>
					<option name="tahun"> <?php echo $row->tahun ?> </option>
						<?php } ?>
				 </select>
				 <label>Pilih Tahun Untuk Menampilkan Data Absensi</label>
		</div>
	</div>
	<div class="row hide-on-med-and-up">
		<div class="input-field col s12">
				<select id="tahun" name="tahun" class="form-control">
					<option>Tahun</option>
						<?php foreach ($tahun as $row) {?>
					<option name="tahun"> <?php echo $row->tahun ?> </option>
						<?php } ?>
				 </select>
				 <label>Pilih Tahun Untuk Menampilkan Data Absensi</label>
		</div>
	</div>
	<div class="center">
		<h2> 2017 </h2>
	</div>

	<div class="col s12 m4">
<!--Januari-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/januari.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Januari</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_januari">Alfa</a></li>
					<li class="tab"><a href="#sakit_januari">Sakit</a></li>
					<li class="tab"><a href="#izin_januari">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_januari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_januari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_januari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_januari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_januari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_januari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_januari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_januari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_januari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Januari-->
<!--April-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/april.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">April</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_april">Alfa</a></li>
					<li class="tab"><a href="#sakit_april">Sakit</a></li>
					<li class="tab"><a href="#izin_april">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_april">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_april as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_april) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_april">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_april as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_april) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_april">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_april as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_april) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end April-->
<!--Juli-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/juli.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Juli</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_juli">Alfa</a></li>
					<li class="tab"><a href="#sakit_juli">Sakit</a></li>
					<li class="tab"><a href="#izin_juli">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_juli">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_juli as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_juli) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_juli">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_juli as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_juli) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_juli">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_juli as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_juli) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Juli-->
<!--Oktober-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/oktober.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Oktober</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_oktober">Alfa</a></li>
					<li class="tab"><a href="#sakit_oktober">Sakit</a></li>
					<li class="tab"><a href="#izin_oktober">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_oktober">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_oktober as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_oktober) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_oktober">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_oktober as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_oktober) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_oktober">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_oktober as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_oktober) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Oktober-->
	</div>

	<div class="col s12 m4">
<!--Februari-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/februari.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Februari</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_februari">Alfa</a></li>
					<li class="tab"><a href="#sakit_februari">Sakit</a></li>
					<li class="tab"><a href="#izin_februari">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_februari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_februari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_februari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_februari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_februari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_februari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_februari">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_februari as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_februari) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Februari-->
<!--Mei-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/mei.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Mei</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_mei">Alfa</a></li>
					<li class="tab"><a href="#sakit_mei">Sakit</a></li>
					<li class="tab"><a href="#izin_mei">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_mei">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_mei as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_mei) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_mei">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_mei as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_mei) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_mei">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_mei as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_mei) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Mei-->
<!--Agustus-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/agustus.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Agustus</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_agustus">Alfa</a></li>
					<li class="tab"><a href="#sakit_agustus">Sakit</a></li>
					<li class="tab"><a href="#izin_agustus">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_agustus">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_agustus as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_agustus) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_agustus">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_agustus as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_agustus) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_agustus">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_agustus as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_agustus) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Agustus-->
<!--November-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/november.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">November</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_november">Alfa</a></li>
					<li class="tab"><a href="#sakit_november">Sakit</a></li>
					<li class="tab"><a href="#izin_november">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_november">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_november as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_november) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_november">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_november as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_november) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_november">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_november as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_november) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end November-->
	</div>

	<div class="col s12 m4">
<!--Maret-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/maret.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Maret</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_maret">Alfa</a></li>
					<li class="tab"><a href="#sakit_maret">Sakit</a></li>
					<li class="tab"><a href="#izin_maret">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_maret">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_maret as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_maret) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_maret">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_maret as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_maret) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_maret">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_maret as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_maret) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Maret-->
<!--Juni-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/juni.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Juni</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_juni">Alfa</a></li>
					<li class="tab"><a href="#sakit_juni">Sakit</a></li>
					<li class="tab"><a href="#izin_juni">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_juni">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_juni as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_juni) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_juni">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_juni as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_juni) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_juni">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_juni as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_juni) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Juni-->
<!--September-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/september.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">September</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_september">Alfa</a></li>
					<li class="tab"><a href="#sakit_september">Sakit</a></li>
					<li class="tab"><a href="#izin_september">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_september">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_september as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_september) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_september">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_september as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_september) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_september">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_september as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_september) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end September-->
<!--Desember-->
	<div class="col s12">
		<div class="card">
			<div class="card-image">
				<img class="responsive-img" src="<?php echo base_url();?>assets/images/desember.png">
				<span class="card-title" style="font-size:50px; font-weight:300;">Desember</span>
			</div>
			<div class="card-content">
				<center> Presentase Kehadiran </center>
				<center style="font-size:50px; font-weight:300;">100%</center>
			</div>
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#alfa_desember">Alfa</a></li>
					<li class="tab"><a href="#sakit_desember">Sakit</a></li>
					<li class="tab"><a href="#izin_desember">Izin</a></li>
				</ul>
			</div>
			<div class="card-content grey lighten-4">
				<div id="alfa_desember">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_alfa_desember as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_alfa_desember) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="sakit_desember">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_sakit_desember as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_sakit_desember) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
				<div id="izin_desember">
					<table class="responsive-table">
						<thead>
							<th> No. </th>
							<th> Nama Siswa </th>
							<th> Tanggal </th>
						</thead>
						<tbody>
							<?php $no=1; foreach($tanggal_izin_desember as $row) { ?>
							<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row->nama_siswa; ?></td>
								<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
							</tr>
							<?php } ?>
							<?php if(count($tanggal_izin_desember) == 0) { ?>
							<tr>
								<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
							</tr>
						<?php } ?>
						<tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--end Desember-->
	</div>

</div>
<!--==========================================================END DESKTOP VERSION====================================================-->

<!--============================================================MOBILE VERSION=======================================================-->
<br>
<div class="row hide-on-med-and-up">

<div class="row hide-on-med-and-down">
	<div class="input-field col s4">
			<select id="tahun" name="tahun" class="form-control">
				<option>Tahun</option>
					<?php foreach ($tahun as $row) {?>
				<option name="tahun"> <?php echo $row->tahun ?> </option>
					<?php } ?>
			 </select>
			 <label>Pilih Tahun Untuk Menampilkan Data Absensi</label>
	</div>
</div>
<div class="row hide-on-med-and-up">
	<div class="input-field col s12">
			<select id="tahun" name="tahun" class="form-control">
				<option>Tahun</option>
					<?php foreach ($tahun as $row) {?>
				<option name="tahun"> <?php echo $row->tahun ?> </option>
					<?php } ?>
			 </select>
			 <label>Pilih Tahun Untuk Menampilkan Data Absensi</label>
	</div>
</div>
<div class="center">
	<h2> 2017 </h2>
</div>
<!--Januari-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/januari.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Januari</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_januari">Alfa</a></li>
				<li class="tab"><a href="#sakit_januari">Sakit</a></li>
				<li class="tab"><a href="#izin_januari">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_januari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_januari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_januari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_januari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_januari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_januari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_januari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_januari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_januari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Januari-->

<!--Februari-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/februari.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Februari</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_februari">Alfa</a></li>
				<li class="tab"><a href="#sakit_februari">Sakit</a></li>
				<li class="tab"><a href="#izin_februari">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_februari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_februari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_februari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_februari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_februari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_februari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_februari">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_februari as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_februari) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Februari-->

<!--Maret-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/maret.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Maret</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_maret">Alfa</a></li>
				<li class="tab"><a href="#sakit_maret">Sakit</a></li>
				<li class="tab"><a href="#izin_maret">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_maret">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_maret as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_maret) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_maret">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_maret as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_maret) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_maret">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_maret as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_maret) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Maret-->

<!--April-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/april.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">April</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_april">Alfa</a></li>
				<li class="tab"><a href="#sakit_april">Sakit</a></li>
				<li class="tab"><a href="#izin_april">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_april">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_april as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_april) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_april">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_april as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_april) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_april">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_april as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_april) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end April-->

<!--Mei-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/mei.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Mei</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_mei">Alfa</a></li>
				<li class="tab"><a href="#sakit_mei">Sakit</a></li>
				<li class="tab"><a href="#izin_mei">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_mei">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_mei as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_mei) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_mei">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_mei as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_mei) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_mei">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_mei as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_mei) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Mei-->

<!--Juni-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/juni.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Juni</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_juni">Alfa</a></li>
				<li class="tab"><a href="#sakit_juni">Sakit</a></li>
				<li class="tab"><a href="#izin_juni">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_juni">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_juni as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_juni) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_juni">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_juni as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_juni) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_juni">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_juni as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_juni) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Juni-->

<!--Juli-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/juli.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Juli</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_juli">Alfa</a></li>
				<li class="tab"><a href="#sakit_juli">Sakit</a></li>
				<li class="tab"><a href="#izin_juli">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_juli">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_juli as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_juli) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_juli">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_juli as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_juli) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_juli">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_juli as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_juli) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Juli-->

<!--Agustus-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/agustus.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Agustus</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_agustus">Alfa</a></li>
				<li class="tab"><a href="#sakit_agustus">Sakit</a></li>
				<li class="tab"><a href="#izin_agustus">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_agustus">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_agustus as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_agustus) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_agustus">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_agustus as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_agustus) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_agustus">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_agustus as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_agustus) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Agustus-->

<!--September-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/september.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">September</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_september">Alfa</a></li>
				<li class="tab"><a href="#sakit_september">Sakit</a></li>
				<li class="tab"><a href="#izin_september">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_september">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_september as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_september) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_september">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_september as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_september) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_september">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_september as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_september) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end September-->

<!--Oktober-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/oktober.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Oktober</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_oktober">Alfa</a></li>
				<li class="tab"><a href="#sakit_oktober">Sakit</a></li>
				<li class="tab"><a href="#izin_oktober">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_oktober">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_oktober as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_oktober) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_oktober">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_oktober as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_oktober) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_oktober">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_oktober as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_oktober) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Oktober-->

<!--November-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/november.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">November</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_november">Alfa</a></li>
				<li class="tab"><a href="#sakit_november">Sakit</a></li>
				<li class="tab"><a href="#izin_november">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_november">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_november as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_november) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_november">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_november as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_november) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_november">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_november as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_november) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end November-->

<!--Desember-->
<div class="col s12 m4 l4">
	<div class="card">
		<div class="card-image">
			<img class="responsive-img" src="<?php echo base_url();?>assets/images/desember.png">
			<span class="card-title" style="font-size:50px; font-weight:300;">Desember</span>
		</div>
		<div class="card-content">
			<center> Presentase Kehadiran </center>
			<center style="font-size:50px; font-weight:300;">100%</center>
		</div>
		<div class="card-tabs">
			<ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#alfa_desember">Alfa</a></li>
				<li class="tab"><a href="#sakit_desember">Sakit</a></li>
				<li class="tab"><a href="#izin_desember">Izin</a></li>
			</ul>
		</div>
		<div class="card-content grey lighten-4">
			<div id="alfa_desember">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_alfa_desember as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_alfa_desember) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Alfa</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="sakit_desember">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_sakit_desember as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_sakit_desember) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Sakit</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
			<div id="izin_desember">
				<table class="responsive-table">
					<thead>
						<th> No. </th>
						<th> Nama Siswa </th>
						<th> Tanggal </th>
					</thead>
					<tbody>
						<?php $no=1; foreach($tanggal_izin_desember as $row) { ?>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $row->nama_siswa; ?></td>
							<td> <?php echo $row->tanggal; ?>, <?php echo $row->bulan; ?>, <?php echo $row->tahun; ?></td>
						</tr>
						<?php } ?>
						<?php if(count($tanggal_izin_desember) == 0) { ?>
						<tr>
							<td colspan="3"> <center><b>Tidak Ada yang Izin</b></center> <td>
						</tr>
					<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--end Desember-->

</div>
<!--===========================================================END MOBILE VERSION======================================================-->
