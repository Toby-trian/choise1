<!DOCTYPE html>
<html lang="en">
<head>
	<title>Choise-Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets2/daftar/images/icons/favicon.ico') ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/animsition/css/animsition.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/vendor/daterangepicker/daterangepicker.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/daftar/css/main.css') ?>">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-150" action="<?php echo base_url('Daftar/') ?>" method="post">
					<span class="login100-form-title">
						Daftar
					</span>

					<?php if($this->session->flashdata('msg_gagal')):?>
						<div class="alert alert-danger">
							<?php  echo $this->session->flashdata('msg_gagal')?>
						</div>
					<?php endif ;?>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" id="password" name="pass" placeholder="Kata Sandi" id="txtPassword">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please re-enter password">
						<input class="input100" type="password" name="repass" id="confirm_password" placeholder="Konfirmasi Kata Sandi" id="txtComfirmPassword">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn p-t-26">
						
						<input type="submit" value="Daftar" class="login100-form-btn">
					</div>

					<div class="flex-col-c p-t-50 p-b-40">
						<span class="txt1 p-b-9">
							Sudah punya akun?
						</span>

						<a href="<?php echo base_url('Home/login2') ?>" class="txt3">
							Masuk Sekarang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		var password = document.getElementById("password")
		, confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
			if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Tidak Sama");
			} else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>

	<script type="text/javascript">        
		$(document).ready(function(){
			$('#email').change(function(){
				var email = $('#email').val();
				if(email != ''){
					$.ajax({
						url: "<?php echo base_url(); ?>Daftar/checkUsername",
						method: "POST",
						data: {email:email},
						success: function(data){
							$('#username_result').html(data);
							processData: false
						}
					});
				}
			});
		});
	</script>
	
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/animsition/js/animsition.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets2/daftar/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets2/daftar/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/vendor/countdowntime/countdowntime.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets2/daftar/js/main.js') ?>"></script>

</body>
</html>