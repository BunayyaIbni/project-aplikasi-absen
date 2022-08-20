<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Utama Pegawai</title>

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
    <div class="header__top">
      
    </div> <!-- ini akhir div buat header -->
            
  <nav class="header__nav-wrap">

    <ul class="header__nav">
      <li class="current"><a href="<?php echo base_url('pegawai') ?>">Home</a></li>
      <li><a href="<?php echo base_url('pegawai/input') ?>">Input Laporan</a></li>
      <li><a href="<?php echo base_url('pegawai/laporan_bulanan') ?>">Laporan Bulanan</a></li>
      <li><a href="<?php echo base_url('login_pegawai/logout'); ?>">Logout</a></li>
    </ul>
  </nav> <!-- end header__nav-wrap -->
  </header>

<div class="s-content">  	
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

<div class="s-content">

  <div id="kiri">
    <h2 class="untuk-h2-atas">Hai, <?php echo $this->session->userdata("nama"); ?> </h2>
  </div>
  <div id="kanan">
	  <form action="<?php echo base_url('bulan/cari/'); ?>" method="POST">
	    <table>
        <td style="padding:10px;">
        cari kegiatan berdasarkan bulan:</td>
        <td>
          <select name="bulan">
          <option value="Juli">Juli</option>
          <option value="Juli"></option>

          <option value="semua">--Semua Data--</option>
          <option value="Januari">Januari</option>
          <option value="Febuari">Febuari</option>
          <option value="Maret">Maret</option>
          <option value="April">April</option>
          <option value="Mei">Mei</option>
          <option value="Juni">Juni</option>
          <option value="Agustus">Agustus</option>
          <option value="September">September</option>
          <option value="Oktober">Oktober</option>
          <option value="November">November</option>
          <option value="Desember">Desember</option>
          </select>
        </td>
        <td><button type="submit" class="button"><span>Cari</span></button></td>
      </table>
    </form>
  </div>

<div style="margin-left:600px;">
   <p style="color: transparent;">semua data</p>
</div>
   	<!--  <form action="<?php echo base_url('pegawai/cari'); ?>" method="POST">
    <input type="text" name="pencarian" placeholder="cari">
    <input type="submit" name="kirim" value="cari">
  </form>  -->
<div class="s-content"> 	
  <div class="ma2019-0sonry-wrap">
    <article class="masonry__brick entry format-quote animate-this">                          
      <div class="entry__thumb">

        <table>
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Kegiatan</th>
              <th>Uraian</th>
              <th>Screenshoot</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <?php
          $no = $this->uri->segment('3') + 1;
          foreach ($data->result() as $ci):
          ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php cetak ($ci->nama_kegiatan); ?></td>
              <td><?php cetak ($ci->uraian); ?></td>
              <td><img src="<?php echo base_url('gambar/'.$ci->screenshoot) ?>" widht="120" height="120"></td>
              <td><?php cetak ($ci->tanggal); ?></td>
              <td>
                <ul class="header__social">
                  <li class="ss-dribbble">
                    <a href="../../pegawai/edit/<?php echo $ci->id;?>"></a>
                    <span class="screen-reader-text">Edit</span>
                    </a>
                  </li>
                </ul>
                <ul class="header__social">
                  <li class="ss-pinterest">
                    <a href="../../hapus_pegawai/hapus_juli/<?php echo $ci->id;?>">
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
      </div>
    </article>
  </div>
</div>

<article class="masonry__brick entry format-standard animate-this"> 
	<nav class='navbawah'>
  <?php 
	echo $this->pagination->create_links();
  ?>
	</nav>
</article>
</div>

  <input type="button" value="Ke Atas" id="tombolScrollTop" onclick="scrolltotop()">

 <!-- Java Script
    ================================================== -->
   

    <script src="<?php echo base_url('assets/master/');?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/master/');?>js/plugins.js"></script>
    <script src="<?php echo base_url('assets/master/');?>js/main.js"></script>	
    <script>
    	$(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
    </script>
</body>
</html>