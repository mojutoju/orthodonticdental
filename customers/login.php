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
      <h3 style="color:white; text-align:center;"> Sign <strong style="color:#E50460;"> In </strong></h3>
            <p style="color:white; text-align:center;"> Login to access dashboard </p>
            <hr style="color:white; background-color:white;">
            
       
       
     


                    
                  <form name="login" method="POST" action="login.php">
        

        
        <div class="form-group">
            
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            
        </div>
        
        <br>
        
        <div class="form-group">
            
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            
        </div>
        
        <br>
        
        <div class="form-group">
                    <input type="submit" class="btn btn" style="color:white; background:#3FB7A4;     width: 100%;
    height: 48px;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.57;
    letter-spacing: -.11px;" value="Login" name="login"> 
    
    </div>
    
    &nbsp; &nbsp;
     
    </form>
    <p style="color:white; text-align:center;"> Forgot Password ? <a href="resetpassword.php" style="color:#3FB7A4; text-align:center;"> Click Here</a>  </p>
      
    <p style="color:white; text-align:center;"> Create An Account ? <a href="signup.php" style="color:#FF0067; text-align:center;"> Click Here</a>  </p>
      
 
    
    
                
      
 
    

        
        
    </div>
    
</div>

</div>



    
    <script>
    
    
         
      if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
 
</script>

    </body>
    </html>








