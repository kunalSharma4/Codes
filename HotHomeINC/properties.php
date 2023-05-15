<?php

include("connection.php");
include("includes/classes/Account.php");


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


// Establish a connection to the MySQL database
$servername = "sql206.epizy.com";
$username = "epiz_33845263";
$password = "l3NcAB6WUP6";
$dbname = "epiz_33845263_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a property ID was provided in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
     
    // Retrieve the property details from the database
    $sql = "SELECT * FROM Properties WHERE id = $id";
    $result = mysqli_query($conn, $sql);

   
?>
<html>
<head>
    <title>Welcome to HotHomeINC!</title>

    <link rel="stylesheet" type="text/css" href="style/css/inde.css">
    <link rel="stylesheet" type="text/css" href="style/css/propnew.css">
   
</head>

<body>
  <style type="text/css">

   #mainContainer{
       max-width:100%;
   }

.footer{
  background: #212151;
  color: #fff;
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 50px ;
}
.footer .f-about{
   max-width: 500px;
   position: relative;
   flex: 1;
   margin: 50px;
    
}
.footer .f-about h3{
   padding: 20px;
}
.footer .f-about p{
  font-size: 14px;
  font-weight: 200;
  text-align: start;
}
.footer .f-about a{
  color: #fff;
  margin: 10px;
  font-size: 30px;
}

  </style>

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
                   
              </div>

              <div id="gridViewContainer">

               

                 <?php
                    if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
        
        // Display the property details
        echo "<h1>" . $row['title'] . "</h1>";
        echo "<p> Description: " . $row['description'] . "</p>";
        echo "<p>Address: " . $row['address'] . "</p>";
        echo "<p>Price: $" . $row['Price'] . "</p>";
        
        // Retrieve the images for the property from the database
        $address = $row['address'];
        $sql2 = "SELECT * FROM images WHERE address = '$address'";
        $result2 = mysqli_query($conn, $sql2);

        // Display the images
        while ($row2 = mysqli_fetch_assoc($result2)) {
               $images = explode(' ', $row2['images']);
    foreach($images as $image) {
      echo "<img src='upload/" . $image . "' alt='Property Image' class='gridViewItem' style='height:250px;' onclick='openFullscreen(this)'>";

      echo "<script>
        function openFullscreen(img) {
            var elem = img;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }
      </script>";
    }

        }
    } else {
        echo "No property found with ID " . $id;
    }
} else {
    echo "No property ID provided";
}

// Close the database connection
mysqli_close($conn);
                 ?>
 <br><br><a href="bookNow.php?id=<?php echo $id; ?>" class="bookNowButton">Book Now</a>
             </div>
             <br><br><br>

    
            
          
        </div>

        
        </div>

            <div class="footer">
                    <div class="f-about">
                    <h3>About us</h3>
                    <p style="color:white;">HotHomeINC. is the most popular and most trusted real estate website in Canada. 
                      HotHomeINC. provides up-to-date and reliable information that makes finding your 
                      dream property easy and enjoyable. HotHomeINC. is popular with sellers, buyers, and renters, 
                      and is accessible online. </p>
                    </div>
                    <div class="f-about">
                    <h3>Contact Information</h3>
                    <p style="color:white;">#4000 Victoria Park Ave Toronto,  Ontario, M2H 3P4</p>
                     <p style="color:white;">   +1 (416) 291-5155 </p>
                       <p style="color:white;"> 9.30am to 7.30pm EST Everyday
                        </p>
                    </div>

    </div>

    </div>

    


</body>

</html>