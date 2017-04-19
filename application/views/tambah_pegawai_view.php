<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UTS Framework</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">UTS Dota</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav navbar-right">
										<li class="active"><a href="<?php echo site_url('pegawai') ?>">Jenis Hero</a></li>
									</ul>
									
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

					<?php echo form_open_multipart('pegawai/create'); ?>
								<center><h2>Tambah Jenis Hero</h2></center><br>
								<?php echo validation_errors(); ?>
								<table class="" border=0 width="500" cellpadding="0" cellspacing="0" align="center">
								
								<tr>
									<td>
									<div class="form-group input-group">
									<label>Keterangan</label>
									<textarea rows="3" cols="58" placeholder="Masukkan Keterangan" class="form-control" id="keterangan" name="keterangan"></textarea>
									</td>
								</tr>
								<tr>
									<td align="right">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<button type="reset" class="btn btn-primary btn-danger">Reset</button>
									</td>
								</tr>
								</table>
					<?php echo form_close(); ?>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					</div>
					</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>