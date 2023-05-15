

<?php
include("connection.php");



	session_start();
    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
        
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            session_destroy();
            header('Location: register.php');
            exit;
        }
    }
    else {
        header("Location: register.php");
    }


    

?>

<html>
<head>
	<title>Welcome to HotHomeINC!</title>

	<link rel="stylesheet" type="text/css" href="style/css/new.css">
	<link rel="stylesheet" type="text/css" href="style/css/sellnew.css">
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


		
         <div id="mainViewContainer">

              <div id="mainContent">
                   <h1>Mortgage Calculator</h1>
              </div>

              <div id="gridViewContainer">

              	<?php
              				if(isset($_POST['submit'])) {
							$loan_amount = $_POST['loan_amount'];
							$interest_rate = $_POST['interest_rate'];
							$loan_term = $_POST['loan_term'];
							$monthly_interest_rate = ($interest_rate/100)/12;
							$number_of_payments = $loan_term*12;
							$monthly_payment = ($loan_amount*$monthly_interest_rate*pow(1+$monthly_interest_rate,$number_of_payments))/(pow(1+$monthly_interest_rate,$number_of_payments)-1);
							$total_payment = $monthly_payment*$number_of_payments;
							echo "<p>Monthly payment: $".number_format($monthly_payment,2)."</p>";
							echo "<p><Total payment: $".number_format($total_payment,2)."</p>";
							}
              	?>

              	
					<form id="loginForm" method="post" action="">
						<label>Loan amount:</label>
						<input type="number" name="loan_amount" required><br><br>
						<label>Interest rate:</label>
						<input type="number" step="0.01" name="interest_rate" required><br><br>
						<label>Loan term (in years):</label>
						<input type="number" name="loan_term" required><br><br>
						<input type="submit" name="submit" value="Calculate">
					</form>


             </div>
          
        </div>

			

		</div>
            <div class="footer">
                    <div class="f-about">
                    <h3>About us</h3>
                    <p>HotHomeINC. is the most popular and most trusted real estate website in Canada. 
                      HotHomeINC. provides up-to-date and reliable information that makes finding your 
                      dream property easy and enjoyable. HotHomeINC. is popular with sellers, buyers, and renters, 
                      and is accessible online. </p>
                    </div>
                    <div class="f-about">
                    <h3>Contact Information</h3>
                    <p>#4000 Victoria Park Ave Toronto,  Ontario, M2H 3P4</p>
                     <p>   +1 (416) 291-5155 </p>
                       <p> 9.30am to 7.30pm EST Everyday
                        </p>
                    </div>

    </div>

	</div>

	


</body>

</html>
