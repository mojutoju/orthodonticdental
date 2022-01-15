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
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.css" />
  

</head>


<body>

  <header>
    <style>

body{
    font-family: 'Helvetica';
    background: url('img/bg.png');
    background-size: cover;
    background-position: center;
    height: 100%;
    min-height: 100vh;
    background-repeat: no-repeat;
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
      
    </style>

<script src="js/sweetalert.min.js"> </script>

</header>


				
					
<?php
if(isset($_POST['login'])){
 
  $uname = $_POST['email'];
  
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
 $password = md5($password);

  $sql = mysqli_query($dbc, "SELECT * FROM `customers` WHERE `email` = '".$uname."' AND `password` = '".$password."'  ");
  $num = mysqli_fetch_array($sql);

  if($num>0) {
 
    $_SESSION['login'] = $uname;
   $_SESSION['id'] = $uname;
   

?>


 
<script>
     
     swal({
           text: "Success",
   title: "Login Successful ",
 
   icon: "success",
   button: "Close",
 });

 </script>  
 


<?php
echo " <script> window.location.href = 'dashboard.php'; </script>";
  }else{
	  ?>

	   
<script>
     
     swal({
           text: "Error",
   title: "Login Details Incorrect ",
 
   icon: "error",
   button: "Close",
 });

 </script>  


	<?php
  }


}
?>
					

    
<div class="main-container">

<div class="main">
    
    <div class="container">
    
   
    <br>
     
            
       
<?php
if(isset($_POST['reset'])){
 
  $email = $_POST['email'];
  


  $sql = mysqli_query($dbc, "SELECT * FROM `customers` WHERE email = '".$email."'  ");
  

 while($rows = mysqli_fetch_assoc($sql)){
$fname = $rows['fname'];
$lname = $rows['lname'];
$cpassword = $rows['cpassword'];


  if($sql){
    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Congratulations!</strong> Valid E-mail Address
    <button type='button'' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>  ";
  


  $to = $email; 
  $from = 'noreply@orthodonticdental.com'; 
  $fromName = 'Admin'; 
   
  $subject = "Orthodontic Dental Security"; 
   
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
   
   <b> <h3 style='font-size:25px;'> Hello $fname, </h3> </b> 
   
   <h4> Thank you for contacting us, here is the password to your account : $cpassword 
   </h4>
   
   <p> We advise you quickly login to your dashboard and change your password if necessary.  </p>
   <br>
 
  
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
    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Email Sent!</strong>Successfully
      <button type='button'' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>  ";
  }else{ 
    echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error!</strong> Email failed
    <button type='button'' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>  ";
  }
  
  }else{
    echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error!</strong> Invalid E-mail
    <button type='button'' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>  ";
  }

} }
?>







       
     
<form name="reset" action="resetpassword.php" method="POST">




<h3 style="color:white; text-align:center;"> Recover <strong style="color:#E50460;"> Password</strong></h3>
            <p style="color:white; text-align:center;"> Fill in the registered email address to recover password. </p>
            <hr style="color:white; background-color:white;">


<div class="form-group">

<input type="email" name="email" class="form-control" placeholder="E-mail Address" required>
</div>

<br>

<div class="form-group"><input class="btn btn  btn-block" value="Recover Password" name="reset" type="submit" style="color:white; background:#E50460;     width: 100%;">
</div>
<br>



<p style="text-align:center; font-size:13px; color: white;"> Login to your Account, <a href="login.php" style="color: red;"> Click Here </a> </p>


</form>


</div>


</div>

   <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>
        <script src="js/lga.min.js"></script>
 
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization

                
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );}

  </script>
  
</body>

</html>







