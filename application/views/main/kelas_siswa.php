<!--================================HEAD===================================-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Siswa Kelas <?php echo $namakelas ?></title>

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
		<a href="<?php echo base_url('kelas');?>" class="brand-logo hide-on-med-and-down">&nbsp; <i class="material-icons">arrow_back</i> Siswa Kelas <?php echo $namakelas ?></a>
		<a href="<?php echo base_url('kelas');?>" class="hide-on-med-and-up">&nbsp; <i class="material-icons">arrow_back</i> Siswa Kelas <?php echo $namakelas ?></a>
	  </div>
	</nav>
</div>
<!--===============================END HEADER==================================-->

<br>
<div class="row">
	<div class="col s12">
		<a href="#tambahsiswa" class="modal-trigger btn waves-effect waves-light green"> Tambah Siswa </a>
	</div>
  <div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Nomor Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
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
            <td> <a href="<?php echo base_url('kelas/edit_siswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID.'');?>"> <?php echo $row->nama_siswa ?> </a> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->nomor_hp ?> </td>
            <td> <?php echo $row->alamat ?> </td>
            <td> <a href="<?php echo base_url('kelas/hapus_siswa/'.$namakelas.'/'.$idkelas.'/'.$row->ID.''); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? Jika Anda menghapus Siswa ini, maka seluruh data Siswa ini akan menghilang dan tidak bisa dikembalikan lagi datanya. Apakah Anda yakin akan menghapus?')"><i class="material-icons">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> Data Siswa Tidak Ada </td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
   </div>

</div>

<!--==================================MODAL======================================-->
  <!-- Modal Structure -->
  <div id="tambahsiswa" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Tambah Siswa Kelas <?php echo $namakelas ?></h4>
      <br/>
	<form method="post" action="<?php echo site_url('kelas/tambah_siswa/'.$namakelas.'/'.$idkelas);?>">
	  <p>
		<div class="col s12">
			<div class="input-field col s12 m6">
			  <input id="nomor_induk" name="nomor_induk" type="number" class="validate">
			  <label for="nomor_induk">Nomor Induk</label>
			</div>
		</div>
		<div class="col s12">
			<div class="input-field col s12 m6">
			  <input id="nama_siswa" name="nama_siswa" type="text" class="validate">
			  <label for="nama_siswa">Nama Siswa</label>
			</div>
		</div>
		<div class="col s12">
			<p>
			  <input name="jenis_kelamin" value="Laki-Laki" type="radio" id="test1"/>
			  <label for="test1">Laki-Laki</label>
			  <input name="jenis_kelamin" value="Perempuan" type="radio" id="test2" />
			  <label for="test2">Perempuan</label>
			</p>
			<div class="input-field col s12 m6">
			  <input id="nomor_hp" name="nomor_hp" type="number">
			  <label for="nomor_hp">Nomor telepon</label>
			</div>
			<div class="input-field col s12 m6">
			  <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
			  <label for="alamat">Alamat</label>
			</div>
		</div>
	  </p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn waves-effect waves-green waves-light">simpan</button>
    </div>
	</form>
  </div>

</main>
<?php echo $this->load->view('layout/footer');?>
