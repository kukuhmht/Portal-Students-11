<br>
<div class="container">
<div class="row">
	<div class="fixed-action-btn">
		<a href="#add_mapel" class="btn-floating btn-large tooltipped waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Matapelajaran">
		  <i class="large material-icons">add</i>
		</a>
	</div>
  <div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
			<!--?php if($Delete == 'YA') { ?>
			  <th>
				<p>	
					<input type="checkbox" class="filled-in" name="checkAll" id="checkAll" />
					<label for="checkAll"></label>
				</p>
			  </th>
			<!--?php } ?-->
              <th>No.</th>
              <th>Kode Matapelajaran</th>
              <th>Nama Matapelajaran</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datamapel as $row) { ?>
			<!--?php if($Delete == 'YA') { ?>
				<td>
					<p>	
						<input type="checkbox" class="filled-in" name="checkAll" id="checkAll" />
						<label for="checkAll"></label>
					</p>
				</td>
			<!--?php } ?-->
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->kode_mapel ?> </td>
            <td> <a href="<?php echo base_url('matapelajaran_kurikulum/edit/'.$row->ID);?>"> <?php echo $row->nama_pelajaran ?> </a> </td>
            <td> <a href="<?php echo base_url('matapelajaran_kurikulum/hapus/'.$row->ID,'Edit'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><i class="material-icons">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datamapel) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> Tidak Ada Data Matapelajaran </td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
   </div>
<!--==================================MODAL======================================-->
  <!-- Modal Structure -->
  <div id="add_mapel" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Tambah Matapelajaran</h4>
      <br/>
	<form method="post" action="<?php echo site_url('matapelajaran_kurikulum/tambah/'); ?>">
	  <p>
		<div class="input-field col s12 m4">
          <input id="kode_mapel" name="kode_mapel" type="text" class="validate">
          <label for="kode_mapel">Kode Matapelajaran</label>
        </div>
		<div class="input-field col s12 m7">
          <input id="nama_pelajaran" name="nama_pelajaran" type="text" class="validate">
          <label for="nama_pelajaran">Nama Matapelajaran</label>
        </div>
	  </p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn waves-effect waves-green waves-light">simpan</button>
    </div>
	</form>
  </div>
<!--END MODAL-->
</div>
</div>