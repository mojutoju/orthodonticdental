<?php include('dbc/connect.php'); 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> Orthodontic Dental Care</title>
    <link rel="icon" href="../img/logo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.css" />
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->


</head>


<body>

  <header>
    <style>

body{
    font-family: 'Helvetica';
  
}

  
  .navbar-nav .nav-link {
    margin-right: 14px;
    margin-left: 14px;
}


.navbar-nav .nav-item  .nav-link :hover{
    
border-bottom:3px solid white;
}

.navbar{
    -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
-moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
}




.navbar li a:hover {

border-bottom : 2px solid dodgerblue;
}
      
      
      .masthead {
  height: 50vh;
  min-height: 500px;
  background-image: url('/img/bgblue.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

      .vertical{
	height: 100%;
	position: absolute;
	border-left: 2px solid white;
      }
      
      
      .main{
   max-width: 500px;
    border-radius: 6px;
   
    margin: 50px auto;
  
      }
      
      .main-container{
              position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
   
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    overflow: auto;
    min-height: 100vh;
    box-sizing: border-box;
      }
      
      a:hover{
          color:blue;
      }




      /*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: orange;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }


            
.items{
        display: flex;
        overflow-x: auto;
    }
    
    .items::-webkit-scrollbar{
        display: none;
    } 
    
    .items .options{
        min-width: 300px;
       
       
        margin: 10px;
        border-radius: 10px;
           
        position: relative;
    
    }
    
      
    </style>

<script src="js/sweetalert.min.js"> </script>

</header>



  
<?php

if($_SESSION["login"] != null){
    $uname = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?>
   
    

<?php include('navbar.php'); ?>

<?php

$totallist = "SELECT count(*) FROM `brands` WHERE 1   ";
$lists = mysqli_query($dbc, $totallist);
$liststotal = mysqli_fetch_array($lists);
     

     
$totalorders = "SELECT count(*) FROM `orders` WHERE  `emailid` = '".$_SESSION['login']."'    ";
$orders = mysqli_query($dbc, $totalorders);
$orderstotal = mysqli_fetch_array($orders);

     
$confirmorders = "SELECT count(*) FROM `orders` WHERE `confirmation` = 'Confirmed' AND   `emailid` = '".$_SESSION['login']."'    ";
$ordersC = mysqli_query($dbc, $confirmorders);
$ordersconfirm = mysqli_fetch_array($ordersC);

     
$pendingorders = "SELECT count(*) FROM `orders` WHERE  `confirmation` = 'Pending' AND  `emailid` = '".$_SESSION['login']."'     ";
$ordersD = mysqli_query($dbc, $pendingorders);
$orderspending = mysqli_fetch_array($ordersD);
     
          
$cancelorders = "SELECT count(*) FROM `orders` WHERE  `confirmation` = 'Cancelled' AND   `emailid` = '".$_SESSION['login']."'    ";
$ordersE = mysqli_query($dbc, $cancelorders);
$orderscancel = mysqli_fetch_array($ordersE);

$cart = "SELECT count(*) FROM `cart` WHERE  `emailid` = '".$_SESSION['login']."'    ";
$cartitem = mysqli_query($dbc, $cart);
$cartitems = mysqli_fetch_array($cartitem);

?>

<div class="main-panel">
        <div class="content-wrapper">
      
              <div class="row">
             
                  <h3 class="font-weight-bold">Welcome <?php echo $fname; ?> <?php echo $lname ?>  </h3>
           

                </div>
       

            <div class="items black">

            

            <div class="options" >
                  
           
<a href="cart.php">
                  <div class="card-counter success">
                    <i class="	fa fa-shopping-cart"></i>
                    <span class="count-numbers"> <?php echo reset ($cartitems); ?> </span>
                    <span class="count-name">View Cart Items </span>
                 </div>

</a>

                </div>




   <div class="options" >
                  
           

                  <div class="card-counter warning">
                    <i class="	fa fa-industry"></i>
                    <span class="count-numbers"> <?php echo reset ($liststotal); ?> </span>
                    <span class="count-name">Brands</span>
                 </div>
                </div>


                <div class="options" >
                  
           

                  <div class="card-counter success">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers"> <?php echo reset($orderstotal); ?> </span>
                    <span class="count-name">Orders</span>
                  </div>
               </div>
            
   
               
               

    <div class="options" >
                  
           

                  <div class="card-counter primary">
                  <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers"><?php echo reset($orderspending); ?> </span>
                    <span class="count-name">Pending Orders</span>
                 </div>
                </div>





                
    <div class="options" >
                  
           

                  <div class="card-counter success">
                  <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers"><?php echo reset($ordersconfirm); ?> </span>
                    <span class="count-name">Confirmed Orders</span>
                 </div>
                </div>


                         
    <div class="options" >
                  
           

                  <div class="card-counter danger">
                  <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers"><?php echo reset($orderscancel); ?> </span>
                    <span class="count-name">Cancelled Orders</span>
                 </div>
                </div>



</div>


<hr>



<h2 style="font-weight:800; font-size: 30px; color:black; "> Latest Products </h2>
<hr>
<br>




  <div class="row">


     
  <?php

$limit = 8;
$productselect =  "SELECT * FROM products  WHERE 1 ORDER BY productname DESC LIMIT 0, $limit ";   
      $rs_result = mysqli_query($dbc, $productselect); 
      if(mysqli_num_rows($rs_result) > 0){
  $l = 1;
      
 while($rows = mysqli_fetch_assoc($rs_result)){
 $file = $rows['file'];
    $productname = $rows['productname'];
    $category = $rows['category'];
    $subcategory = $rows['subcategory'];
$status = $rows['status'];
$amount = $rows['amount'];
$producttype = $rows['producttype'];
$quantity = $rows['quantity'];
$description = $rows['description'];
     $productid = $rows['productid'];
$emailid = $rows['emailid'];
  $phoneno = $rows['phoneno'];   
  
     

  
     ?>

    <div class="col-md-3 mb-3">
      <div class="card">
        <img class="card-img" src="../odadmin/productimages/<?php echo $file; ?>" alt="Vans"   style="  flex-shrink:0;
    -webkit-flex-shrink: 0;
    max-width:100%; height: 30vh;
               max-height:100%; object-fit:contain;">
     
        <div class="card-body">
        <h5 class="card-title"> <?php echo $productname; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted"> &#x20A6;<?php echo number_format($amount); ?> </h6>
         
        
 
          <?php
   
   $email = $_SESSION['login'];
               
$pic = mysqli_query($dbc, "SELECT * FROM cart WHERE productid = '$productid' AND emailid = '$email'  ");
$row = mysqli_fetch_assoc($pic);
           $countrows = mysqli_num_rows($pic);
             if($countrows == 0){
                    if($quantity<=0){
            ?>
            <a class="btn btn-warning btn-sm" onclick="alert('Sorry! This product is no longer in stock');">Sold Out </a>
            <?php
                    }
                    else{
            ?>
           <a class="btn btn btn-sm" style=" background-color: #FF0068; color:white;" href="addtocart.php?productid=<?php echo $productid; ?>&emailid=<?php echo $email; ?>"><span class="fa fa-cart-arrow-down"></span> Add to Cart </a>
            <?php
                    }
                }
                else{
            ?>
            <a class="btn btn-danger btn-sm" href="removecart.php?productid=<?php echo $productid; ?>"><span class="fa fa-remove"></span> Remove Item </a>
            <?php
                }
            ?>
               

             <a href="viewproducts.php?productid=<?php echo $productid; ?>" class="btn btn-success btn-sm "><i class="fa fa-search"></i> Quick View</a>
       
        </div>
      </div>
    </div>
    
                
    <?php 
$l++; }}else{
    ?>


<center>

<img src="https://dlinkmea.com/images/no-product.png" class="img-fluid">
</center>

    
<?php } ?>

    
  </div>










                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->





<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
<script>
    
    
         
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>



  </body>
  </html>








