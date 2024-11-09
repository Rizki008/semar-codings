<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/backend/') ?>vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/backend/') ?>vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/backend/') ?>vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/') ?>vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/') ?>vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/') ?>vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="<?= base_url('assets/backend/') ?>vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>

		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="<?= base_url('assets/backend/') ?>vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Forgot Password</h2>
						</div>
						<h6 class="mb-20">Enter your username address to reset your password</h6>
						<form>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
										<a class="btn btn-primary btn-lg btn-block" href="index.html">Submit</a>
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="<?= base_url('auth/login_user') ?>">Login</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?= base_url('assets/backend/') ?>vendors/scripts/core.js"></script>
	<script src="<?= base_url('assets/backend/') ?>vendors/scripts/script.min.js"></script>
	<script src="<?= base_url('assets/backend/') ?>vendors/scripts/process.js"></script>
	<script src="<?= base_url('assets/backend/') ?>vendors/scripts/layout-settings.js"></script>
</body>

</html>
