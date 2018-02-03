<br>
<div class="row">
	<div class="col s12">
		<a href="<?php echo site_url('siswa_kelas/v_tambah/'); ?>" class="btn green"> Tambah Siswa </a>
	</div>
  <div class="card col s12">
    <table class="striped bordered responsive-table">
        <thead>
          <tr>
              <th>No.</th>
              <th>Nomor Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Nama Panggilan</th>
              <th>Nomor Telepon</th>
              <th>Alamat</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td> <a href="<?php echo base_url('siswa_kelas/edit/'.$row->nama_kelas);?>"> <?php echo $row->nama_siswa ?> </a> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->nama_panggilan ?> </td>
            <td> <?php echo $row->nomor_hp ?> </td>
            <td> <?php echo $row->alamat ?> </td>
            <td> <a href="<?php echo base_url('siswa_kelas/hapus/'.$row->nama_kelas,'Edit'); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i class="material-icons">delete</i></a> </td>
          </tr>
      <?php }?>
	  <?php if(count($datasiswa) == 0) { ?>
		  <tr>
			<td colspan="8" class="center"> Data Siswa Tidak Ada </td>
		  </tr>
	  <?php } ?>
        </tbody>
      </table>
   </div>

</div>