<?php
include("connection.php");

//session_destroy(); LOGOUT

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
               <h1 style="text-align: left;">Houses For You</h1>
              <div id="mainContent">
                   
              </div>

              <div id="gridViewContainer">
                 <?php
                    $propertyQuery = mysqli_query($con,"SELECT * FROM Properties WHERE type = 'House' ORDER BY RAND() LIMIT 20");

                    while($row = mysqli_fetch_array($propertyQuery)){
                      echo " <div class='gridViewItem'> 
                              <a href='properties.php?id=" . $row['id'] . "'>
                                <img src ='displaypics/" . $row['pimage'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['title'] . 
                                "</div>
                              </a>  

                              </div>";




                    }

                   
                 ?>

             </div>



              <h1 style="text-align: left;">Condos For You</h1>
              <div id="mainContent">
                   
              </div>

              <div id="gridViewContainer">
                 <?php
                    $propertyQuery = mysqli_query($con,"SELECT * FROM Properties WHERE type = 'Condo' ORDER BY RAND() LIMIT 20");

                    while($row = mysqli_fetch_array($propertyQuery)){
                     echo " <div class='gridViewItem'> 
                              <a href='properties.php?id=" . $row['id'] . "'>
                                <img src ='displaypics/" . $row['pimage'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['title'] . 
                                "</div>
                              </a>  

                              </div>";


                    }
                 ?>

             </div>


              <h1 style="text-align: left;">Apartments for you</h1>
                   <div id="mainContent">
                   
              </div>

              <div id="gridViewContainer">
                 <?php
                    $propertyQuery = mysqli_query($con,"SELECT * FROM Properties WHERE type = 'Apartment' ORDER BY RAND() LIMIT 20");

                    while($row = mysqli_fetch_array($propertyQuery)){
                      echo " <div class='gridViewItem'> 
                              <a href='properties.php?id=" . $row['id'] . "'>
                                <img src ='displaypics/" . $row['pimage'] . "'>

                                <div class='gridViewInfo'>"
                                    . $row['title'] . 
                                "</div>
                              </a>  

                              </div>";


                    }
                 ?>

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