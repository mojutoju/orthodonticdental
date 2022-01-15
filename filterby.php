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
<body style="background: #E2E8F0;">
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
        if(isset($_POST['amountmin']) && isset($_POST['amountmax']) && isset($_POST['brandname']) && isset($_POST['categoryname']) && isset($_POST['producttype']) ){
           
 
            $amountmin = $_POST['amountmin'];
            $amountmax = $_POST['amountmax'];
            $brandname = $_POST['brandname'];
            $categoryname = $_POST['categoryname'];
            $producttype = $_POST['producttype'];
         
         
         
                //Import data from the products table in the database where the seacrh query match
                $query = mysqli_query($dbc, "SELECT * FROM `products` WHERE   `brandname`  LIKE '%$brandname%' AND category LIKE '%$categoryname%' AND producttype LIKE '%$producttype%' AND amount >= $amountmin AND amount <= $amountmax ");
                if (mysqli_num_rows($query)==0) {
            
                   ?>



<center>

<img src="https://dlinkmea.com/images/no-product.png" class="img-fluid">
</center>

    

<?php
                }else{
                        $result = mysqli_num_rows($query);
                    echo "<div class='ibox-content' id='result'> <h2><b> $result Result(s) Found </b></h2>  </div> <hr>";
                }
      ?>
    <div id="products" class="row ">
        
        
           <?php
        
      
                
                //fetching of results begins here
                while($rows = mysqli_fetch_array($query)){
                    
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
  $brandname = $rows['brandname'];
 $file = $rows['file'];
                    
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
                          
             <?php }}  ?>  
              
                     
  
            </div>
     
         
             
             
             </div>






<br>

<?php include('footer.php'); ?>
    </body>
    </html>