<?php $this->load->view('layout/head')?>
<main>
<?php
if (isset($this->session->userdata['login'])) {

header("location: http://localhost/ProjectKPR/login/login/user_login");
}
?>
  <div class="slider fullscreen">
	<ul class="slides">
	  <li>
        <img src="<?php echo base_url();?>assets/images/wp1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Masuk</h3>
          <h5>
<!--FORM LOGIN-->
			<div class="col s12">
			<div class="col s3">
			</div>
			<div class="col s12 m6 z-depth-2">
				<div class="card col s12">
					<?php
						echo $this->session->userdata('pesan');
					?>
				</div>
				<br>
			<?php echo form_open('login/login/user_login'); ?>
				<div class="input-field col s12">
					<input id="no_identitas" name="no_identitas" type="text" class="validate tooltipped" data-position="top" data-delay="50" data-tooltip="Masukan Nomor Identitas: NIP/NIS/Admin">
					<label for="no_identitas">Nomor Identitas</label>
				</div>
				<div class="input-field col s12">
				  <input id="password" name="password" type="password" class="validate">
				  <label for="password">Password</label>
				</div>
				<center class="col s12">
					<button class="waves-effect waves-light blue btn" type="submit" value="masuk" name="masuk"> Masuk </button>
				</center>
			<?php echo form_close(); ?>
			  <div class="col s12">
				<center>
					<br/>
					<span> Daftar Sebagai.. </span>
				</center>
				<center>
					<a href="<?php echo base_url();?>login/daftar_siswa" class="waves-effect waves-light green btn"> Siswa </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href="<?php echo base_url();?>login/daftar_guru" class="waves-effect waves-light green btn"> Guru </a>
				</center>
				<br><br>
			  </div>
			</div>
			<div class="col s3">
			</div>
			</div>
<!--END FORM LOGIN-->
		  </h5>
		</div>
      </li>
    </ul>
  </div>
</main>
<?php $this->load->view('layout/footer')?>