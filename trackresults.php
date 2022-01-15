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
<br><br><br><br>


<div class="container ">




<center>
    
 
    
    
    <h3 style="font-weight:800;"> Tracking Results </h3>
   
    <hr>
    </center>
    
    <div class="row">
        
        <div class="col-md-6 mb-2">
            
    <img src="img/dispatch.png" class="img-fluid">
    
            
        </div>
        
        
       <div class="col-md-6 mb-2">
           <h4 style="font-weight:800;"> <i class="fa fa-truck"></i> Track Orders </h4>
           <hr>
             <p> We help customers track their orders by assigning tracking number to every successful product purchase.</p>
          
          
             
             <p style="font-weight:bold;"> Tracking Details </p>
             <hr>
            
<?php
if(isset($_POST['tracking'])){
    
    $trackingid = $_POST['trackingno'];
    
    
    
    $track = mysqli_query($dbc, "SELECT * FROM `tracking` WHERE `trackingno` = '$trackingid' ");
     if (mysqli_num_rows($track)==0) {
                    echo "<div class='ibox-content' id='result'> <h2><b> No Results Found </b></h2>  </div>";
                }
                else{
                    $result = mysqli_num_rows($track);
                    echo "<div class='ibox-content' id='result'> <h2><b> $result Result(s) Found </b></h2>  </div> <hr>";
                
  
    $l = 1;
 while($rows = mysqli_fetch_assoc($track)){
$trackid = $rows['trackid'];
$trackingno = $rows['trackingno'];
$customer = $rows['customer'];
$email = $rows['email'];
$invoiceno = $rows['invoiceno'];
$productname = $rows['productname'];
$amount = $rows['amount'];
$phoneno = $rows['phoneno'];
$trackstatus = $rows['trackstatus'];
$description = $rows['description'];
$currentstate = $rows['currentstate'];
$city = $rows['city'];
$date = $rows['date'];
    
    
}

?>
        
   <p> <i class="fa fa-truck"></i> Tracking No : <?php echo $trackingid; ?> </p>  
       <hr>
         <p> <i class="fa fa-user-circle"></i> Customer : <?php echo $customer; ?> </p> 
       <hr>
         <p> <i class="fa fa-folder"></i> Invoice :  <a href="#"> <?php echo $invoiceno; ?> </a> </p> 
           <hr>
           <p> <i class="fa fa-shopping-bag"></i> Product Name : <?php echo $productname; ?>  </p>
           <hr>
           <p>  <i class="fa fa-money"></i> Amount : N<?php echo number_format($amount); ?> </p>
           <hr>
           <p> <i class="fa fa-truck"></i> Track Status : <strong> <?php echo $trackstatus; ?> </strong>  </p>
           <hr>
           <p> <i class="fa fa-sticky-note-o"></i> Description : <?php echo $description; ?> </p>
           <hr>
           <p> <i class="fa fa-street-view"></i> Location : <?php echo $currentstate; ?> |  <i class="fa fa-street-view"></i> City : <?php echo $city; ?>  </p>
           <hr>
          
           
       </div> 
       
       
   
       
       
        
        
<?php $l++; }}else{ ?>

<h2> No Tracking Record Yet. </h2>
<?php } ?>
        

    
   
</div>

</div>



</div>
<br><br><br>


<?php include('footer.php'); ?>
    </body>
    </html>
