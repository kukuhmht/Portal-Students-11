<main>
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
<!--Ruang Kelas-->
	<div class="row">
  <?php foreach($dataruangkelas as $row) {?>
		<div class="col s12 m4">
          <div class="card">
            <!--a href="<?php echo base_url('ruangkelas/edit/'.$row->nama_kelas.'/'.$row->ID);?>" class="waves-effect waves-light"-->
			<div class="card-image">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
              <span class="card-title"><?php echo $row->ruang_kelas?></span>
			  	<a href="<?php echo base_url('ruangkelas/edit/'.$row->ID);?>" class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
				<a href="<?php echo base_url('ruangkelas/hapus/'.$row->ID); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')" class="btn-floating halfway-fab waves-effect waves-light blue left"><i class="material-icons">delete</i></a>
			</div>
			<!--/a-->
            <div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">keyboard_arrow_right</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
			  <p class="hide"><b>ID 	:</b> <?php echo $row->ID?> </p>
			</div>
          </div>
        </div>
  <?php } ?>
	</div>

<!--Button Tambah Ruang Kelas-->
<div class="fixed-action-btn">
	<a href="#add_ruangkelas" class="modal-trigger btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Kelas">
	  <i class="large material-icons">add</i>
	</a>
</div>
<!--end Button Tambah Ruang Kelas-->

<!-- Modal Structure -->
  <div id="add_ruangkelas" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Tambah Ruang Kelas</h4>
		  <br/>
		<form method="post" action="<?php echo site_url('ruangkelas/tambah_ruangkelas');?>">
			<p>
				<div class="input-field col s12">
				  <input id="ruang_kelas" name="ruang_kelas" type="text" class="validate">
				  <label for="ruang_kelas">Masukan Ruang Kelas</label>
				</div>
			</p>
	</div>
			<div class="modal-footer">
			  <button type="submit" class="btn waves-effect waves-green waves-light">simpan</button>
			</div>
		</form>
  </div>
</div>
</div>
</main>