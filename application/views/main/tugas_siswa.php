<br>
<main>
<div class="container">
<div class="row">
	<div class="col s12">
	  <?php foreach($datatugas as $row) { ?>
		<div class="card">
            <div class="card-action">
			  <div class="col s12">
				<div class="chip">
					<img src="<?php echo base_url(); ?>assets/images/profil/profil_cowok.png" alt="Contact Person">
					<span class="card-title"> Nama Guru </span>
				</div>
				<div class="chip right"><b>Batas Akhir Tugas: </b><?php echo $row->tanggal_dikembalikan ?></div>
				<br/>
				<span class="subjudulsmall"><?php echo $row->tanggal_tugas ?></span><br/>
			  </div>
            </div>
			<div class="card-content">
				<hr>
              <span class="card-title"><?php echo $row->judul_tugas ?></span>
              <p>
				<?php echo $row->isi_tugas ?>
			  </p>
			  <label class="waves-effect waves-light btn halfway-fab grey lighten-4 black-text right">Mata Pelajaran</label>
            </div>
        </div>
	  <?php } ?>
	</div>
</div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>