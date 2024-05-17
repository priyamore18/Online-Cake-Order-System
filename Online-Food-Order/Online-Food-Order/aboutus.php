<?php
session_start();
?>

<html>

  <head>
    <title> Home | PS CAKE SHOP </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PS CAKE SHOP</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome to our shop <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
</div>
</nav>
<body>
<p class="tagline">
<div>
<div id="about">
<h2 class="featured text-center font-weight-bold bg-light ">About Us</h2>
<div class="container-fluid bg-light text-center">
<div class ="row ml-0 mr-0 ">
<div class="col-6 "><p>For the most discerning sweet tooth, we offer Custom Cakes, Specialty 
Cakes, Cupcakes, Cake Pops, French Macarons, Decorated Cookies, Chocolate Dipped Pretzels 
and Decorated Rice Krispies Treats! All of our cakes and treats are made fresh from scratch with
every order. Nothing is ever frozen and we use all natural ingredients. Great care is taken with 
each and every order, and decorated to impress.
We strive to set new trends and are constantly inspired by our customer's creativity! Combining 
our good ol' fashioned scratch baking with fresh ideas push us into creative unchartered cake 
decorating territory.
We promise to leave you satisfied and full of happiness with every bite!These are sure to satisfy 
your sweet tooth minus the guilt! Order keto friendly, sugar free, gluten free and vegan desserts 
at orders.delcakes.in. Ordering cakes online has never been simpler and healthier.Whether it is 
the birthday of a child, a teenager or an adult, one of the most awaited parts of a birthday 
celebration is the cutting of the cake.
</div>
</div></p>
 
 <h3 style="color: black">About the food culture in PS Cake Shop</h3></div>
</div></div></div>
<div class="col-lg-3 col-md-6 col-sm-15 text-center  ">
 <p><h3 style="color: black">Address:- 07, 1'st Floor, pali, raigad,
Mumbai, 410205 , Maharashtra ,India</h3></p>
 
 </div>
 <div class=" symbol col-lg-3 col-md-6 col-sm-12 text-center ">
<p>Connect with us</p>
 <img src="images/facebook.jpg" width="30" height="30" alt="">
<img src="images/twitter.jpg" width="30" height="30" alt="">
 <img src="images/insta.jpg" width="30" height="30" alt="">
 </div>
 
 <footer class="container-fluid  text-center text-light navbar-dark bg-dark">
  <br>