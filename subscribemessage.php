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


<br>

<div class="container">

<?php


if(isset($_POST['subscribe'])){

    $email = $_POST['email'];
$status = "Subscribed";



               
$pic = mysqli_query($dbc, "SELECT * FROM subscribe WHERE email = '$email'  ");
$row = mysqli_fetch_assoc($pic);
           $countrows = mysqli_num_rows($pic);
           if($countrows == 1){
      ?>


<center>

<img src="https://www.freeiconspng.com/thumbs/error-icon/sign-red-error-icon-1.png" class="img-fluid">

           </center>

           <br>

<h1 style="text-align:center; color: red; font-weight:bold;"> Oops! Sorry this email already subscribed. </h1>
 
<p style="text-align:center; "> Stay updated with the latest newsletters from Orthodontic Dental. </p>


<?php

           }else{


    $insert = mysqli_query($dbc, "INSERT INTO `subscribe` VALUES (NULL, '$email', '$status', now()) ");

    if($insert){


        $to = $email; 
        $from = 'noreply@orthodonticdental.com'; 
        $fromName = 'Admin'; 
         
        $subject = "Orthodontic Dental Newsletter"; 
         
        $htmlContent = "
            <html> 
            <head> 
                <title>Welcome to Orthodontic Dental </title> 
            </head> 
            <body> 
        
         <center>   <img src='https://serving.photos.photobox.com/169288650f063c0bdfab1956696a42148f75357d98a074ab5d1625be224e05c4cdc8c982.jpg'  width='800'> </center>
         
         <div class='container'>
           
        <h1 style='font-size:40px;  text-align:center;'> Congratulations  </h1>
        <hr>
        
        
        
        <h1> Thank you for subscribing for our newsletters , We are happy to inform you that you will be receiving updates from us, continue shopping and exploring brands.
        </h1>
        
       
        
        <img src='https://serving.photos.photobox.com/21080987e97d5a114a19277013e95f81bb75682ad60f9c1a29437eede27d47ba149b7e5e.jpg' class='img-fluid' width='200'>
        
        <h4> Thank you, <br>
     Orthodontic Dental Management
        </h4>
        
        <p style='letter-spacing:1.5px;'> For more information, visit our website <a style='letter-spacing:1.5px; font-weight:bold;' href='https://www.orthodonticdental.ng'> Orthodontic Dental </a>   </p>
        
        </div>
        
            </body> 
            </html>"; 
         
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
         
        // Additional headers 
        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
        
         
        // Send email 
        if(mail($to, $subject, $htmlContent, $headers)){ 
          

        ?>


<center>

<img src="https://cdn.picpng.com/check/check-correct-mark-choice-yes-107733.png" class="img-fluid" width="320px">

        </center>

        <br>

        <h1 style="text-align:center; font-weight:bold; color:green; "> Great Job! Thank you for subcribing.</h1>
<p style="text-align:center;"> Newsletters will be sent across via email to keep you updated. </p>


<?php
        }else{ 
          echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Error!</strong> Email failed
          <button type='button'' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>  ";
        }
        
        
        
        
        
        
        }else{
        
        }
        }
    


}


?>

</div>





    <br>

<?php include('footer.php'); ?>
    </body>
    </html>