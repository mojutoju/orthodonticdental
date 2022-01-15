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
     
            
       
       
     
<form name="signup" action="signup.php" method="POST">




<h3 style="color:white; text-align:center;"> Create An Account <strong style="color:#E50460;"> With Us</strong></h3>
            <p style="color:white; text-align:center;"> Fill in necessary details </p>
            <hr style="color:white; background-color:white;">


<?php
if(isset($_POST['signup'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $cpassword = mysqli_real_escape_string($dbc, $_POST['cpassword']);
  $phoneno =$_POST['phoneno'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$status = $_POST['status'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

               
$pic = mysqli_query($dbc, "SELECT * FROM customers WHERE email = '$email'  ");
$row = mysqli_fetch_assoc($pic);
           $countrows = mysqli_num_rows($pic);
           if($countrows == 1){
      ?>



 
<script>
     
     swal({
           text: "Error",
   title: "User Exists! ",
 
   icon: "error",
   button: "Close",
 });

 </script>  

<?php

           }else{

           
           
           
if($pass != $cpass){
    
    ?>
    
    
    


 
<script>
     
     swal({
           text: "Error",
   title: "Password does not match. ",
 
   icon: "error",
   button: "Close",
 });

 </script>  

    <?php
}else{


$sql = mysqli_query($dbc, "INSERT INTO `customers` VALUES (NULL,'$fname', '$lname', '$email', '$password', '$cpassword', '$phoneno', '$state', '$city' , '$address' ,  '$status' , now())  ");
if($sql){
  ?>




 
<script>
     
     swal({
           text: "Success",
   title: "Congratulations, you are now a customer.",
 
   icon: "success",
   button: "Close",
 });

 </script>  



<?php


$to = $email; 
$from = 'noreply@orthodonticdental.com'; 
$fromName = 'Admin'; 
 
$subject = "Orthodontic Dental Registration"; 
 
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

<h4> Thank you for registering with us, We are happy to inform you that you are now a registered Customer on Orthodontic Dental , start shopping and exploring brands.
</h4>

<h5 style='font-size:20px;'> Kindly take note of the following details. </h5> 
<div class = 'card-body' style='flex: 1 1 auto;
padding: 1.25rem; box-shadow: rgba(0, 0, 0, 0.1) 20px 20px 20px;
background-color: white;'>

<h3> Firstname : $fname </h3> 
<h3> Lastname : $lname </h3>
<h3> Email Address : $email </h3> 
<h3> Password : $cpassword </h3> 
<h3> Phone number : $phoneno</h3>
<h3> State : $state </h3> 
<h3> City : $city  </h3>
<h3> Address : $address   </h3>


</div>

<img src='https://serving.photos.photobox.com/21080987e97d5a114a19277013e95f81bb75682ad60f9c1a29437eede27d47ba149b7e5e.jpg' class='img-fluid' width='200'>

<h4> Thank you, <br>
SeanSame Management
</h4>

<p style='letter-spacing:1.5px;'> For more information, visit our website <a style='letter-spacing:1.5px; font-weight:bold;' href='https://www.seansame.com'>  SeanSame</a>   </p>

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

}
}
}
}
?>



<div class="form-group">
  <input class="form-control" type="text" required name="fname" placeholder="Firstname"  />
</div>

<br>

<div class="form-group">
  <input class="form-control" type="text" required name="lname" placeholder="Lastname"  />
</div>

<br>

<div class="form-group">
  <input class="form-control" type="email" required name="email" placeholder="Email Address"  />
</div>

<br>

<div class="row">

<div class="col mb-3">
<div class="form-group">
  <input class="form-control" type="password" required name="password" placeholder="Enter Password"  id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
</div>
</div>


<div class="col mb-3">



<div class="form-group">
  <input class="form-control" type="password" required name="cpassword" placeholder="Confirm Password"  />
</div>



</div>

			

</div>


    
    
    
<div id="message">
  <h3 style="font-size:15px; color: white;">Password must contain the following:</h3>
  <p id="letter" class="invalid"  style="font-size:15px; color: white;" >A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid"  style="font-size:15px; color: white;">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid"  style="font-size:15px; color: white;">A <b>number</b></p>
  <p id="length" class="invalid"  style="font-size:15px; color: white;" >Minimum <b>8 characters</b></p>
</div>

<BR>


<div class="form-group">
  

<input type="text" class="form-control" required name="phoneno" placeholder="Phone number" required=""  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 

|| (95<event.keyCode && event.keyCode<106)

|| (event.keyCode==8) || (event.keyCode==9) 

|| (event.keyCode>34 && event.keyCode<40) 

|| (event.keyCode==46) )"   required>


</div>

<br>

<div class="row">
    
    
    <div class="col-6 mb-3">
        
       
<div class="form-group">

    

<select name="state" id="state"  onchange="toggleLGA(this);" required class="form-control"  >

              <option value="" selected="selected">- Select state of residence -</option>

          <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                  

            </select>


</div>
 
        
    </div>
    
    
    
    <div class="col-6 mb-3">
        
        
        
              <div class="form-group">
          
                <select 
                  name="city"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                    <option value=""> - Select City - </option>
                </select>
              </div>
    </div>
    
    
</div>

<br>

<div class="form-group">
    <label style="color: white;"> Address </label>
    <textarea class="form-control" name="address"  required> </textarea>
    
    </div>



<input type="hidden" class="form-control" value="enable" name="status"> 
<br>

<div class="form-group"><input class="btn btn  btn-block" value="Sign Up" name="signup" type="submit" style="color:white; background:#E50460;     width: 100%;">
</div>
<br>
<p style="text-align:center; font-size:13px; color: white;"> By signing up with us you agree to our <a href="terms&conditions.html" style="color: red;"> Terms & Conditions </a> </p>



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
    
    
    
    

    var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
    
                
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );}

  </script>
  
</body>

</html>







