<main>
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
            <a href="<?php echo base_url('nilai_guru/edit/'.$row->nama_kelas.'/'.$row->ID);?>" class="waves-effect waves-light">
			<div class="card-image">
              <img src="<?php echo base_url();?>assets/images/background.jpg">
              <span class="card-title"><?php echo $row->nama_kelas?></span>
			</div>
			</a>
            <div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Info<i class="material-icons right">keyboard_arrow_right</i></span>
			</div>
			<div class="card-reveal">
			  <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
			</div>
          </div>
        </div>
	  <?php } ?>
	</div>
<!--end kelas-->
 </div>
 </div>
 
 <!--=========================================MODAL================================================-->
<!-- Modal Trigger>
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a-->

  <!-- Modal Structure -->
  <div id="modal_add_kelas" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Tambahkan Kelas</h4>
      <p>
		<div class="row">
			<div class="card col s12">
				<div class="input-field col s12 m6">
					<select class="icons">
					  <option value="" disabled selected>belum ada kelas</option>
					  <option value="" data-icon="images/sample-1.jpg" class="left circle">XII RPL 1</option>
					  <option value="" data-icon="images/office.jpg" class="left circle">XII RPL 2</option>
					  <option value="" data-icon="images/yuna.jpg" class="left circle">XII RPL 3</option>
					</select>
					<label>Pilih Kelas</label>
				</div>
			</div>
		</div>
	  </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Simpan</a>
    </div>
  </div>
</main>