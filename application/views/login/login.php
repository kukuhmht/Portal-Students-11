<main style="
	background-image: url('<?php echo base_url('assets/images/bglogin7.png');?>');
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
">
<?php
if (isset($this->session->userdata['login'])) {

header("location: http://localhost/ProjectKPR/login/login/user_login");
}
?>
	<div class="container">
	<div class="row">
<div class="col s12">
<div class="col s3">
</div>
	<div class="col s12 m6">
		<div class="col s12">
			<?php
				echo "<div class='red-text'>";
				if (isset($error_message)) {
					echo $error_message;
				}
				echo validation_errors();
				echo "</div>";
			?>
		</div>
		<center>
			<p> <img class="responsive-img" src="<?php echo base_url('assets/images/logo_portalstudent_v6.png');?>" /> </p>
			<!--p class="brand-logo" style="font-Style: roboto; font-Size: 30px;"> Masuk </p-->
		</center>
	<?php echo form_open('login/login/user_login'); ?>
		<div class="input-field col s12">
			<input id="no_identitas" name="no_identitas" type="text" class="validate" data-position="top" data-delay="50" data-tooltip="Masukan Nomor Identitas: NIP/NIS/Admin">
			<label for="no_identitas">Username</label>
		</div>
		<div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
		<center class="col s12">
			<button class="waves-effect waves-light green btn col s12" type="submit" value="masuk" name="masuk"> Masuk </button>
		</center>
	<?php echo form_close(); ?>
	  <div class="col s12">
		<center>
			<br/>
			<span> Daftar Sebagai.. </span>
		</center>
		<center>
			<a href="<?php echo base_url();?>login/daftar_siswa" class="waves-effect waves-light green lighten-2 btn"> Siswa </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="<?php echo base_url();?>login/daftar_guru" class="waves-effect waves-light green lighten-2 btn"> Guru </a>
		</center>
		<br><br>
	  </div>
	</div>
<div class="col s3">
</div>
</div>
	</div>
	</div>
	<br>
</main>
