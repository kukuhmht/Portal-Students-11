<br/>
<main>
 
 <div class="container">
 <div class="row">
  
	<div class="col s12 m6">
	  <div class="card col s12">
		<div class="card-content">
		  <span class="btn card-title"> OOP </span>
		</div>
		<ul class="collapsible popout" data-collapsible="expandable">
			<li>
			  <div class="collapsible-header">Kelompok 1</div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped bordered">
					<?php $no=1; foreach ($datakelompok as $row) { ?>
					  <tr>
						<td> <?php echo $no++ ?> </td>
						<td> <?php echo $row->nama_siswa ?> </td>
					  </tr>
					<?php }?>
				  </table>
				</span>
			  </div>
			</li>
		</ul>
	  </div>
	  <div class="card col s12">
		<div class="card-content">
		  <span class="btn card-title"> Web Dinamis </span>
		</div>
		<ul class="collapsible popout" data-collapsible="expandable">
			<li>
			  <div class="collapsible-header">Kelompok 1</div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped bordered">
					<?php $no=1; foreach ($datakelompok as $row) { ?>
					  <tr>
						<td> <?php echo $no++ ?> </td>
						<td> <?php echo $row->nama_siswa ?> </td>
					  </tr>
					<?php }?>
				  </table>
				</span>
			  </div>
			</li>
		</ul>
	  </div>
	</div>
	
	<div class="card col s12 m6">
	  <div class="col s12">
		<div class="card-content">
		  <span class="btn card-title"> Model PL </span>
		</div>
		<ul class="collapsible popout" data-collapsible="expandable">
			<li>
			  <div class="collapsible-header">Kelompok 1</div>
			  <div class="collapsible-body">
				<span>
				  <table class="striped bordered">
					<?php $no=1; foreach ($datakelompok as $row) { ?>
					  <tr>
						<td> <?php echo $no++ ?> </td>
						<td> <?php echo $row->nama_siswa ?> </td>
					  </tr>
					<?php }?>
				  </table>
				</span>
			  </div>
			</li>
		</ul>
	  </div>
	</div>
  
 </div>
 </div> 

</main>