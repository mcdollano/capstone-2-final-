<?php
	function get_title(){
			echo "Sign In"; 
		}

	function display_content(){ ?>
	
	<div class="login-container panel">
		<div class="login">
			<div>
				<h2>LOG IN</h2>
			</div>
			<form method="POST">
				<div class="user_password_container">
					<div class="form-group">
						<input type="text" class="loginkey form-control" name="login_username" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="loginkey login_password form-control" name="login_password" placeholder="Password">
					</div>
				</div>
				<div class="forgot_password_container">
					<span>Forgot your Password?</span> <a href="#">Click here</a><br>
				</div>
				<div class="form-group login-btn-container">
					<input type="submit" class="btn btn-primary login-btn form-control" name="login" value="Log In">
					<a href="index.php">
						<input type="button" class="btn btn-default login-btn form-control" name="cancel" value="Cancel">
					</a>
				</div>	
			</form>		
		</div>
	</div>
	<br>
	<div class="login-container panel register_container">
		<div class="register">
			<h2>CREATE A NEW ACCOUNT</h2>
			<form method="POST">
				<div class="form-group">
					<input type="text" class="registerkey form-control" name="register_firstname" placeholder="Firstname">
				</div>
				<div class="form-group">
					<input type="text" class="registerkey form-control" name="register_lastname" placeholder="Lastname">
				</div>
				<div class="form-group">
					<input type="text" class="registerkey form-control" name="register_email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" class="registerkey form-control" name="register_username" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" class="registerkey form-control" name="register_password" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="registerkey form-control" name="confirm_password" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary login-btn form-control" name="register" value="Register">
				<a href="index.php">
					<input type="button" href = "index.php" class="btn btn-default login-btn form-control" name="cancel" value="Cancel">
				</a>
				</div>
			</form>
		</div>
	</div>

<?php
}
?>

<?php
require_once('template.php');
?>
