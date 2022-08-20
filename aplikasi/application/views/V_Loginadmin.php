<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title>Login Admin</title>

 <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/');?>css/grayscale.min.css" rel="stylesheet">

</head>
	<body id="page-top" style="background-image: url('assets/img/cirebon.jpg'); background-size: 100% ;">
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" style="background-color: #5ca39b;">
				<h3 style="color: white; font-family: 'Times';">Sign In Sebagai Admin</h3>
				<div style="color: red;"><b> <?php 
      $br = $this->session->flashdata('message');
      echo $br;
    ?></b> </div>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('login_admin/aksi_login_admin') ?>" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					
					<div class="form-group">
						 <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>