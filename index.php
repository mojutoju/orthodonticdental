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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


            
      .items{
        display: flex;
        overflow-x: auto;
    }
    
    .items::-webkit-scrollbar{
        display: none;
    } 
    
    .items .options{
        min-width: 200px;
       
       
        margin: 10px;
        border-radius: 10px;
           
        position: relative;
    
    }
    

    h2 {
  overflow: hidden;
  text-align: center;
  font-size: 30px;
}

h2:before,
h2:after {
  background-color: #000;
  content: "";
  display: inline-block;
  height: 1px;
  position: relative;
  vertical-align: middle;
  width: 50%;
}

h2:before {
  right: 0.5em;
  margin-left: -50%;
}

h2:after {
  left: 0.5em;
  margin-right: -50%;
}




.card-img-overlay {
    /* position: absolute; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    border-radius: calc(.25rem - 1px);
}
   
      
    </style>

<?php include('navbar.php'); ?>


<br><br><br><br>
<br><br><br><br>
<br>

<div class="hero-bg" style="background: url('img/banners.jpg');   background-position: center; min-height: 500px; height: 680px; background-repeat: no-repeat; background-size: cover;">

<br><br>
<br>
<div class="container-sm">

<div class="row">


<div class="col-md-6 mb-3">

<h1 class="textwithout" style="font-weight:800; font-size:74px; color:white;"> 

DENTAL CARE

    </h1>

    <h4 style="line-height:33px; color:white;"> 
    Keep your teeth healthy and white with quality dental 
care products at an affordable price.
    </h4>

    <a href="shopping.php" class="btn btn-lg" style="background-color: #E50460; color:white; font-size: 18px; border-radius: 20px;"> Shop With Us <i class="fa fa-chevron-right"> </i>
    </a>
    </div>


<div class="col"> </div>


    </div>

    </div>

    </div>

    <br><br>


    <div class="container">
<center>









    <form name="subscribe" method="POST" action="subscribemessage.php">

    <div class="form-group" >
    <label style="text-align:center;"> Stay up to date with latest news and offers </label>
    <input type="email" name="email" style=" padding: 13px; border-radius: 28px; border: 1px solid grey; width:340px;" placeholder="E-mail Address" required>
    <input type="submit" style="padding: 13px; border-radius: 28px; background-color: #E50460; color:white; font-weight:800; border: 1px solid white; width: 200px;  " name="subscribe" value="Subscribe">
    </div>
    </form>

    </center>
    </div>




<br>

<div class="main" style="background: #3FB7A4;">

<br>

<div class="container">



<div class="items">
           
                   
     
    
           <div class="options">

<img src="img/partner1.png" class="img-fluid" width="400px">

</div>









           
                   
     
    
           <div class="options">

<img src="img/partner2.png" class="img-fluid"  width="400px">

</div>





           
                   
     
    
           <div class="options">

<img src="img/partner3.png" class="img-fluid"  width="400px">

</div>

 



           
                   
     
    
           <div class="options">

<img src="img/partner4.png" class="img-fluid"  width="400px">

</div>


  </div>

  </div>

<br>

    </div>



<div class="main" style="background: #E2E8F0;">

<div class="container">

<br><br>

<h2 style="font-weight:800; font-size: 30px; color:black; text-align:center;"> Latest Products </h2>

<br>


  <div class="row">


     
  <?php

$limit = 4;
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
        <img class="card-img" src="odadmin/productimages/<?php echo $file; ?>" alt="Vans"   style="  flex-shrink:0;
    -webkit-flex-shrink: 0;
    max-width:100%; height: 30vh;
               max-height:100%; object-fit:contain;">
        <div class="card-img-overlay d-flex justify-content-end">
          <a href="#" class="card-link text-danger like">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="card-body">
        <h5 class="card-title"> <?php echo $productname; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted"> &#x20A6;<?php echo number_format($amount); ?> </h6>
         
        
 
          <?php
   
               
   $pic = mysqli_query($dbc, "SELECT * FROM cart WHERE productid = '$productid'  ");
   $row = mysqli_fetch_assoc($pic);
              $countrows = mysqli_num_rows($pic);
                if($countrows == 0){
                       if($quantity<=0){
               ?>
               <a class="btn btn-danger btn-sm" onclick="alert('Sorry! This product is no longer in stock');">Sold Out </a>
               <?php
                       }
                       else{
               ?>
               <button onclick=" alert('Login to perform cart action.');" class="btn btn btn-sm" style="background: #E50460; color:white;"> <i class="fas fa-shopping-cart"></i> Add to Cart </button>
               <?php
                       }
                   }
                   else{
               ?>
       
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


<br>

<center>

<a href="shopping.php" class="btn btn-lg" style="border-radius: 30px; color: white; background-color: #FF0068; font-weight: 800; "> V I E W  M O R E </a>

</center>

<br>
  </div>


</div>



<section class="main" style="background: #FAFAFA;">
<div class="container">


<br> <br>

<h3 style="font-weight:800; color:black; "> 
All Products
</h3>

<hr>

<div class="row">

<div class="col-md-3 mb-3">

<div class="card" style="  box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26); padding:20px;" >

<form name="filter" method="POST" action="filterby.php">

<h4> <i class="fa fa-filter"> </i> Filter By </h4>
<hr>

<p><i class="fa fa-money"></i> Price </p>

<hr>

<input type="number" class="form-control" name="amountmin" placeholder="Min (0)" required>
<br>

<input type="number" class="form-control" name="amountmax" placeholder="Max (1,000,000)" required>
<hr>

<p><i class="fa fa-industry"></i> Brands </p>

<hr>



<?php

$select = mysqli_query($dbc,"SELECT * FROM `brands` WHERE 1 ORDER BY date DESC ");
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

<input type="checkbox" name="brandname" value="<?php echo $brandname; ?>">
<label> <?php echo $brandname; ?> </label>

<br>


<?php 
$l++; }}
?>


<hr>

<p><i class="fa fa-list"></i> Categories </p>

<hr>


<?php

  $or = mysqli_query($dbc,"SELECT * FROM `categorymaster` WHERE 1 ORDER BY categoryname DESC ");
if(mysqli_num_rows($or) > 0){
    $ord = 1;
 while($rows = mysqli_fetch_assoc($or)){
$categoryname = $rows['categoryname'];
$categorypercent = $rows['categorypercent'];


$date = $rows['date'];
$catid = $rows['catid'];
?>


<input type="checkbox" name="categoryname" value="<?php echo $categoryname; ?>">
<label> <?php echo $categoryname; ?> </label>

<br>

<?php $ord++; }} ?>



<hr>


<p><i class="fa fa-shopping-bag"></i> Product Type </p>

<hr>



<input type="checkbox" name="producttype" value="Brand New">
<label> Brand New </label>


<br>

<input type="checkbox" name="producttype" value="Used" >
<label> Used </label>

<hr>

<input type="submit" class="btn btn" style="border-radius: 28px; color:white; background-color: #FF0068; width:100%; font-weight:800;" name="filter" value="Filter">

</form>

</div>



</div>


<div class="col-md-9 mb-3">


<div class="row">




 
<?php

$limit = 6;
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


    <div class="col-md-4 mb-3">
      <div class="card">
        <img class="card-img" src="odadmin/productimages/<?php echo $file; ?>" alt="Vans"   style="  flex-shrink:0;
    -webkit-flex-shrink: 0;
    max-width:100%; height: 30vh;
               max-height:100%; object-fit:contain;">
        <div class="card-img-overlay d-flex justify-content-end">
          <a href="#" class="card-link text-danger like">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="card-body">
        <h5 class="card-title"> <?php echo $productname; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted"> &#x20A6;<?php echo number_format($amount); ?> </h6>
         
        
 
          <?php
   
               
   $pic = mysqli_query($dbc, "SELECT * FROM cart WHERE productid = '$productid'  ");
   $row = mysqli_fetch_assoc($pic);
              $countrows = mysqli_num_rows($pic);
                if($countrows == 0){
                       if($quantity<=0){
               ?>
               <a class="btn btn-danger btn-sm" onclick="alert('Sorry! This product is no longer in stock');">Sold Out </a>
               <?php
                       }
                       else{
               ?>
               <button onclick=" alert('Login to perform cart action.');" class="btn btn btn-sm" style="background: #E50460; color:white;"> <i class="fas fa-shopping-cart"></i> Add to Cart </button>
               <?php
                       }
                   }
                   else{
               ?>
       
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

<br><br>


</div>





</div>



</div>




</div>

</section>






<div class="container-fluid">

<a href="5kstore.php">
<img src="img/banner2.svg" class="img-fluid">
</a>
</div>







<div class="main" style="background: #E2E8F0;">

<div class="container">

<br><br><br>

<h2 style="font-weight:800;"> Blog Posts </h2>
<br>

<div class="row">





        <?php
        $limit = 3;
$select = mysqli_query($dbc,"SELECT * FROM `blogs` WHERE 1 ORDER BY date ASC LIMIT 0, $limit ");
if(mysqli_num_rows($select) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($select)){
$title = $rows['title'];
$authorname = $rows['authorname'];
$id = $rows['blog_id'];
$file = $rows['file'];
$editor1 = $rows['editor1'];
$date = $rows['date'];
$description = $rows['description'];



?>
  
    
    


<div class="col-md-4 mb-3">

<div class="card">
        <img class="card-img" src="odadmin/blogs/<?php echo $file; ?>" alt="Vans"   style="  flex-shrink:0;
    -webkit-flex-shrink: 0;
    max-width:100%; height: 30vh;
               max-height:100%; object-fit:cover;">
     
 </div>


<div class="card" style="padding:20px;">
<h5 style="font-weight:800;"> <?php echo $title; ?> </h5>

<p style="font-style: italic; color:grey; font-size: 12px;"> Posted on <?php echo $date; ?> | <strong> Author : <?php echo $authorname; ?> </strong> </p>


 
<p>
 <?php
if (strlen($description) > 25) {
  $trimstring = substr($description, 0, 205). ' <a href="#" style="color:black;"> ...</a>';
  } else {
  $trimstring = $description;
  }
  echo $trimstring;
 ?>
</p>


<a href="viewblog.php?blog_id=<?php echo $id; ?>" class="btn btn-sm btn" style="background-color: #FF0068; color:white;"> Read More </a>

</div>
</div>


<?php $u++; }} ?>




</div>
</div>


<br>

<?php include('footer.php'); ?>
    </body>
    </html>