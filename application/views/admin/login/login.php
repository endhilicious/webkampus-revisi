<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>SIMPEG WAKATOBI</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=assets_url()?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=assets_url()?>css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=assets_url()?>css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=assets_url()?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=assets_url()?>img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?=assets_url()?>img/wakatobi.png" alt="wakatobi" height="120px"></div>
								<p class="lead">Login to your account</p>
							</div>
							<?=form_open(login_url(), array('class' => 'form-auth-small'))?>
								<?=validation_errors('<div>', '</div>')?>
			                    <?=($this->session->flashdata('gagal') ? '<div><b>'.$this->session->flashdata('gagal').'</b></div>' : '')?>
								<div class="form-group">
									<label for="signin-username" class="control-label sr-only">Username</label>
									<input type="username" class="form-control" name="username" id="signin-username" value="" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" id="signin-password" value="" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
									<label class="fancy-checkbox element-right">
										<a href="<?=login_url('forget')?>">Forget Password?</a>
									</label>
								</div>

								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							<?=form_close()?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Informasi Kepegawaian (SIMPEG)</h1>
							<p>Kabupaten Wakatobi</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
