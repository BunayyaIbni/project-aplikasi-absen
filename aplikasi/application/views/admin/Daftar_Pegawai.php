<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Utama Admin</title>

  <!-- Custom fonts for this template-->
 <!-- <link href="<?php echo base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

  <!-- Custom styles for this template-->
 <!-- <link href="<?php echo base_url('assets/mas');?>css/sb-admin-2.min.css" rel="stylesheet"> -->



  	<link rel="stylesheet" href="<?php echo base_url('assets/master/');?>css/base.css">
  	<link rel="stylesheet" href="<?php echo base_url('assets/master/');?>css/tabel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/master/');?>css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/master/');?>css/main.css">
    <script src="<?php echo base_url('assets/master/');?>js/modernizr.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/master/');?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/master/');?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/master/');?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url('assets/master/');?>site.webmanifest">

</head>

<body>

	<header class="s-header">
  <nav class="header__nav-wrap">

    <ul class="header__nav">
      <li><a href="<?php echo base_url('admin') ?>">Home</a></li>
      <li  class="current"><a href="<?php echo base_url('admin/daftar_pegawai') ?>">Daftar Pegawai</a></li>
      <li><a href="<?php echo base_url('admin/laporan_pegawai') ?>">Laporan Pegawai</a></li>
      <li><a href="<?php echo base_url('login_admin/logout'); ?>">Logout</a>
    </ul>
  </nav> <!-- end header__nav-wrap -->
  </header>

  <div class="s-content">  	
  <?php 
      $br = $this->session->flashdata('message');
      echo $br;
    ?>
  <div class="ma2019-0sonry-wrap">

    <article>                          
      <div class="entry__thumb">
        <div class="kiri-foto"><img src="<?php echo base_url('logo/');?>dkis-biru.png" width="85" margin-left:10px;>
        </div>
        <div class="kanan-foto"><img src="<?php echo base_url('logo/');?>huha.png"></div>
      </div>
    </article>
  </div>
</div>

<br>
<br>
<br>
<br>
<div id="kanan">
	<form action="<?php echo base_url('admin/tambah') ?>" method="post"> 
			<br>
			<input type="submit" name="tambah" value="tambah pegawai">
		</form>
  </div>
	<br>
	<div class="s-content content">           
     <div class="media-wrap">

		
		<table border="1">
		<tr>
			<th>NO</th>
			
			<th>Nama Pegawai</th>
			<th>Bidang</th>
			<th>Username</th>
			<th>Password</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>

		<?php

			$no = 1;
			foreach ($data->result() as $ci):
				
			
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			
			<td><?php echo $ci->nama_pegawai; ?></td>
			<td><?php echo $ci->bidang; ?></td>
			<td><?php echo $ci->username; ?></td>
			<td><?php echo $ci->password; ?></td>
			<td><img src="<?php echo base_url('foto_profil/'.$ci->foto) ?>" widht="300" height="300"></td>
			<td>
				<ul class="header__social">
                  <li class="ss-dribbble">
				<a href="/ibni/admin/edit/<?php echo $ci->id_pegawai;?>">Edit</a>
				<span class="screen-reader-text">Edit</span>
                </a>
            </li>
        </ul>

        <ul class="header__social">
                  <li class="ss-pinterest">
				<a href="/ibni/admin/hapus/<?php echo $ci->id_pegawai;?>">Hapus
				<span class="screen-reader-text">Hapus</span>
				</a>
			</li>
		</ul>
			</td>
		</tr>

		<?php
			endforeach;
		?>
	</table>
	</center>
</body>
</html>