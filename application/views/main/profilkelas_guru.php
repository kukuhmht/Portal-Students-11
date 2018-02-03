<br>
<main>
<div class="container">
<div class="card row">
<form action="<?php echo base_url(). 'profil_kelas/add_guru'; ?>" method="post">
	<div class="col s12">
		<div class="input-field col s12 m6">
		  <input id="kode_guru" name="kode_guru" type="text" class="validate">
		  <label for="kode_guru">Kode Guru</label>
		</div>
		<div class="input-field col s12 m6">
		  <input id="nama_guru" name="nama_guru" type="text" class="validate">
		  <label for="nama_guru">Nama Guru</label>
		</div>
	</div>
	<div class="col s12">
		<div class="input-field col s12 m6">
		  <input id="matapelajaran" name="matapelajaran" type="text" class="validate">
		  <label for="matapelajaran">Matapelajaran</label>
		</div>
	</div>
	<div class="col s4 left">
		<button class="waves-effect waves-light btn" type="submit" value="tambah" name="tambah"> Simpan </button>
	</div>
</form>
</div>
</div>
</main>