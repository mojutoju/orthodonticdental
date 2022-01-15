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
    


.card-img-overlay {
    /* position: absolute; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    border-radius: calc(.25rem - 1px);
}
   



.card-white  .card-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
   border: 1px solid #dddddd;
}
.card-white  .card-footer {
  background-color: #fff;
  border-color: #ddd;
}
.card-white .h5 {
    font-size:14px;
    //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.card-white .time {
    font-size:12px;
    //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}

.checked {
  color: orange;
}
      
    </style>

<?php include('navbar.php'); ?>


<br><br><br><br>
<br><br><br><br>
<br>

<br><br>

 
<div class="container">

<div class="row">

<?php 
    if(isset($_GET['productid'])){
        
        $productid = $_GET['productid'];
       
         
$select =  "SELECT * FROM products  WHERE `productid` = '$productid' ";  
      
      $rs_result = mysqli_query($dbc, $select); 
      if(mysqli_num_rows($rs_result) > 0){
  $z = 1;
      
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
  $productsize = $rows['productsize'];
  $color = $rows['color'];
  $state = $rows['state'];
  $city = $rows['city'];
  $sellername = $rows['sellername'];
     $brandname = $rows['brandname'];
     $delivery = $rows['delivery'];

  
     ?>
    


<p>

<a style="color:black;" href="index.php"> Home </a> /  <a style="color:black;" href="allproducts.php"> Products </a>    /  <a href="viewproducts.php?productid=<?php echo $productid; ?>"> <?php echo $productname; ?> </a>

</p>

<hr>

<br>

<div class="col-md-6 mb-4">



<img src="odadmin/productimages/<?php echo $file; ?>" class="img-fluid">

 </div>



 <div class="col-md-6 mb-3">

<button class="btn btn-sm" style="border-radius: 30px; background-color: #E50460; color:white; font-weight:800;"> Brand | <?php echo $brandname; ?> </button>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #3FB7A4; color:white; font-weight:800;"> <?php echo $producttype; ?> </button>
<br><br>

<h1 style="font-weight:800;"> <?php echo $productname; ?> </h1>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #E50460; color:white; font-weight:800;"> <?php echo $category; ?> </button>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #3FB7A4; color:white; font-weight:800;"> <?php echo $subcategory; ?> </button>


<hr>

<h4 style="font-weight:800;"> Qty | <?php echo $quantity; ?> </h4>

<br>

<h2 style="font-weight: 800; ">   &#x20A6;<?php  echo  number_format($amount); ?> </h2>

<br>



<?php
if(empty($productsize)){
    ?>


<?php
}else{

    ?>
<button class="btn btn-sm" style="border-radius: 30px; background-color: #3FB7A4; color:white; font-weight:800;"> <?php echo $productsize; ?> </button>

<?php
}
?>


<?php
if(empty($color)){
    ?>


<?php
}else{

    ?>
<button class="btn btn-sm" style="border-radius: 30px; background-color: <?php echo $color; ?>; color:white; font-weight:800;"> <?php echo $color; ?> </button>

<?php
}
?>

<br>

 </div></div>

 <br>
 
<h4 style="font-weight:800; color:black;"> Description </h4>

<hr>

<h6 style="text-align:justify;">

<?php echo nl2br($description); ?>


</h6>



<?php 
$z++; 
 }}}

?>


<br><br>



        
        <h5 style="font-weight:bold;"> Product Reviews </h5>
        
        <hr>
        
        
    


   

    



    
    
    <?php
         
$review =  "SELECT * FROM reviews  WHERE `productid` = '$productid' ";  
  
  $rs_result = mysqli_query($dbc, $review); 
  if(mysqli_num_rows($rs_result) > 0){
$r = 1;
  
while($rows = mysqli_fetch_assoc($rs_result)){
$fullname = $rows['fullname'];
$comment = $rows['comment'];
$rating = $rows['rating'];
$date = $rows['date'];
    
    ?>
    
    
  <div class="row">
    <div class="col-md-12">
        <div class="card card-white post">
            <div class="post-heading">
                <div class="float-left image">
                    <img src="http://simpleicon.com/wp-content/uploads/user1.svg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="float-left meta">
                    <div class="title h5">
                        <a href="#"><b><?php echo $fullname ?> </b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time"> Posted on <?php echo $date; ?> </h6>
                    
                    <?php
                    if($rating == 1){
                        ?>
                        
                        <span class="fa fa-star checked"></span>
                        
                        <?php
                    }else if($rating == 2){
                        
                        
                        ?>
                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        
                        <?php
                    }else if($rating == 3){
                        
                        ?>
                        
                           <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        
                        
                        <?php
                    }else if($rating == 4){
                        
                        ?>
                        
                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        
                        
                        <?php
                    }else if($rating == 5){
                        ?>
                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        
                        
                        <?php
                    }else { echo "No Rating"; }
                    
                    ?>
                </div>
            </div> 
            <div class="post-description"> 
                <p> <?php echo nl2br($comment); ?> </p>




            </div>
        </div>
    </div>
    
</div>   
 
 
    
    <?php
    
    $r++; }}else {
        
        ?>
        
        <h5 style="color: grey;"> No Reviews.</h5>
        
        
        <?php
    }
    
    ?>
    
    
    
    
   
    
    

        
       
        <br><br><br>

    </div>

    

<div class="main" style="background: #E2E8F0;">

<div class="container">

<br><br>


        <h3 style="font-weight:800;"> Other Related Products </h3>
        
    <hr>
        

    <div class="row">
        
<?php
   
   $selectz =  "SELECT * FROM products  WHERE `category` = '$category' ";  
      
   $rs_result = mysqli_query($dbc, $selectz); 
   if(mysqli_num_rows($rs_result) > 0){
$dz = 1;
   
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
$productsize = $rows['productsize'];
$color = $rows['color'];
$state = $rows['state'];
$city = $rows['city'];
$sellername = $rows['sellername'];
  $brandname = $rows['brandname'];
  $delivery = $rows['delivery'];

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



<?php $dz++; }} ?>

                </div>
                </div>
                



                <br><br>
<br><br>



</div>

</div>
</div>



<?php include('footer.php'); ?>
    </body>
    </html>