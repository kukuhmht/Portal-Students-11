<br>
<main>
<div class="container">
<div class="row">
	<div class="row">
	  <form action="<?php echo base_url(). 'tugas_guru/tambah'; ?>" method="post">
		<div class="card z-depth-2 grey lighten-5">
		  <div class="col s12">
			<div class="input-field col s3 hide-on-med-and-down">
					<select id="nama_kelas" name="nama_kelas" class="form-control">
						<option>Pilih Kelas</option>
							<?php foreach ($datakelas as $row) {?>
						<option name="nama_kelas"> <?php echo $row->nama_kelas ?> </option>
							<?php } ?>
					 </select>
					 <label>Mau diberikan pada kelas mana tugas ini?</label>
			</div>
			<div class="input-field col s12 hide-on-med-and-up">
				<select multiple>
					<?php foreach ($data_kelas as $row) { ?>
				  <option value="nama_kelas"><?php $row->nama_kelas ?></option>
					<?php } ?>
				</select>
				<label>Pilih Kelas</label>
			</div>
		  </div>
			  <div class="col s12">
				<div class="input-field col s6">
				  <input id="judul_tugas" name="judul_tugas" type="text">
				  <label for="judul_tugas">Judul Tugas</label>
				</div>
			  </div>
			  <div class="col s12">
				<div class="input-field">
				  <textarea id="isi_tugas" class="materialize-textarea" name="isi_tugas"></textarea>
				  <label for="isi_tugas">Tugas apa yang ingin Anda berikan?</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s5">
				  <input id="tanggal_dikembalikan" type="text" name="tanggal_dikembalikan" class="datepicker">
				  <label for="tanggal_dikembalikan">Batas Akhir Tugas</label>
				</div>
			  </div>
			  <button class="btn-floating btn-large halfway-fab waves-effect waves-light green" type="submit" value="simpan" name="simpan"><i class="material-icons">send</i></button>
		</div>
	  <?php echo form_close(); ?>
	</div>
	<div class="row">
		<?php foreach ($datatugas as $row) { ?>
		<div class="card">
            <div class="card-action">
			  <div class="col s12">
				<!--a class='dropdown-button right' href='#' data-beloworigin="true" data-activates='dropdown2'><i class="material-icons">more_vert</i></a>
				<ul id="dropdown2" class="dropdown-content">
				  <li><a href="<?php echo base_url('tugas_guru/edit/'.$row->ID);?>">Edit</a></li>
				  <li><a href="<?php echo base_url('tugas_guru/hapus/'.$row->ID);?>">Hapus</a></li>
				</ul-->
				<div class="chip">
					<img src="<?php echo base_url(); ?>assets/images/profil/profil_cowok.png" alt="Contact Person">
					<span class="card-title"> Nama Guru </span>
				</div>
				<div class="chip right"><b>Batas Akhir Tugas: </b><?php echo $row-> tanggal_dikembalikan ?></div>
				<br/>
				<span class="subjudulsmall"><?php echo $row->tanggal_tugas?></span>
				<span class="right"> <a href="<?php echo base_url('tugas_guru/edit/'.$row->ID);?>"><i class="material-icons">mode_edit</i></a> </span>
				<span class="right"> <a href="<?php echo base_url('tugas_guru/hapus/'.$row->ID);?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"> <i class="material-icons">delete</i> </a> </span><br>
			  </div>
            </div>
			<div class="card-content">
				<hr>
              <span class="card-title"><?php echo $row->judul_tugas?></span>
              <p>
				<?php echo $row->isi_tugas?>
			  </p>
			  <label class="waves-effect waves-light btn halfway-fab grey lighten-4 black-text right">Mata Pelajaran</label>
            </div>
        </div>
		<?php } ?>
	</div>
</div>
</div>
</main>
