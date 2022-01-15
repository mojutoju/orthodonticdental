<?php include('odadmin/dbc/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Orthodontic Dental Care Store</title>
    <link rel="icon" href="img/logo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>

body{
    font-family: 'Helvetica';
}

      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #000 !important;
      }


      .navbar-nav > li{
  padding-left:10px;
  padding-right:10px;
}

.navbar-nav > li{
  margin-left:30px;
  margin-right:30px;
}


.sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 99999;
          top: 0;
          right: 0;
          background-color: white;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 18px;
          color: black;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #697f2a;
          background:white;
        }
        
        .sidenav .closebtn:hover {
          color: #fff;
          background:transparent;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        @media  screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }


        .left:hover ~ .list-categories{
  max-height: inherit;
  opacity: 1;
}

.list-categories{
  list-style-type: none;
  padding: 0px;
  margin: 0px;
  max-height: 0px;
  opacity: 0;
  overflow: hidden;
  transition: opacity 300ms ease;
}
      

.dropdown-item:focus, .dropdown-item:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1ebdc2 !important;
}
.sm-menu{
    border-radius: 0px;
    border: 0px;
    top: 97%;
    box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
}
.dropdown-item {
    color: #3c3c3c;
        font-size: 14px;
}
.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #2196F3;
}
    </style>



<div class="fixed-top">


<div class="navbar top" style="padding: 20px; background: #3FB7A4; ">

<div class="container">

<div class="left" style="color:white;">

<a href="shopping.php" style="color:white; font-size:14px;"> 

<i class="fa fa-shopping-bag"> </i> Shop </a>  | <a href="#" style="color:white; font-size:14px;"> <i class="fa fa-tasks"> </i> Wishlists
    </a>
    </div>


    <div class="right">

<a href="#" style="color:white; font-size:14px;"> 

<i class="fab fa-whatsapp"> </i> +234 810 102 9254
    </a>
    </div>

    </div>

    </div>



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  d-none d-lg-block " style="z-index: 2000; background-color:white;">
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link " style="color:black;" href="index.php">
          <img src="img/logo.png" class="img-fluid" width="80px">
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="index.php" style="color:black;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php" rel="nofollow"
                 style="color:black;">About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color:black;" href="blog.php">Blog</a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link"  style="color:black;" href="trackorder.php" >Track Order</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  style="color:black;" href="contactus.php" >Contact Us</a>
            </li>


            

          </ul>

          <ul class="navbar-nav d-flex flex-row">
          
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="customers/login.php" rel="nofollow" target="_blank">
                <i class="fa fa-user"></i> My Account
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="search.php" rel="nofollow" target="_blank">
                <i class="fa fa-search"></i> Search
              </a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->




    <div class="navbar top" style="padding: 20px; background: #E50460; box-shadow: 0 2px 4px 0 rgba(0,0,0,.4); ">

<div class="container">



<li style=" list-style:none;"  >
<a href="showcategories.php"  style="color:white; font-size:16px;"> 

<i class="fa fa-reorder"> </i> All Categories</a> 



</li>
 
   

    </div>


    

    </div>

</div>

    

    <script src="js/mdb.min.js"> </script>
    <script src="js/bootstrap.bundle.min.js"> </script>
    </body>
    </html>