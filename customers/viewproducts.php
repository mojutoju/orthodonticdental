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



<div class="main-panel">
        <div class="content-wrapper">
      

        <div class="container">
            
             
                  <h3 class="font-weight-bold">View Product  </h3>
           
<hr>
              
       


                
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
    
   
   <div class="row">
       
       
       <div class="col-xl-6 mb-3">
           
           <img src="../odadmin/productimages/<?php echo $file; ?>" class="img-fluid img-thumbnail" width="600">
           
           
               
       </div>
       
      
       
     <div class="col-xl-6 mb-3">

<button class="btn btn-sm" style="border-radius: 30px; background-color: #E50460; color:white; font-weight:800;"> Brand | <?php echo $brandname; ?> </button>
<br><br>

<h1 style="font-weight:800;"> <?php echo $productname; ?> </h1>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #E50460; color:white; font-weight:800;"> <?php echo $category; ?> </button>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #3FB7A4; color:white; font-weight:800;"> <?php echo $subcategory; ?> </button>


<hr>

<h4 style="font-weight:800;"> Qty | <?php echo $quantity; ?> </h4>

<br>

<h2 style="font-weight: 800; ">   &#x20A6;<?php  echo  number_format($amount); ?> </h2>

<br>

<button class="btn btn-sm" style="border-radius: 30px; background-color: #3FB7A4; color:white; font-weight:800;"> <?php echo $producttype; ?> </button>


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

<br>

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
           <a class="btn btn btn" style=" background-color: #FF0068; width:100%; color:white;" href="addtocart.php?productid=<?php echo $productid; ?>&emailid=<?php echo $email; ?>"><span class="fa fa-cart-arrow-down"></span> Add to Cart </a>
            <?php
                    }
                }
                else{
            ?>
            <a class="btn btn-danger btn" style="width:100%;" href="removecart.php?productid=<?php echo $productid; ?>"><span class="fa fa-remove"></span> Remove Item </a>
            <?php
                }
            ?>
               

<br>


 </div>
       
      <br> <br> <br> 
               <h3 class="card-text" style="font-weight:bold;"> Product Details </h3>
    <hr>
    
    <p class="card-text" style="text-align:justify;"> <?php echo $description; ?>   </p>






    <br><br>

    
    <br><br>

    
    <br><br>
        
        <h3 style="font-weight:bold;"> Product Reviews </h3>
        
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
        
        
        
        
       
        
        
    
        
        
        
        
        <br><br>
        
        
            <?php
        if(isset($_POST['review'])){
            
            $fullname = $_POST['fullname'];
            $comment = mysqli_real_escape_string($dbc, $_POST['comment']);
            $rating = $_POST['rating'];
            $productid = $_POST['productid'];
            
            $insert = mysqli_query($dbc, "INSERT INTO `reviews` VALUES (NULL, '$fullname', '$comment', '$rating', '$productid', now()) ");
            
            if($insert){
                
    ?>


 
<script>
     
     swal({
           text: "Success",
   title: "Review Posted ",
 
   icon: "success",
   button: "Close",
 });

 </script>  
 




<?php
                
            }else{  }
        }
        
        ?>

        
    
    <br><br>

    
<br><br>
    
    
<br><br>
<br><br>
    
    
    <br><br>
        
        <br>
    
    

        
        <div class="card" style="padding:20px;">
        <h3 style="font-weight:bold;"> Post Review </h3>
      
        <hr>
        
    
       
    <form name="review" method="POST" action="viewproducts.php?productid=<?php echo $productid; ?>">
        
        
        <div class="form-group">
            
            <input type="hidden" class="form-control" name="fullname" value="<?php echo $lname; ?> <?php echo $fname; ?> " readonly>
        </div>
        
        
       
        
        <div class="form-group">
        <textarea cols="50" rows="10"  class="form-control" name="comment" required>Type in comment...</textarea>
        </div>
        
        
        
        
        <div class="form-group">
            <p style="font-weight:bold;"> Rate this Product </p>
            <hr>
            <label> 1 </label>
            <input type="radio"  name="rating" value="1"> 
            
               
            <label> 2 </label>
              <input type="radio" name="rating" value="2">
              
                 
            <label> 3 </label>
                <input type="radio"  name="rating" value="3">
                
                   
            <label> 4 </label>
                  <input type="radio"  name="rating" value="4">
                  
                     
            <label> 5 </label>
                    <input type="radio"  name="rating" value="5">
        </div>
        
        
         <div class="form-group">
            
            <input type="hidden" class="form-control" name="productid" value="<?php echo $productid; ?> " readonly>
        </div>
        
        
        
        
        <div class="form-group">
            <input type="submit" class="btn btn" name="review" value="Post" style="background-color: #3FB7A4; color:white;">
        </div>
    </form>
       
    
    
    <?php
     $z++; }}   
        
    } 
    
    ?>
    




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








