<div class="navbar-fixed">
  <!-- Dropdown Structure -->
	<ul id="logout" class="dropdown-content">
	  <li><a href="<?php echo base_url('login/login/logout');?>">Logout</a></li>
	</ul>
	<nav class="z-depth-2">
	  <div class="nav-wrapper green lighten-1">
		<a href="<?php echo base_url('dashboard'); ?>" class="brand-logo hide-on-med-and-down">&nbsp; <?php echo $title ?></a>
		<a href="<?php echo base_url('dashboard'); ?>" class="hide-on-med-and-up">&nbsp; <?php echo $title ?></a>
		<ul class="right hide-on-med-and-down">
		  <!-- Dropdown Trigger -->
		  <li><a class="dropdown-button" href="#!" data-activates="logout"><?php echo $this->session->userdata('username');?> Akun <i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	  </div>
	</nav>
</div>