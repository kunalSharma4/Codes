<?php 
      include("connection.php");
      include("mail.php");
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
  <link rel="stylesheet" type="text/css" href="style/css/contactUs.css">

  <link rel="stylesheet" type="text/css" href="style/css/new.css">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
              <a href="search.php" class="navItemLink">Search</a>
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



        </nav>

      
      

      </div>


    
         <div id="mainViewContainer">
              <div class="contact-box">
                   
                  <div class="contactForm">
                  <h1>Contact us on our Email</h1>
                  <form   method="POST">
                      <input id="name" name="name" type="text" placeholder="Your Name" required>
                      <input id="email" name="email" type="email" placeholder="Your Email Address" required>
                      <input id="phone" name="phone" type="text" placeholder="Your Number" required>
                      <input id="subject" name="subject" type="text" placeholder="Email Subject" required>
                      <textarea id="message" name="message" rows="10" type="text" placeholder="Your message here..." required></textarea>

                  <button type="submit"  value="send" name="submit" id="submit">Send message</button>           
                </form>
                  </div>
                  <div class="contact-info"> 
                    <h1 class="sub-title"> Contact Info</h1>
                    <div>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <p> #4000 Victoria Park Ave Toronto, Ontario, M2H 3P4
                    </p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:#">hothome.inc@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:#">(+1)416-291-5155</a>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                    </ul> 
            </div>
            <div class="contact-map">
        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.128750410982!2d-79.34887198894411!3d43.81168874204626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d37201da4057%3A0x7d23466a116ce50a!2s4000%20Victoria%20Park%20Ave%2C%20North%20York%2C%20ON%20M2H%203S7!5e0!3m2!1sen!2sca!4v1681952302501!5m2!1sen!2sca"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            

              </div>
        </div>

      

    </div>

  </div>

  


</body>
