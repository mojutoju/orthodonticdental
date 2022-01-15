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
<body  style="background: #E2E8F0;">
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
<br><br>




<div class="container">



    
<?php

if(isset($_GET['subid'])){
    $cid = $_GET['subid'];
  $or = mysqli_query($dbc,"SELECT * FROM `subcategory` WHERE `subid` = '$cid' ");
if(mysqli_num_rows($or) > 0){
    $ord = 1;
 while($rows = mysqli_fetch_assoc($or)){
$categoryname = $rows['categoryname'];
$subcategoryname = $rows['subcategoryname'];


$date = $rows['date'];
$cid = $rows['subid'];
?>

<div class="card" style="padding:25px;">

<p> Home /  <a href="subcategory.php?subid=<?php echo $cid; ?>" style="color:black;">  Subcategory </a> / <a href="subcategory.php?subid=<?php echo $cid; ?>" style="color:black;">  <?php echo $subcategoryname; ?> </a> </p>
 </div>

 <br>

<div class="row">

  <?php
$productselect =  "SELECT * FROM products  WHERE `subcategory` = '$subcategoryname' ";   
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

<?php $l++; } }else{ 

?>


<div class="jumbotron" style="padding:20px;">

<center>

<img src="https://dlinkmea.com/images/no-product.png" class="img-fluid">
</center>

</div>





<?php

}
?>







<?php 

$ord++; }}}

?>

</div>


 </div>
<br>

<?php include('footer.php'); ?>
    </body>
    </html>