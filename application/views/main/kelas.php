<div class="konten">
 <br>
 <div class="container">
 <div class="row">
<form class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">search</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Cari Kelas</label>
      </div>
	</div>
</form>
<!--Kelas-->
	<div class="row">
  <?php foreach($kelas as $row) {?>
  
		<div class="col s12 m4">
          <div class="card">
			<div class="card-image">
			 <a href="<?php echo base_url('kelas/edit/'.$row->nama_kelas.'/'.$row->ID);?>" class="waves-effect waves-light">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
			  <span class="card-title"><?php echo $row->nama_kelas?></span>
			 </a>
			  	<a href="<?php echo base_url('kelas/edit_kelas/'.$row->ID); ?>" class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
				<a href="<?php echo base_url('kelas/hapus/'.$row->ID,'Edit'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? Jika Anda menghapus Kelas, maka seluruh data Kelas ini akan menghilang dan tidak bisa dikembalikan lagi datanya. Apakah Anda yakin akan menghapus?')" class="btn-floating halfway-fab waves-effect waves-light blue left"><i class="material-icons">delete</i></a>
			</div>
            <div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">keyboard_arrow_right</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
			  <p class="hide"><b>ID 	:</b> <?php echo $row->ID?> </p>
			  <p><b>Wali Kelas 	:</b> <?php echo $row->wali_kelas ?></p>
			  <p><b>Ruang Kelas 	:</b> <?php echo $row->ruang_kelas ?></p>
			</div>
          </div>
        </div>
  <?php } ?>
  <!--?php echo $data['kelas'][0]['id'];?-->
	</div>

<!--Button Tambah Jadwal Pelajaran-->
<div class="fixed-action-btn">
	<a href="#add_kelas" class="modal-trigger btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Kelas">
	  <i class="large material-icons">add</i>
	</a>
</div>
<!--end Button Tambah Jadwal Pelajaran-->
 </div>
 </div>

<!--==================================MODAL======================================-->

  <!-- Modal Structure -->
  <div id="add_kelas" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Tambah Kelas</h4>
      <br/>
	<form method="post" action="<?php echo site_url('kelas/tambah_kelas');?>">  
	  <p>
		<div class="input-field col s12">
          <input id="nama_kelas" name="nama_kelas" type="text" class="validate">
          <label for="nama_kelas">Masukan Nama Kelas</label>
        </div>
		<div class="input-field col s12">
			<select id="wali_kelas" name="wali_kelas" class="form-control">
				<option disabled>Pilih Wali Kelas</option>
					<?php foreach ($walikelas as $row) {?>
				<option name="wali_kelas"> <?php echo $row->nama_guru ?> </option>
					<?php } ?>
			</select>
			<label>Wali Kelas</label>
        </div>
		<div class="input-field col s12">
			<select id="ruang_kelas" name="ruang_kelas" class="form-control">
				<option disabled>Pilih Ruang Kelas</option>
					<?php foreach ($ruangkelas as $row) {?>
				<option name="ruang_kelas"> <?php echo $row->ruang_kelas ?> </option>
					<?php } ?>
			</select>
			<label>Ruang Kelas</label>
		</div>
	  </p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn waves-effect waves-green waves-light">simpan</button>
    </div>
	</form>
  </div>
  
</div>