<main>
<br>
<div class="container">
<div class="row">

	<div class="col s12">
	  <?php foreach ($datakelas as $row) { ?>
<!--Tentang Kelas-->
		<div class="card col s12 m6">
		  <div class="col s12">	
			<blockquote><h5>
				<?php echo $row->nama_kelas ?> <a href="<?php echo site_url('profil_kelas/edit/' . $row->ID); ?>"> <i class="material-icons right">edit</i> </a>
			</h5></blockquote>
			<?php
				if($row->nama_kelas == '')
				{
					echo "<blockquote class='subjudul'><h5> Kelas </h5></blockquote>";
				}
			?>
		  </div>
		  <div class="col s12">
			<h6>
				<i><?php echo $row->slogan ?></i>
			</h6>
			<?php
				if($row->slogan == '')
				{
					echo "<h6 class='subjudul'>Slogan Kelas</h6>";
				}
			?>
		  </div>
		  <div class="cok s12">
			<label>&nbsp&nbsp&nbsp&nbsp Ruang Kelas </label>
		  </div>
		  <div class="col s12">
			<span>&nbsp <?php echo $row->ruang_kelas ?> </span>
			<?php
				if($row->ruang_kelas == '')
				{
					echo "<span class='subjudul'>Tidak Ada Kelas</span>";
				}
			?>
		  </div>
		</div>
<!--end Tentang Kelas-->
<!--Wali Kelas-->
		<div class="card col s12 m6">
		  <div class="col s12">
			<span class="subjudul"> Wali Kelas </span>
			<blockquote><h5> <?php echo $row->wali_kelas ?> </h5></blockquote>
			<?php
				if($row->wali_kelas == '')
				{
					echo "<blockquote class='subjudul'><h5> Wali Kelas </h5></blockquote>";
				}
			?>
		  </div>
		</div>
		<?php } ?>
<!--end Wali Kelas-->
	</div>
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
<br>
<br>