<?php include('dbc/connect.php'); ?>
<?php session_start(); ?>

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

<script src="../js/sweetalert.min.js"> </script>

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



<div class="main-panel">
        <div class="content-wrapper">
      
              <div class="row">
             
                  <h3 class="font-weight-bold">Welcome Admin </h3>
           

                </div>
       





                <?php


$totalcategory = "SELECT count(*) FROM `categorymaster` WHERE 1  ";
$categories = mysqli_query($dbc, $totalcategory);
$categorytotal = mysqli_fetch_array($categories);
     
$totalsubcategory = "SELECT count(*) FROM `subcategory` WHERE 1  ";
$subcategories = mysqli_query($dbc, $totalsubcategory);
$subcategorytotal = mysqli_fetch_array($subcategories);
     


$productapprove= "SELECT count(*) FROM `products` WHERE `status` = 'approve'   ";
$productsA = mysqli_query($dbc, $productapprove);
$approveproducts = mysqli_fetch_array($productsA);


     $totalproducts = "SELECT count(*) FROM `products` WHERE 1  ";
$products = mysqli_query($dbc, $totalproducts);
$productstotal = mysqli_fetch_array($products);
     
     
     
$productunapprove= "SELECT count(*) FROM `products` WHERE `status` = 'unapprove'     ";
$productsB = mysqli_query($dbc, $productunapprove);
$unapproveproducts = mysqli_fetch_array($productsB);

   
     $productpending= "SELECT count(*) FROM `products` WHERE `status` = 'pending'    ";
$productsC = mysqli_query($dbc, $productpending);
$pendingproducts = mysqli_fetch_array($productsC);

     
     
     
$totallist = "SELECT count(*) FROM `brands` WHERE 1   ";
$lists = mysqli_query($dbc, $totallist);
$liststotal = mysqli_fetch_array($lists);
     


$listapprove= "SELECT count(*) FROM `brands` WHERE  `status` = 'approve'   ";
$listA = mysqli_query($dbc, $listapprove);
$approvelists = mysqli_fetch_array($listA);
     
     
     
$tracking = "SELECT count(*) FROM `tracking` WHERE  1    ";
$trackA = mysqli_query($dbc, $tracking);
$trackings = mysqli_fetch_array($trackA);
  

$listunapprove= "SELECT count(*) FROM `brands` WHERE  `status` = 'unapprove'  ";
$listB = mysqli_query($dbc, $listunapprove);
$unapprovelists = mysqli_fetch_array($listB);
        
   
     
$listpending = "SELECT count(*) FROM `brands` WHERE  status = 'pending'  ";
$listC = mysqli_query($dbc, $listpending);
$pendinglists = mysqli_fetch_array($listC);

     
     
$totalorders = "SELECT count(*) FROM `orders` WHERE 1   ";
$orders = mysqli_query($dbc, $totalorders);
$orderstotal = mysqli_fetch_array($orders);

     
$confirmorders = "SELECT count(*) FROM `orders` WHERE `confirmation` = 'Confirmed'    ";
$ordersC = mysqli_query($dbc, $confirmorders);
$ordersconfirm = mysqli_fetch_array($ordersC);

     
$pendingorders = "SELECT count(*) FROM `orders` WHERE  `confirmation` = 'Pending'    ";
$ordersD = mysqli_query($dbc, $pendingorders);
$orderspending = mysqli_fetch_array($ordersD);
     
          
$cancelorders = "SELECT count(*) FROM `orders` WHERE  `confirmation` = 'Cancelled'    ";
$ordersE = mysqli_query($dbc, $cancelorders);
$orderscancel = mysqli_fetch_array($ordersE);

          
$customersenable = "SELECT count(*) FROM `customers` WHERE  `status` = 'enable'    ";
$customerenable = mysqli_query($dbc, $customersenable);
$enablecustomers = mysqli_fetch_array($customerenable);

$customerstotal = "SELECT count(*) FROM `customers` WHERE  1  ";
$customers = mysqli_query($dbc, $customerstotal);
$totalcustomers = mysqli_fetch_array($customers);

          
$customersdisable = "SELECT count(*) FROM `customers` WHERE  `status` = 'disable'    ";
$customerdisable = mysqli_query($dbc, $customersdisable);
$disablecustomers = mysqli_fetch_array($customerdisable);

          
$customerpending = "SELECT count(*) FROM `customers` WHERE  `status` = 'pending'    ";
$customerspending = mysqli_query($dbc, $customerpending);
$pendingcustomers = mysqli_fetch_array($customerspending);




$announce = "SELECT count(*) FROM `announcements` WHERE  1    ";
$announceit = mysqli_query($dbc, $announce);
$announcement = mysqli_fetch_array($announceit);



$promo = "SELECT count(*) FROM `promotion` WHERE  1    ";
$promoit = mysqli_query($dbc, $promo);
$promotion = mysqli_fetch_array($promoit);



$blogs = "SELECT count(*) FROM `blogs` WHERE 1 ";
$allblogs = mysqli_query($dbc, $blogs);
$totalblogs = mysqli_fetch_array($allblogs);


$review = "SELECT count(*) FROM `reviews` WHERE  1    ";
$reviewit = mysqli_query($dbc, $review);
$reviews = mysqli_fetch_array($reviewit);



$tracking = "SELECT count(*) FROM `tracking` WHERE  1    ";
$trackit = mysqli_query($dbc, $tracking);
$totaltracking = mysqli_fetch_array($trackit);



$subscribetotal = "SELECT count(*) FROM `subscribe` WHERE  1    ";
$subscribers = mysqli_query($dbc, $subscribetotal);
$totalsubscribe = mysqli_fetch_array($subscribers);


?>



     
        <div class="items text-black">
           
                   
     
    
           <div class="options">
                  
           

           
    
      <div class="card-counter primary">
        <i class="fa fa-shopping-bag"></i>
        <span class="count-numbers"> <?php echo reset ($productstotal ); ?> </span>
        <span class="count-name">Products</span>
      </div>
   

   </div>

   

   

   <div class="options" >
                  
           

                  <div class="card-counter warning">
                    <i class="	fa fa-industry"></i>
                    <span class="count-numbers"> <?php echo reset ($liststotal); ?> </span>
                    <span class="count-name">Brands</span>
                 </div>
                </div>
   
   <div class="options" >
                  
           

      <div class="card-counter danger">
        <i class="fa fa-list"></i>
        <span class="count-numbers"> <?php echo reset($categorytotal); ?> </span>
        <span class="count-name">Categories</span>
      </div>
      </div>
    

      <div class="options" >
                  
           

                  <div class="card-counter warning">
                    <i class="fa fa-list"></i>
                    <span class="count-numbers"> <?php echo reset($subcategorytotal); ?> </span>
                    <span class="count-name">Subcategories</span>
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
                  
           

      <div class="card-counter info">
        <i class="fa fa-user"></i>
        <span class="count-numbers"> <?php echo reset($totalcustomers); ?> </span>
        <span class="count-name">Users</span>
     </div>
    </div>





    <div class="options" >
                  
           

                  <div class="card-counter primary">
                    <i class="fa fa-cab"></i>
                    <span class="count-numbers"><?php echo reset($totaltracking); ?> </span>
                    <span class="count-name">Tracking</span>
                 </div>
                </div>





                <div class="options" >
                  
           

                  <div class="card-counter warning">
                    <i class="	fa fa-id-badge"></i>
                    <span class="count-numbers"><?php echo reset($totalblogs); ?></span>
                    <span class="count-name">Blog Posts</span>
                 </div>
                </div>



                <div class="options" >
                  
           

                  <div class="card-counter primary">
                    <i class="	fa fa-envelope"></i>
                    <span class="count-numbers"><?php echo reset($totalsubscribe); ?> </span>
                    <span class="count-name">Subscribers</span>
                 </div>
                </div>





  </div>

<br>

<br>
  <div class="row">

 
                <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px; box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;   ">

<br>

<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-list"> </i> Categories </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="managecategory.php">Show All</a>
    </div>
    </div>

</div>

</div>
                 

<div class="table-responsive  table-hover">
  <table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Category</th>
   
   
      <th scope="col"> C.Percent (%)</th>

      
        <th scope="col">Edit</th>
        <th scope="col"> View </th>
        <th scope="col"> Delete</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php

$limit = 4;
  $or = mysqli_query($dbc,"SELECT * FROM `categorymaster` WHERE 1 ORDER BY categoryname DESC LIMIT 0, $limit  ");
if(mysqli_num_rows($or) > 0){
    $ord = 1;
 while($rows = mysqli_fetch_assoc($or)){
$categoryname = $rows['categoryname'];
$categorypercent = $rows['categorypercent'];


$date = $rows['date'];
$catid = $rows['catid'];
?>

    
    
    
    
    
    
    
    
 
   <tbody  id="myTable">
     
      <tr>
    
        <td> <?php echo $categoryname; ?>  </td>
       
        <td> <?php echo $categorypercent; ?> </td>
    
        
        <td>
   <a href="editcategory.php?catid=<?php echo $catid; ?>" class="btn btn-success btn-sm"> Edit </a>
        </td>
        <td>
            <a class="btn btn-primary btn-sm"  href="viewcategory.php?catid=<?php echo $catid; ?>"> View </a>
        </td>
             <td>
            <a onclick="return confirm('Are you sure you want to delete this category ?\n. Click \'OK\' to continue or \'Cancel\' to go back.');"  class="btn btn-danger btn-sm"  href="managecategory.php?catid=<?php echo $catid; ?>"> <i class="fa fa-trash"></i> </a>
        </td>
   
     <?php $ord++; }}else{ ?>
     <td> No</td>
     <td> Category </td>
     <td> Found </td>
     <td> Yet</td>
     <td> Kindly </td>
     <td> Upload </td>
     <td> Info</td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>

                  </div>
           

           

                </div>






                <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
               
               
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-list"> </i> Subcategories </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="managecategory.php">Show All</a>
    </div>
    </div>

</div>

</div>


   
<div class="table-responsive  table-hover">
  <table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Category</th>
   
   
      <th scope="col"> Subcategory</th>

      
        <th scope="col">Edit</th>
        <th scope="col"> View </th>
        <th scope="col"> Delete</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php

$limit = 4;
  $or = mysqli_query($dbc,"SELECT * FROM `subcategory` WHERE 1 ORDER BY subcategoryname DESC LIMIT 0, $limit  ");
if(mysqli_num_rows($or) > 0){
    $ord = 1;
 while($rows = mysqli_fetch_assoc($or)){
$categoryname = $rows['categoryname'];
$subcategoryname = $rows['subcategoryname'];


$date = $rows['date'];
$cid = $rows['subid'];
?>

    
    
    
    
    
    
    
    
 
   <tbody  id="myTable">
     
      <tr>
    
        <td> <?php echo $categoryname; ?>  </td>
       
        <td> <?php echo $subcategoryname; ?> </td>
    
        
        <td>
   <a href="editsubcategory.php?subid=<?php echo $cid; ?>" class="btn btn-success btn-sm"> Edit </a>
        </td>
        <td>
            <a class="btn btn-primary btn-sm"  href="viewsubcategory.php?subid=<?php echo $cid; ?>"> View </a>
        </td>
             <td>
            <a onclick="return confirm('Are you sure you want to delete this subcategory ?\n. Click \'OK\' to continue or \'Cancel\' to go back.');" class="btn btn-danger btn-sm"  href="managecategory.php?subid=<?php echo $cid; ?>"> <i class="fa fa-trash"></i> </a>
        </td>
   
     <?php $ord++; }}else{ ?>
     <td> No</td>
     <td> Subcategory </td>
     <td> Found </td>
     <td> Yet</td>
     <td> Kindly </td>
     <td> Upload </td>
     <td> Info</td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>



     </div>

     </div>
    







                <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
               
               
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-shopping-bag"> </i> Products </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="manageproducts.php">Show All</a>
    </div>
    </div>

</div>

</div>
                 

<div class="table-responsive  table-hover ">
  <table class="table">
    <thead>
      <tr>
     
        <th scope="col">Product Name </th>
        <th scope="col">Category </th>
        <th scope="col">Subcategory</th>
        <th scope="col">Amount (&#x20A6;) </th>
        <th scope="col">Status</th>
      
        <th scope="col">View</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    
    
   
    
    
    
    
    
      
    <tbody  id="myTable">
        
         
    <?php

$limit = 4;
$productselect =  "SELECT * FROM products  WHERE `emailid` = '".$_SESSION['login']."' ORDER BY productname DESC LIMIT 0, $limit ";   
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
    
      <tr>
          
        <td> <?php echo $productname; ?> </td>
        <td> <?php echo $category; ?> </td>
        <td> <?php echo $subcategory; ?> </td>
        <td> &#x20A6;<?php  echo  number_format($amount); ?>  </td>
        <td> <?php if ($status == "approve"){ ?>
        
        <a href="#" class="btn btn-success btn-sm"> Approved </a>
        
        <?php } else if ($status == "unapprove") { ?>
        
           <a href="#" class="btn btn-danger btn-sm"> Unapproved </a>
        
        
        <?php } else if ($status == "pending" ) { ?>
        
           <a href="#" class="btn btn-warning btn-sm"> Pending </a>
        
        <?php } else { } ?>
        
        </td>
       
        <td> <a href="viewproducts.php?productid=<?php echo $productid; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></a></td>
        <td> <a href="editproducts.php?productid=<?php echo $productid; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>          </td>
        <td> <a onclick="return confirm('Are you sure you want to delete this product ?\n. Click \'OK\' to continue or \'Cancel\' to go back.');"  href="manageproducts.php?productid=<?php echo $productid; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a></td>
      </tr>
      
      
   <?php $l++; }} ?>
   
    </tbody>
  </table>
</div>



                  </div>




                  
           

                </div>




                
                <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
                 
                 
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-gift"> </i> Orders </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="manageorders.php">Show All</a>
    </div>
    </div>

</div>

</div>
                 


<div class="table-responsive  table-hover">
<table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Product(s)</th>
        <th scope="col">Customer(s) </th>
         <th scope="col">Brand(s) </th>
      <th scope="col">Order Confirmation</th>
        <th scope="col">Status</th>
        <th scope="col"> View </th>
        <th scope="col"> Delete</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php
$limit = 4;

  $orders = mysqli_query($dbc,"SELECT * FROM `orders` WHERE 1 ORDER BY orderid ASC LIMIT 0, $limit ");
if(mysqli_num_rows($orders) > 0){
    $o = 1;
 while($rows = mysqli_fetch_assoc($orders)){
$fname = $rows['fname'];
$lname = $rows['lname'];
$email = $rows['emailid'];
$state = $rows['state'];
$phoneno = $rows['phoneno'];
$invoiceno = $rows['invoiceno'];
$trackingid = $rows['trackingno'];
$productname = $rows['productname'];
$amount = $rows['amount'];
$quantity = $rows['quantity'];
$delivery = $rows['delivery'];
$confirmation = $rows['confirmation'];
$status = $rows['status'];
$brandname = $rows['brandname'];
$subtotal = $quantity * $amount;
$device = $rows['device'];
$orderid = $rows['orderid'];
$productid = $rows['productid'];

  
?>

    
    
    
    
    
    
    
    
    <tbody>
     
      <tr>
    
        <td> <?php echo $productname; ?>  </td>
        <td> <?php echo $lname; ?> <?php echo $fname; ?> </td>
        <td> <?php echo $brandname; ?> </td>
        <td> <?php echo $confirmation; ?> </td>
    <td> <?php echo $status; ?> </td>
        <td>
   <a href="vieworder.php?orderid=<?php echo $orderid; ?>" class="btn btn-success btn-sm"> View </a>
        </td>
        <td>
            <a class="btn btn-danger btn-sm"  href="manageorders.php?orderid=<?php echo $orderid; ?>"> <i class="fa fa-trash"></i></a>
        </td>
   
     <?php $o++; }}else{ ?>
     <td> No</td>
     <td> Orders </td>
     <td> Found </td>
     <td> Yet</td>
     <td> N/A </td>
     <td> N/A</td>
     <td> N/A</td>
     
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>


                  </div>
      


  </div>



                
  <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
               
               
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-user"> </i> Users </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="manageusers.php">Show All</a>
    </div>
    </div>

</div>

</div>
                 

<div class="table-responsive  table-hover">
  <table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Name(s)</th>
        <th scope="col">E-mail(s) </th>
        <th scope="col">Password(s)</th>
   
        <th scope="col">Action(s)</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php
$limit = 4;
$select = mysqli_query($dbc,"SELECT * FROM `customers` WHERE 1 ORDER BY datecreated DESC LIMIT 0, $limit");
if(mysqli_num_rows($select) > 0){
    $k = 1;
 while($rows = mysqli_fetch_assoc($select)){
$fname = $rows['fname'];
$lname = $rows['lname'];
$email = $rows['email'];
$state = $rows['state'];
$phoneno = $rows['phoneno'];
$cpassword = $rows['cpassword'];
$customerid = $rows['id'];
?>

    
    
    
    
    
    
    
    
    <tbody>
     
      <tr>
    
        <td> <?php echo $lname; ?> <?php echo $fname; ?> </td>
        <td> <?php echo $email; ?> </td>
        <td> <?php echo $cpassword; ?> </td>
        <td>
            
<!-- Small button group -->
<div class="btn-group">
  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
 Action
  </button>
  <div class="dropdown-menu">
    
    <a class="dropdown-item" href="viewusers.php?id=<?php echo $customerid; ?>&email=<?php echo $email; ?>">View</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="manageusers.php?id=<?php echo $customerid; ?>">Delete</a>
  </div>
</div>
        </td>
   
     <?php $k++; }}else{ ?>
     
     
     <td>No</td>
         <td>Customer</td>
             <td>Info </td>
                 <td>Yet</td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>

                  </div>
      


  </div>








          
  <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
                 
                 
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-cab"> </i> Tracking Orders </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="managetracking.php">Show All</a>
    </div>
    </div>

</div>

</div>
                

<div class="table-responsive  table-hover">
<table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Tracking No </th>
        <th scope="col">Customer(s) </th>
        <th scope="col">Status</th>
        <th scope="col"> View </th>
        <th scope="col"> Delete </th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php
$limit = 4;
   
$track = mysqli_query($dbc,"SELECT * FROM `tracking` WHERE 1 ORDER BY trackingno ASC LIMIT 0 , $limit  ");
if(mysqli_num_rows($track) > 0){
    $st = 1;
 while($rows = mysqli_fetch_assoc($track)){
$customer = $rows['customer'];


$state = $rows['currentstate'];
$phoneno = $rows['phoneno'];
$invoiceno = $rows['invoiceno'];
$trackingid = $rows['trackingno'];
$productname = $rows['productname'];
$amount = $rows['amount'];
$status = $rows['trackstatus'];
$city = $rows['city'];
$customer = $rows['customer'];

  
?>

    
    
    
    
    
    
    
    
    <tbody>
     
      <tr>
    
        <td> <?php echo $trackingid; ?>  </td>
        <td> <?php echo $customer; ?> </td>
        <td> <?php echo $status; ?> </td>
      
  
        <td>
   <a href="viewtracking.php?trackingno=<?php echo $trackingid; ?>" class="btn btn-success btn-sm"> View </a>
        </td>
        <td>
            <a href="deletetracking.php?trackingno=<?php echo $trackingid; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
        </td>
   
     <?php $st++; }}else{ ?>
     <td> No</td>
     <td> Tracking  </td>
     <td> Found </td>
     <td> Yet</td>
     <td> <i class="fa fa-trash" style="color:grey;"></i> </td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>


                  </div>
      


  </div>



    
  <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
                 
                 
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-id-badge"> </i> Blog Posts </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="manageblog.php">Show All</a>
    </div>
    </div>

</div>

</div>
                 
     
<div class="table-responsive">
  <table class="table table-hover ">
    <thead>
      <tr>
        <th scope="col">Title(s)</th>
          <th scope="col">Author(s)</th>
          <th scope="col"> Posted </th>
          <th scope="col">Edit</th>
        
        <th scope="col">View</th>
        
     <th scope="col"> Delete</th>
     </tr>
    </thead>




    <?php
function timeAgo($time_ago){
$cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	echo "$seconds seconds ago";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "one minute ago";
	}
	else{
		echo "$minutes minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "an hour ago";
	}else{
		echo "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "yesterday";
	}else{
		echo "$days days ago";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "a week ago";
	}else{
		echo "$weeks weeks ago";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "a month ago";
	}else{
		echo "$months months ago";
	}
}
//Years
else{
	if($years==1){
		echo "one year ago";
	}else{
		echo "$years years ago";
	}
}
}

?>



        <?php
        $limit = 4;
$select = mysqli_query($dbc,"SELECT * FROM `blogs` WHERE 1 ORDER BY title ASC LIMIT 0 , $limit  ");
if(mysqli_num_rows($select) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($select)){
$title = $rows['title'];
$authorname = $rows['authorname'];
$id = $rows['blog_id'];
$file = $rows['file'];
$editor1 = $rows['editor1'];
$date = $rows['date'];

$time_ago =strtotime($date);


?>
  
    
    
    
  
    
    <tbody  id="myTable">
      <tr>
    
        <td> <?php echo $title; ?> </td>
    <td><?php echo $authorname; ?></td>
    <td> <?php echo timeAgo($time_ago); ?> </td>
     
         <td> <a href="editblogpost.php?blog_id=<?php echo $id; ?>" class="btn btn btn-sm" style="background:blue; color:white;">  Edit </a> </td>
     
        <td> <a href="viewblogpost.php?blog_id=<?php echo $id; ?>" class="btn btn-success btn-sm"> View </a></td>
        
        <td> <a href="manageblog.php?blog_id=<?php echo $id; ?>" class="btn btn-danger btn-sm"> Delete </a> </td>
      
      </tr>
      
         <?php $u++; }} ?> 
    </tbody>
    
    </table> </div>
   




                  </div>
      


  </div>





  
    
  <div class="col-md-6 mb-3">
                  
                  <div class="card" style="border-radius: 12px; padding:16px;  box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;  ">
<br>
                 
                 
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-industry"> </i> Brands </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="managebrands.php">Show All</a>
    </div>
    </div>

</div>

</div>
   
<div class="table-responsive">
  <table class="table table-hover ">
    <thead>
      <tr>
    
   
        <th scope="col">Brand(s)</th>
        <th scope="col">Edit </th>
   
        <th scope="col">Action(s)</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php
$limit = 4;
$select = mysqli_query($dbc,"SELECT * FROM `brands` WHERE 1 ORDER BY date DESC LIMIT 0, $limit");
if(mysqli_num_rows($select) > 0){
    $l = 1;
 while($rows = mysqli_fetch_assoc($select)){
 $file = $rows['file'];
  $brandname = $rows['brandname'];
  $phoneno = $rows['phoneno'];
  $instagram = $rows['instagram'];
  $whatsapp = $rows['whatsapp'];
  $facebook = $rows['facebook'];
  $others = $rows['others'];
  $state = $rows['state'];
  $city = $rows['city'];
  $address = $rows['address'];
  $description = $rows['description'];
  $status = $rows['status'];
  $sellername = $rows['sellername'];
  
     $brandid = $rows['brandid'];
?>

    
    
    
    
    
    
    
    
    <tbody>
     
      <tr>
    
        <td> <?php echo $brandname; ?>  </td>
        <td> <a href="editbrands.php?brandid=<?php echo $brandid; ?>" class="btn btn-warning btn-sm"> Edit </a> </td>
    
        <td>
            
<!-- Small button group -->

  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
 Action
  </button>
  <div class="dropdown-menu">
   
    <a class="dropdown-item" href="viewbrands.php?brandid=<?php echo $brandid; ?>">View</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="managebrands.php?brandid=<?php echo $brandid; ?>">Delete</a>
  </div>

        </td>
   
     <?php $l++; }}else{ ?>
     <td> No </td>
     <td> Brands Found</td>
     <td> Yet </td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>
              
              

                  </div>
      


  </div>







           </div>

           </div>       




        
       </div>

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








