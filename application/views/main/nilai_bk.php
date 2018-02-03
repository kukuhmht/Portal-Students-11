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
            <a href="<?php echo base_url('nilai_bk/edit/'.$row->nama_kelas.'/'.$row->ID);?>" class="waves-effect waves-light">
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
</main>