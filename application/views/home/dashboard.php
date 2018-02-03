<main> <!--style="background-image: url('<?php echo base_url(); ?>assets/images/background4.jpg');"-->
	<div class="container">
	<div class="row">
<br/>
<?php if($this->session->userdata('hak_akses') == 'siswa') {?>
<!--p> hak akses siswa </p-->
	<div class="col s12">
<!--Profil Kelas-->
		<div class="row">
			<a href="profil_kelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/profilkelas_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Profil Kelas </center>
				<center class="card-title hide-on-med-and-down">Profil Kelas</center>
			  </div>
			</div>
			</a>
<!--Siswa-->
			<a href="siswa">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Siswa </center>
				<center class="card-title hide-on-med-and-down">Siswa</center>
			  </div>
			</div>
			</a>
<!--Tugas-->
			<a href="tugas_siswa">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/tugas_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Tugas </center>
				<center class="card-title hide-on-med-and-down">Tugas</center>
			  </div>
		    </div>
		    </a>
		</div>
<!--Jadwal Pelajaran-->
	  <div class="col s12">
			<a href="matapelajaran">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/jadwalpelajaran_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Jadwal Pelajaran </center>
				<center class="card-title hide-on-med-and-down">Jadwal Pelajaran</center>
			  </div>
			</div>
		    </a>
<!--Struktur Organisasi-->
			<a href="strukturorganisasi">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/strukturorganisasi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Struktur Organisasi </center>
				<center class="card-title hide-on-med-and-down">Struktur Organisasi</center>
			  </div>
			</div>
		    </a>
	  </div>
<?php }else if($this->session->userdata('hak_akses') == 'walikelas'){ ?>
	  <div class="col s12">
<!--p>hak akses Wali Kelas </p-->
	  <!--Wali Kelas-->
			<a href="absensi_walikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Absensi </center>
				<center class="card-title hide-on-med-and-down">Absensi</center>
			  </div>
			</div>
			</a>
	  <!--Nilai-->
			<a href="nilai_walikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Nilai Kelas</center>
				<center class="card-title hide-on-med-and-down">Rekapan Nilai Kelas</center>
			  </div>
		    </div>
		    </a>
<?php }else if($this->session->userdata('hak_akses') == 'absensi'){?>
	  <div class="col s12">
<!--p>hak akses Seksi Absensi </p-->
	  <!--Absen-->
			<a href="absensikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Absensi </center>
				<center class="card-title hide-on-med-and-down">Absensi</center>
			  </div>
			</div>
			</a>
	  </div>
<?php }else if($this->session->userdata('hak_akses') == 'guru'){?>
	  <div class="col s12">
<!--p> hak akses guru </a-->
<!--Nilai Siswa (Hak Akses Guru)-->
			<a href="nilai_guru">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Nilai Siswa</center>
				<center class="card-title hide-on-med-and-down">Nilai Siswa</center>
			  </div>
		    </div>
		    </a>
<!--Tugas-->
			<a href="tugas_guru">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/tugas_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Tugas </center>
				<center class="card-title hide-on-med-and-down">Tugas</center>
			  </div>
		    </div>
		    </a>
	  </div>
<?php }else if($this->session->userdata('hak_akses') == 'bk'){?>
	  <div class="col s12">
<!--p> hak akses BK </a-->
<!--Absensi Siswa (Hak Akses BK)-->
			<a href="absensi_bk">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Absensi Siswa</center>
				<center class="card-title hide-on-med-and-down">Rekapan Absensi Siswa</center>
			  </div>
		    </div>
		    </a>
<!--Rekapan Nilai (Hak Akses BK)-->
			<a href="nilai_bk">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Nilai </center>
				<center class="card-title hide-on-med-and-down"> Nilai </center>
			  </div>
		    </div>
		    </a>
	  </div>
<?php }else if($this->session->userdata('hak_akses') == 'kurikulum'){?>
	  <div class="col s12">
<!--p> hak akses kurikulum </a-->
<!--Membuat data Guru (Hak Akses kurikulum)-->
			<a href="dataguru_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/guru_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Data Guru </center>
				<center class="card-title hide-on-med-and-down"> Data Guru </center>
			  </div>
		    </div>
		    </a>
<!--Membuat jadwal Pelajaran (Hak Akses kurikulum)-->
			<a href="jadwalpelajaran_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/catatan_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Jadwal Pelajaran</center>
				<center class="card-title hide-on-med-and-down">Jadwal Pelajaran</center>
			  </div>
		    </div>
		    </a>
<!--Membuat Matapelajaran (Hak Akses kurikulum)-->
			<a href="matapelajaran_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/jadwalpelajaran_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Matapelajaran</center>
				<center class="card-title hide-on-med-and-down">Matapelajaran</center>
			  </div>
		    </div>
		    </a>
<!--Rekapan Nilai Siswa (Hak Akses kurikulum)-->
			<a href="nilai_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Nilai Siswa</center>
				<center class="card-title hide-on-med-and-down">Rekapan Nilai Siswa</center>
			  </div>
		    </div>
		    </a>
	  </div>
<?php }else if($this->session->userdata('hak_akses') == 'kesiswaan'){?>
	  <div class="col s12">
<!--p> Hak Akses Kesiswaan </p-->
<!--Kelas-->
			<a href="kelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Kelas & Siswa</center>
				<center class="card-title hide-on-med-and-down">Kelas & Siswa</center>
			  </div>
			</div>
			</a>
<!--Ruang Kelas-->
			<a href="ruangkelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/guru_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Ruang Kelas </center>
				<center class="card-title hide-on-med-and-down"> Ruang Kelas </center>
			  </div>
			</div>
			</a>
	  </div>

<!--=======================HAK AKSES ADMIN=============================-->
<?php }else if($this->session->userdata('hak_akses') == 'admin'){?>
<p> hak akses Siswa </p>
	<div class="col s12">
<!--Profil Kelas-->
		<div class="row">
			<a href="profil_kelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/profilkelas_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Profil Kelas </center>
				<center class="card-title hide-on-med-and-down">Profil Kelas</center>
			  </div>
			</div>
			</a>
<!--Siswa-->
			<a href="siswa">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Siswa </center>
				<center class="card-title hide-on-med-and-down">Siswa</center>
			  </div>
			</div>
			</a>
<!--Tugas-->
			<a href="tugas_siswa">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/tugas_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Tugas </center>
				<center class="card-title hide-on-med-and-down">Tugas</center>
			  </div>
		    </div>
		    </a>
		</div>
<!--Jadwal Pelajaran-->
	  <div class="col s12">
			<a href="matapelajaran">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/jadwalpelajaran_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Jadwal Pelajaran </center>
				<center class="card-title hide-on-med-and-down">Jadwal Pelajaran</center>
			  </div>
			</div>
		    </a>
<!--Struktur Organisasi-->
			<a href="strukturorganisasi">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/strukturorganisasi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Struktur Organisasi </center>
				<center class="card-title hide-on-med-and-down">Struktur Organisasi</center>
			  </div>
			</div>
		    </a>
	  </div>
	  <div class="col s12">
<p>hak akses Wali Kelas </p>
	  <!--Wali Kelas-->
			<a href="absensi_walikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Absensi </center>
				<center class="card-title hide-on-med-and-down">Absensi</center>
			  </div>
			</div>
			</a>
	  <!--Nilai-->
			<a href="nilai_walikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Nilai Kelas</center>
				<center class="card-title hide-on-med-and-down">Rekapan Nilai Kelas</center>
			  </div>
		    </div>
		    </a>
	  <div class="col s12">
<p>hak akses Seksi Absensi </p>
	  <!--Absen-->
			<a href="absensikelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Absensi </center>
				<center class="card-title hide-on-med-and-down">Absensi</center>
			  </div>
			</div>
			</a>
	  </div>
	  <div class="col s12">
<p> hak akses guru </p>
<!--Nilai Siswa (Hak Akses Guru)-->
			<a href="nilai_guru">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Nilai Siswa</center>
				<center class="card-title hide-on-med-and-down">Nilai Siswa</center>
			  </div>
		    </div>
		    </a>
<!--Tugas-->
			<a href="tugas_guru">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/tugas_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Tugas </center>
				<center class="card-title hide-on-med-and-down">Tugas</center>
			  </div>
		    </div>
		    </a>
	  </div>
	  <div class="col s12">
<p> hak akses BK </a>
<!--Absensi Siswa (Hak Akses BK)-->
			<a href="absensi_bk">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/absensi_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Absensi Siswa</center>
				<center class="card-title hide-on-med-and-down">Rekapan Absensi Siswa</center>
			  </div>
		    </div>
		    </a>
<!--Rekapan Nilai (Hak Akses BK)-->
			<a href="nilai_bk">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Nilai </center>
				<center class="card-title hide-on-med-and-down"> Nilai </center>
			  </div>
		    </div>
		    </a>
	  </div>
	  <div class="col s12">
<p> hak akses kurikulum </p>
<!--Membuat data Guru (Hak Akses kurikulum)-->
			<a href="dataguru_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/guru_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Data Guru </center>
				<center class="card-title hide-on-med-and-down"> Data Guru </center>
			  </div>
		    </div>
		    </a>
<!--Membuat jadwal Pelajaran (Hak Akses kurikulum)-->
			<a href="jadwalpelajaran_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/catatan_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Jadwal Pelajaran</center>
				<center class="card-title hide-on-med-and-down">Jadwal Pelajaran</center>
			  </div>
		    </div>
		    </a>
<!--Membuat Matapelajaran (Hak Akses kurikulum)-->
			<a href="matapelajaran_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/jadwalpelajaran_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Matapelajaran</center>
				<center class="card-title hide-on-med-and-down">Matapelajaran</center>
			  </div>
		    </div>
		    </a>
<!--Rekapan Nilai Siswa (Hak Akses kurikulum)-->
			<a href="nilai_kurikulum">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/nilai_md.png">
				</div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Rekapan Nilai Siswa</center>
				<center class="card-title hide-on-med-and-down">Rekapan Nilai Siswa</center>
			  </div>
		    </div>
		    </a>
	  </div>
	  <div class="col s12">
<p> Hak Akses Kesiswaan </p>
<!--Kelas-->
			<a href="kelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Kelas & Siswa</center>
				<center class="card-title hide-on-med-and-down">Kelas & Siswa</center>
			  </div>
			</div>
			</a>
<!--Ruang Kelas-->
			<a href="ruangkelas">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/guru_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Ruang Kelas </center>
				<center class="card-title hide-on-med-and-down"> Ruang Kelas </center>
			  </div>
			</div>
			</a>
	  </div>
	  <div class="col s12">
<p> Hak Akses Admin </p>
<!--Setting User-->
			<a href="admin/user">
			<div class="col s4 m4">
			  <div class="transparent">
				<div class="card-image">
		          <img class="responsive-img imagehover" src="<?php echo base_url(); ?>assets/images/siswa_md.png">
		        </div>
				<center class="subjudulsmall-menu hide-on-med-and-up"> Setting User </center>
				<center class="card-title hide-on-med-and-down">Setting User</center>
			  </div>
			</div>
			</a>
	  </div>
<?php } ?>
<!--==========================END HAK AKSES ADMIN=============================-->
	</div>
	</div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>