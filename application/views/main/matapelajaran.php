<br>
<main>
 <br>
 <div class="container">
 <div class="row">
  <div class="col s12 m6"><br>
	<div class="card col s12">
		<!--=============================================SENIN=====================================================-->
		<div class="row">
		  <span class="btn card-title">SENIN</span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaransenin as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaransenin) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran hari Senin belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
		<!--==========================================END SENIN===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================SELASA=====================================================-->
		<div class="row">
		  <span class="btn card-title"> SELASA </span>
		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranselasa as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranselasa) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Selasa belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END SELASA===================================================-->
	</div>
	<div class="card col s12">
		<!--============================================RABU=======================================================--> 
		<div class="row">
		  <span class="btn card-title"> RABU </span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranrabu as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranrabu) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Rabu belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END RABU====================================================-->
	</div>
  </div>
  <div class="col s12 m6"><br>
	<div class="card col s12">
		<!--============================================KAMIS=====================================================-->
		<div class="row">
		  <span class="btn card-title"> KAMIS </span>		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajarankamis as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajarankamis) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Kamis belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END KAMIS===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================JUM'AT=====================================================-->
		<div class="row">
		  <span class="btn card-title"> JUMAT </span>
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaranjumat as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaranjumat) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Jumat belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END JUM'AT===================================================-->
	</div>
	<div class="card col s12">
		<!--===========================================SABTU=====================================================-->
		<div class="row">
		  <span class="btn card-title"> SABTU </span>
		  
		</div>
		  <ul class="collapsible popout" data-collapsible="accordion">
				<?php foreach($data_jadwalpelajaransabtu as $row) { ?>
			<li>
			  <div class="collapsible-header"><?php echo $row->nama_pelajaran ?></div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped">
					<thead>
					  <th> Waktu </th>
					  <th> Guru Pengajar </th>
					  <th> Ruangan </th>
					</thead>
					<tbody>
					  <tr>
						<td> <?php echo $row->jam ?> </td>
						<td> <?php echo $row->nama_guru ?> </td>
						<td> <?php echo $row->ruang_kelas ?> </td>
					  </tr>
					</tbody>

				  </table>
				</span>
			  </div>
			</li>
				<?php } ?>
		  </ul>
			<?php if(count($data_jadwalpelajaransabtu) == 0) { ?>
		  <div class="col s12 center">Jadwal Pelajaran Hari Sabtu belum di buat</div>
			<?php } ?>
			<div class="chip grey lighten-4 left">
			  <b>Istirahat 1</b> <i>10.00 - 10.15</i>
			</div>
			<div class="chip grey lighten-4 right">
			  <b>Istirahat 2</b> <i>11.45 - 12.30</i>
			</div>
	<!--==========================================END SABTU===================================================-->
	</div>
  </div>
 </div>
 </div>
</main>