<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Tambah Data Absensi</title>

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
	  <a href="<?php echo base_url('absensikelas');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Tambah Data Absensi</a>
	  <a href="<?php echo base_url('absensikelas');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Tambah Data Absensi</a>
    </div>
  </nav>
</div>
<!--end Header-->
<br>

<div class="container">
<div class="row">
<form action="<?php echo base_url('absensikelas/add_absensi');?>" method="post">
	<div class="card col s12 green lighten-3">
	<br>
		<div class="input-field col s4">
			<select name="tanggal" id="tanggal">
			  <option disabled selected>Tanggal</option>
				<?php for($tgl=1; $tgl<=31; $tgl++) { ?>
			  <option name="tanggal"><?php echo $tgl ?></option>
				<?php } ?>
			</select>
			<label>Pilih Tanggal Hari Ini</label>
		</div>
		<div class="input-field col s4">
			<select name="bulan" id="bulan">
			  <option disabled selected>Bulan</option>
			  <option name="bulan">Januari</option>
			  <option name="bulan">Februari</option>
			  <option name="bulan">Maret</option>
			  <option name="bulan">April</option>
			  <option name="bulan">Mei</option>
			  <option name="bulan">Juni</option>
			  <option name="bulan">Juli</option>
			  <option name="bulan">Agustus</option>
			  <option name="bulan">September</option>
			  <option name="bulan">Oktober</option>
			  <option name="bulan">November</option>
			  <option name="bulan">Desember</option>
			</select>
			<label>Pilih Bulan Sekarang</label>
		</div>
		<div class="input-field col s4">
			<input type="number" name="tahun" id="tahun" />
			<label for="tahun"> Tahun Sekarang</label>
		</div>
	</div>
	<div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Nomor Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Sakit</th>
              <th>Izin</th>
              <th>Alfa</th>
              <th>Hadir</th>
              <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <p>
                  <input type="checkbox" id="allsakit" />
                  <label for="allsakit"></label>
                </p>
            </td>
            <td>
                <p>
                  <input type="checkbox" id="allizin" />
                  <label for="allizin"></label>
                </p>
            </td>
            <td>
                <p>
                  <input type="checkbox" id="allalfa" />
                  <label for="allalfa"></label>
                </p>
            </td>
            <td>
                <p>
                  <input type="checkbox" id="allhadir" />
                  <label for="allhadir"></label>
                </p>
            </td>
            <td></td>
          </tr>
      <?php $no=1; $i=0; foreach($data2siswa as $row) { ?>
          <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td>
      				<?php echo $row->nama_siswa ?>
      				<input hidden type="text" name="ID" id="ID" value="<?php echo $row->ID ?>" />
      				<input hidden type="text" name="nama_siswa" id="nama_siswa" value="<?php echo $row->nama_siswa ?>" />
      				<input hidden type="text" name="id_siswa" id="id_siswa" value="<?php echo $row->ID ?>" />
      				<input hidden type="text" name="id_kelas" id="id_kelas" value="1" />
      			</td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td>
              <input class="itemsakit" name="absen" id="tes1" value="Sakit" type="checkbox" />
				      <label for="tes1"></label>
			      </td>
            <td>
      				<input class="itemizin" name="absen" id="tes2" value="Izin" type="checkbox" />
      				<label for="tes2"></label>
      			</td>
            <td>
      				<input class="itemalfa" name="absen" id="tes3" value="Alfa" type="checkbox" />
      				<label for="tes3"></label>
      			</td>
      			<td>
      				<input class="itemhadir" name="absen" id="tes4" value="Hadir" type="checkbox" checked="checked" />
      				<label for="tes4"></label>
      			</td>
      			<td>
      				<input id="keterangan" name="keterangan" type="text">
      			</td>
          </tr>
      <?php } ?>
        </tbody>
      </table>
   </div>
</div>
</div>

<!--Button Tambah Absensi-->
<div class="fixed-action-btn">
	<button type="submit" value="simpan" name="simpan" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Simpan Data Absensi">
	  <i class="large material-icons">save</i>
	</button>
</div>
<!--end Button Tambah Absensi-->
</form>

<?php $this->load->view('layout/footer'); ?>
