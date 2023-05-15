<?php
	include("connection.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}


	session_start();
        
?>

<html>
<head>
	<title>Welcome to HotHomeINC.</title>
	
	<link rel="stylesheet" type="text/css" href="style/css/new.css">
	<link rel="stylesheet" type="text/css" href="style/css/sellnew.css">
	<script   src="https://code.jquery.com/jquery-3.6.3.js"   integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="style/js/register.js"></script>
</head>
<body>




<div id="mainContainer">

		<div id="topContainer">



			<div id="navBarContainer">
				<nav class="navBar">

					<a href="index.php" class="navItem" class="logo" style="text-decoration: none; font-size: 25px; color: #07d159">
						HotHomeINC.
					</a>


					<div class="group">

						<div class="navItem">
							<a href="search.php" class="navItemLink">Search
								
							</a>
						</div>

					</div>

					<div class="group">
					
						<div class="navItem">
							<a href="sell.php" class="navItemLink">Sell</a>
						</div>

            <div class="navItem">
              <a href="explore.php" class="navItemLink">Explore</a>
            </div>

						

            <div class="navItem">
              <a href="register.php?action=logout" class="navItemLink">Sign out</a>
            </div>
            <div class="navItem">
              <a href="contactUs.php" class="navItemLink">Contact Us</a>
            </div>
             <div class="navItem">
              <a href="mortgage.php" class="navItemLink">Mortgage Calculator</a>
            </div>

					</div>




				</nav>

      
			

		  </div>





	<?php
		if(isset($_POST['registerButton'])){
			echo '<script>
						$(document).ready(function() {
								$("#loginForm").hide();
								$("#registerForm").show();
						});	

				  </script>';
		}else{
			echo '<script>
						$(document).ready(function() {
								$("#loginForm").show();
								$("#registerForm").hide();
						});	

				  </script>';
		}
	?>
		<div id="background">

				<div id="loginContainer">

						<div id="inputContainer">


								<!--<form id="adminForm" action="register.php" method="POST">
									<h2>Admin Login</h2>
										<p>
											<?php echo $account->getError(Constants::$adminFailed); ?>
											<label for="adminUsername">Username</label>
											<input id="adminUsername" name="adminUsername" type="text" placeholder="Your username" required>
										</p>
										<p>
											<label for="adminPassword">Password</label>
											<input id="adminPassword" name="adminPassword" type="password" placeholder="Your password" required>
										</p>

									<button type="submit" name="adminButton">LOG IN</button>
									
								</form>-->

								<form style="display: block; text-align: center;" id="loginForm" action="register.php" method="POST">
									<h2>Login to your account</h2>
										<p>
											<?php echo $account->getError(Constants::$loginFailed); ?>
											<label for="loginUsername">Username</label>
											<input id="loginUsername" name="loginUsername" type="text" placeholder="Your username" required>
										</p>
										<p>
											<label for="loginPassword">Password</label>
											<input id="loginPassword" name="loginPassword"  type="password" placeholder="Your password" required>
										</p>

									<button type="submit"  class="bookNowButton" name="loginButton">LOG IN</button>
									
									<div class="hasAccount">
										<br><span style="cursor:pointer;" id="hideLogin">Don't have an account yet? Sign up.</span>
									</div>
								</form>



							<form style="display: block; text-align: center;" id="registerForm" action="register.php" method="POST">
								<h2>Create account</h2>
								<p>
									<?php echo $account->getError(Constants::$usernameCharacters); ?>
									<?php echo $account->getError(Constants::$usernameTaken); ?>
									<label for="username">Username</label>
									<input id="username" name="username" type="text" placeholder="Your username" value="<?php getInputValue ('username') ?>" required>
								</p>

								<p>
									<?php echo $account->getError(Constants::$firstNameCharacters); ?>
									<label for="firstName">First name</label>
									<input id="firstName" name="firstName" type="text"  value="<?php getInputValue('firstName') ?>" required>
								</p>

								<p>
									<?php echo $account->getError(Constants::$lastNameCharacters); ?>
									<label for="lastName">Last name</label>
									<input id="lastName" name="lastName" type="text"  value="<?php getInputValue('lastName') ?>" required>
								</p>

							


								<p>
									<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
									<?php echo $account->getError(Constants::$emailTaken); ?>
									<label for="email">Email</label>
									<input id="email" name="email" type="email" placeholder="XYZ@gmail.com" value="<?php getInputValue('email') ?>" required>
								</p>

								<p>
									<label for="email2">Confirm email</label>
									<input id="email2" name="email2" type="email" placeholder="XYZ@gmail.com" value="<?php getInputValue('email2') ?>" required>
								</p>

								<p>
									<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
									
									<?php echo $account->getError(Constants::$passwordCharacters); ?>
									<label for="password">Password</label>
									<input id="password" name="password" type="password" placeholder="Your password" required>
								</p>

								<p>
									<label for="password2">Confirm password</label>
									<input id="password2" name="password2" type="password" placeholder="Your password" required>
								</p>

								<button type="submit" class="bookNowButton" name="registerButton">SIGN UP</button>
								<div class="hasAccount">
										<br><span style="cursor:pointer;" id="hideRegister">Already have an account? Login here.</span>
									</div>
								
							</form>


						</div>
							<div id="rightContent">
									<div id="loginText">
									
									<!--<h2>Real Estate made easy</h2>
									<ul>
										<li>Buying and Selling on fingertips.</li>
										<li>Search the largest collection of luxury homes.</li>
									</ul>-->
									</div>

								


							</div>

						
				</div>		


		</div>
	</div>
	</div>	
</body>
</html>