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
   

/*********************** Demo - 1 *******************/
.box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}

.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}
.box1 .icon,.box1 .title{margin:0;position:absolute}
.box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
.box1:after{top:auto;bottom:0;transform-origin:0 100%}
.box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
.box1 img{height:auto;transform:scale(1) rotate(0)}
.box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
.box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
.box1:hover .title{opacity:1;transform:scale(1)}
.box1 .icon{padding:7px 5px;list-style:none;background:#3FB7A4;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
.box1:hover .icon{top:0}
.box1 .icon li{display:block;margin:10px 0}
.box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
.box2 .icon li a,.box3 .icon a:hover,.box4 .icon li a:hover,.box5 .icon li a,.box6 .icon li a{border-radius:50%}
.box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
@media only screen and (max-width:990px){.box1{margin-bottom:30px}
}


      
    </style>

<?php include('navbar.php'); ?>
      

<br><br><br><br>
<br>
<br>
<br><br>
<br>

<div class="container">



<a href="5kstore.php">
<img src="img/banner2.svg" class="img-fluid">
</a>


<br>


   
<h4 style="font-weight:bold;"> All 5K Store Products </h4>
<hr>

<div class="row">

       
    <?php
       $limit = 20;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
      
$productselect =  "SELECT * FROM products WHERE `status` = 'approve' AND `amount` = 5000 ORDER BY productname DESC LIMIT $start_from , $limit  ";  
      
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
  
     $file = $rows['file'];
     

  
     ?>




           
<div class="col-xl-4 mb-3">
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



<br>



    
    
</div> <!-- End of Mini Column -->






<?php $l++; }}else{ ?>

<br>

    
<center>

<img src="https://dlinkmea.com/images/no-product.png" class="img-fluid">
</center>

    

<?php  } ?>

</div>



<?php  
$sql = "SELECT COUNT(productid) FROM products";  
$rs_result = mysqli_query($dbc, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "   
<nav aria-label='Page navigation example'>
<ul class='pagination justify-content-center'>  <li class='page-item disabled'>
      <a class='page-link' href='#' tabindex='-1'>Previous</a>
    </li>"; 
      
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "
            
             <li class='page-item active '>
             <a class='page-link ' href='5kstore.php?page=".$i."'>".$i."</a> </li> &nbsp;&nbsp;&nbsp; ";  
};  
echo $pagLink . "  <li class='page-item disabled'>
      <a class='page-link' href='#'>Next</a>
    </li></ul> </nav>";  
?>

        
        
    
        

       


</div>

</div> </div>
<br>
<br><br><br>


<?php include('footer.php'); ?>
    </body>
    </html>
