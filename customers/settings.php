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
   


   
<?php
$select = mysqli_query($dbc,"SELECT * FROM `customers` WHERE email = '".$_SESSION['login']."'");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){
    $fname = $rows['fname'];
    $lname = $rows['lname'];
    $email = $rows['email'];
    $state = $rows['state'];
    $phoneno = $rows['phoneno'];
    $city = $rows['city'];
    $address = $rows['address'];
    


?>
    

<?php include('navbar.php'); ?>





<div class="main-panel">
        <div class="content-wrapper">
      

        <div class="container">
              <div class="row">
             
                  <h3 class="font-weight-bold">Settings </h3>
           <hr>

                </div>


             
    
    
<h3> EDIT PROFILE </h3>

<hr>




  
  
  
   <?php
if(isset($_POST['update'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phoneno =$_POST['phoneno'];
 
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];

$update = mysqli_query($dbc, "UPDATE `customers` SET `fname` = '$fname' , `lname` = '$lname' , `phoneno` = '$phoneno',`state` = '$state', `city` = '$city', `address` = '$address' WHERE email  = '".$_SESSION['login']."'  ");
if($update){
  
 
 ?>
 
 
<script>
     
     swal({
           text: "Good Job!",
   title: "Profile Updated Successfully ",
 
   icon: "success",
   button: "Close",
 });

 </script>  
 
 
 
 <?php
 
 
}else {
?>
  
  
<script>
     
     swal({
           text: "Problem Detected.",
   title: "A field input is incorrect, contact the admin or refill with the proper information. ",
 
   icon: "error",
   button: "Close",
 });

 </script>  
 
  
<?php }} ?>








<?php 
if(isset($_POST['security'])){
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $cpassword = mysqli_real_escape_string($dbc,$_POST['cpassword']);
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
$email = $_SESSION['login'];

         
if($pass != $cpass){
    
 ?>
 
 
<script>
     
     swal({
           text: "Problem Detected.",
   title: "The Password does not match, try again. ",
 
   icon: "error",
   button: "Close",
 });

 </script>  
     
 
 
 
 <?php
    
}else{

  $update = mysqli_query($dbc, "UPDATE `customers` SET `password` = '$password' , `cpassword` = '$cpassword' WHERE email = '$email'; ");
  if($update){
  
  
  
  ?>
  
  
<script>
     
     swal({
           text: "Good Job!",
   title: "Password Updated, login with the new password when re-entering your dashboard. ",
 
   icon: "success",
   button: "Close",
 });

 </script>  
 
  
 
  
  
  
  <?php
  
  }else{

  }
}
}

?>














<form name="update" method="POST" action="settings.php">


<label style="font-size: 13px;"> First Name  </label>
<input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $fname; ?>" style="font-size: 13px;" >
<br>
<label style="font-size: 13px;"> Last Name  </label>
<input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $lname; ?>" style="font-size: 13px;"> 
<br>
<label style="font-size: 13px;"> E-mail Address </label>
<input type="email" class="form-control" placeholder="E-mail Address" name="email" value="<?php echo $email; ?>" style="font-size: 13px;">

<br>
<label style="font-size: 13px;"> Phone No  </label>
<input type="text" class="form-control" name="phoneno" placeholder="Phone number" required=""  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
         || (95<event.keyCode && event.keyCode<106)
         || (event.keyCode==8) || (event.keyCode==9) 
         || (event.keyCode>34 && event.keyCode<40) 
         || (event.keyCode==46) )" name="phoneno" value="<?php echo $phoneno; ?>" style="font-size: 13px;">



<br>

<label style="font-size: 13px;"> State of Residence </label>

<select name="state" id="state"  onchange="toggleLGA(this);" required class="form-control" style="font-size: 13px;" >
    
  <option value="<?php echo $state; ?>"> <?php echo $state; ?> </option>
   <option value="" >- Select state of residence -</option>
   <option value="Abuja FCT">Abuja FCT</option>
   <option value="Abia">Abia</option>
   <option value="Adamawa">Adamawa</option>
   <option value="Akwa Ibom">Akwa Ibom</option>
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
   <option value="Nassarawa">Nassarawa</option>
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
   <option value="Zamfara">Zamfara</option>
<option value="Outside Nigeria">Outside Nigeria</option>
 </select>
<br>


          <label style="font-size: 13px;"> City </label>
                <select style="font-size: 13px;"
                  name="city"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                    <option value="<?php echo $city; ?>"> <?php echo $city; ?> </option>
                        <option value=""> - Select City - </option>
                </select>
           

<br>

<label style="font-size: 13px;"> Address </label>
<input type="text" name="address" class="form-control" value="<?php echo $address; ?>" style="font-size:13px;" required>

<br>


<input type="submit" class="btn btn btn-md"  style="background-color: #FF7A01; color:white;" value="Update" name="update">
</form>

<br>


<hr>

<h3> SECURITY </h3>
<hr>

<form name="security" action="settings.php" method="POST">

<label> New Password </label>
  <input type="password" class="form-control" name="password" placeholder="Enter New Password"  style="font-size: 13px;" id="newpassword" required> 

  <br>
  
<span id='text'></span>

<br>


  <label> Confirm New Password</label>
  <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password"  style="font-size: 13px;" id="newpass" required> 

<br>

  <input type="submit" class="btn btn btn-md"  value="Update" name="security" style="background-color: #FF7A01; color:white;">
</form>







   

 </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<?php $j++; }} ?>

<script src="js/lga.min.js"></script>
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











