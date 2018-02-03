<br>
<main>
<div class="container">
<form action="<?php echo base_url(). 'siswa_kelas/tambah'; ?>" method="post">
<div class="row card">
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
	<div class="input-field col s12 m6">
	  <input id="nama_panggilan" name="nama_panggilan" type="text" class="validate">
	  <label for="nama_panggilan">Nama Panggilan</label>
	</div>
  </div>
  <div class="col s12">
	<p>
      <input type="checkbox" id="l" />
      <label for="l">Laki-Laki</label>&nbsp;&nbsp;
      <input type="checkbox" id="p" />
      <label for="p">Perempuan</label>
    </p>
	<div class="input-field col s12 m6">
	  <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
	  <label for="alamat">Alamat</label>
	</div>
	<div class="input-field col s12 m6">
	  <input id="nomor_hp" name="nomor_hp" type="text">
	  <label for="nomor_hp">Nomor telepon</label>
	</div>
  </div>
  <div class="right">
	<button class="waves-effect waves-light btn" type="submit" value="simpan" name="simpan"> Simpan </button>
  </div>
</div>
</form>
</div>
</main>