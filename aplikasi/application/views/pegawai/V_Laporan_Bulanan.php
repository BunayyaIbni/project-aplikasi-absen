<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Laporan Pegawai</title>

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
      <li><a href="<?php echo base_url('pegawai') ?>">Home</a></li>
      <li><a href="<?php echo base_url('pegawai/input') ?>">Input Laporan</a></li>
      <li class="current"><a href="<?php echo base_url('pegawai/laporan_bulanan') ?>">Laporan Bulanan</a></li>
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
	<div class="s-content content">
            <main class="row content__page">
                
                <section class="column large-full entry format-standard">

                    <div class="media-wrap">
                        
                    </div>

                    <div class="content__page-header">
                        <h2 class="display-1">
                        Laporan
                        </h2>
                    </div> <!-- end content__page-header -->

	
	<form action="<?php echo base_url('pegawai/nyari_laporan'); ?>" method="POST">
	<table>
		<td>Bulan</td>
		<td><select name="bulan">
			<option value="01">Januari</option>
			<option value="02">Febuari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select></td>
		<tr>
			<td>Tahun</td>
			<td><select name="tahun">
				<?php
					$mulai= date('Y') - 50;
					for($i = $mulai;$i<$mulai + 100;$i++){
  					  $sel = $i == date('Y') ? ' selected="selected"' : '';
  					  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
						}
			?>
		</select></td>
		</tr>
	</table>
		<input type="submit" name="kirim" value="cari">
	</form>
	</section>
</main>
</div>
</body>
</html>