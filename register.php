<?php
include("header.php");
?>

<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="register.php" method="POST">
				<!-- Display Errors Here -->
				<!-- <?php include("errors.php") ?> -->
				<span class="login100-form-logo">
					<i class="zmdi zmdi-landscape"></i>
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
					Sign Up
				</span>

				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $username ?>">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="email" name="email" placeholder="Email" value="<?php echo $email ?>">
					<span class="focus-input100" data-placeholder="&#xf203;"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password_1" placeholder="Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="password_2" placeholder="Confirm Password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="register">
						Register
					</button>
				</div>

				<div class="text-center p-t-90">
					<p class="txt1">Already have an account? <a href="login.php" class="txt2">Sign In</a></p>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>