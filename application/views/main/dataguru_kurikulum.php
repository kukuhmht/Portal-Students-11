<br>
<div class="row">
	<div class="col s12">
		<a href="<?php echo site_url('dataguru_kurikulum/v_tambah/'); ?>" class="btn green"> Tambah data Guru </a>
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
              <th>NIP</th>
              <th>Kode Matapelajaran</th>
              <th>Nama Guru</th>
              <th>Matapelajaran</th>
              <th>Jenis Kelamin</th>
              <th>Jabatan</th>
              <th>Status Pekerja</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($dataguru as $row) { ?>
			<!--?php if($Delete == 'YA') { ?>
				<td>
					<p>	
						<input type="checkbox" class="filled-in" name="checkAll" id="checkAll" />
						<label for="checkAll"></label>
					</p>
				</td>
			<!--?php } ?-->
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nip ?> </td>
            <td> <?php echo $row->kode_mapel ?> </td>
            <td>
				<a href="<?php echo base_url('dataguru_kurikulum/edit/'.$row->ID);?>"> <?php echo $row->nama_guru ?> </a>
			</td>
            <td> <?php echo $row->matapelajaran ?> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->jabatan ?> </td>
            <td> <?php echo $row->status_pekerja ?> </td>
            <td> <a href="<?php echo base_url('dataguru_kurikulum/hapus/'.$row->ID,'Edit'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? Jika Anda menghapus Guru ini maka Guru tersebut tidak dapat mengakses aplikasi Portal Student dan seluruh data yang Ia kerjakan di aplikasi Portal Student akan hilang. Apakah Anda yakin?')"><i class="material-icons">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($dataguru) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> Data Guru Tidak Ada </td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
   </div>
   
</div>