<br>
<div class="row">
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
              <th> Alamat </th>
              <th>Jabatan</th>
			  <th> </th>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php $no=1; foreach ($datasiswa as $row) { ?>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $row->nomor_induk ?> </td>
            <td> <?php echo $row->nama_siswa ?> </a> </td>
            <td> <?php echo $row->jenis_kelamin ?> </td>
            <td> <?php echo $row->nama_panggilan ?> </td>
            <td> <?php echo $row->nomor_hp ?> </td>
            <td> <?php echo $row->alamat ?> </td>
            <td> <?php echo $row->jabatan ?> </td>
            <td> <a href="<?php echo base_url('siswa/edit/'.$row->ID); ?>"><i class="material-icons">edit</i></a> </td>
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
