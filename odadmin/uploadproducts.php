
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

<script src="../js/sweetalert.min.js"> </script>

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
              <div class="row">
             
                  <h3 class="font-weight-bold">Upload Products </h3>
           
<hr>
                </div>





                
   
<?php 
if(isset($_POST['products'])){
  $emailid = $_SESSION['login'];
  $sellername =  "Orthodontic Dental Admin";
  $productname = $_POST['productname'];
  $brandname = mysqli_real_escape_string($dbc,$_POST['brandname']);
  $category = $_POST['category'];
  $subcategory = $_POST['subcategory'];
  $amount = $_POST['amount'];
  $producttype = $_POST['producttype'];
  $productsize = $_POST['productsize'];
  $color = $_POST['color'];
  $quantity = $_POST['quantity'];
      $phoneno = $_POST['phoneno'];
      $state = $_POST['state'];
      $city = $_POST['city'];
  $description = $_POST['description'];
$status = $_POST['status'];
$delivery = $_POST['delivery'];



 
    $file = mysqli_real_escape_string($dbc,$_FILES['file']['name']);
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 9000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('jpg','png','gif', 'svg', 'jpeg');//allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking


   



   
 


         
   

if(!in_array($ext,$allowed) )
{

?>


<script>
                            swal({
  title: "Invalid Format ensure it is jpg, png.",
    icon: "error",
    
});
                            
                        </script>



<?php

   

}
else
{
echo "
 

   ";

  if($_FILES['file']['size'] <= $limit_size)
  {
 ?>

<script>
                            swal({
  title: "Invalid Size make sure it is lesser than 9mb",
    icon: "error",
    
});
                            
                        </script>


<?php



  }else{

  echo "
 

   ";




  }

}
    
    
    
     
  if($file){
      
      
if(preg_match("/([%\$#\*]+)/", $file))
{

    ?>

<script>
                            swal({
  title: "Image filename should NOT CONTAIN Special Characters like #%\/*$",
    icon: "error",
    
});
                            
                        </script>

 <?php
}
else{

      
    $location =  "productimages/$file";
    move_uploaded_file($tmp_name, $location);



   $select = mysqli_query($dbc,"SELECT * FROM `subcategory` WHERE `categoryname` = '$category' AND `subcategoryname` = '$subcategory' ");

 $rows = mysqli_fetch_assoc($select);
$categoryname = $rows['categoryname'];

$subcategoryname = $rows['subcategoryname'];

    
    if($category != $categoryname && $subcategory != $subcategoryname){
    
        ?>


<script>
                            swal({
  title: "Category and Subcategory does not match ",
    icon: "error",
    
});
                            
                        </script>

        


   <?php
    
}else{
    
   ?>

    <script>
    swal({
title: "Categories Matched, Product Upload Successfully",
icon: "success",

});
    
</script>



<?php

  $sql = mysqli_query($dbc, "INSERT INTO `products` VALUES (NULL,'$emailid', '$sellername', '$file', '$size', '$content', '$type', '$location', '$productname' , '$brandname' , '$category', '$subcategory' ,  '$amount' , '$producttype', '$productsize', '$color' , '$quantity', '$delivery' , '$phoneno' , '$state' , '$city' , '$description',  '$status' , now())  ");
  

}}
  
  
  }else {






if($sql){

    ?>




 <?php
}else{

    ?>



<script>
                            swal({
  title: "Error! Product Upload Failed",
    icon: "error",
    
});
                            
                        </script>





 <?php
 

}
}}



  


?>
   
       

               
          
    <form name="products" action="uploadproducts.php" method="post" enctype="multipart/form-data" >
        
        
        
        <div class="row">
            
            <div class="col-md-4 mb-3">
                
                <input type="hidden" class="form-control" style="font-size:13px;" name="sellername" value="<?php echo $fname; ?> <?php echo $lname; ?> " readonly>
                
     <label style="font-size:13px;"> Select Product Image</label>
 <br>
 <input type="file" class="form-control" name="file" id="upload_imgs" required="" accept=".png, .jpg, .jpeg" onchange="loadFile(event)" style="font-size:13px;">   
<img class="img-fluid img-thumbnail" id="output"/>
       
       </div>
       
       
       
       <div class="col-lg-4 mb-2">
           

           <input type="text" class="form-control" style="font-size:13px;" name="productname" placeholder = "Product Name e.g PlayStation 4 Console" required >
           
                <br>
                
    
               <select name="brandname"  class="form-control" style="font-size:13px;" required="" > 
                
                      <option value=""> -- Select Brand Name -- </option>      
                
<?php
$brandz = mysqli_query($dbc,"SELECT * FROM `brands` WHERE 1  ");
if(mysqli_num_rows($brandz) > 0){
    $r = 1;
 while($rows = mysqli_fetch_assoc($brandz)){
$brandname = $rows['brandname'];
?>

<option value="<?php echo $brandname; ?>"><?php echo $brandname; ?></option>

<?php $r++; }} ?>
                
                </select>
                
                <br>
           
                          
<select  class="form-control" name="category" style="font-size:13px;" required>
<option value=""> -- Select a Category -- </option>
   
   <?php
   
        $select = mysqli_query($dbc,"SELECT * FROM `categorymaster` WHERE 1");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){
$categoryname = $rows['categoryname'];
$categorypercent = $rows['categorypercent'];
$subcategoryname = $rows['subcategoryname'];
$subpercent = $rows['subpercent'];
$date = $rows['date'];
$categoryid = $rows['catid'];
 
   ?>
   
   <option value="<?php echo $categoryname; ?>"> <?php echo $categoryname; ?> </option>
   
   <?php $j++; }} ?>
         
</select>
              
             
              <br>
                     

<select name="subcategory" class="form-control" style="font-size:13px;" required>
    <option value="">-- Select a Subcategory -- </option>
    
     <?php
   
        $select = mysqli_query($dbc,"SELECT * FROM `subcategory` WHERE 1");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){
$categoryname = $rows['categoryname'];

$subcategoryname = $rows['subcategoryname'];
$subpercent = $rows['subpercent'];
$date = $rows['date'];
$subtype = $rows['subtype'];
$categoryid = $rows['categoryid'];
 
   ?>
   
   <option value="<?php echo $subcategoryname; ?>"> <?php echo $categoryname; ?> - <?php echo $subcategoryname; ?> </option>
   
   <?php $j++; }} ?>
         
    
    
</select>

<br>

                     
<input type="number" class="form-control" style="font-size:13px;" name="amount" placeholder="Amount e.g 14500" required>

<br>

           
       </div>
       
          <div class="col-lg-4 mb-2">
           
    
<select name="producttype" class="form-control" style="font-size:13px;" required>
  <option value="">-- Select Product Type -- </option>
  <option value="Used"> Used</option>
  <option value="Brand New"> Brand New </option>
</select>
           
           <br>
           
              <input type="number" name="productsize" class="form-control" style="font-size:13px;" placeholder="Product Size - (Optional Field) e.g 12 must be specific ">
              
             
              <br>
              
               
                       
<select  class="form-control" name="color" style="font-size:13px;" >
<option value="">-- Select Color (Optional) -- </option>
<option value="Black" style="background-color: Black;color: #FFFFFF;">Black</option>
<option value="Gray" style="background-color: Gray;">Gray</option>
<option value="DarkGray" style="background-color: DarkGray;">DarkGray</option>
<option value="LightGray" style="background-color: LightGrey;">LightGray</option>
<option value="White" style="background-color: White;">White</option>
<option value="Aquamarine" style="background-color: Aquamarine;">Aquamarine</option>
<option value="Blue" style="background-color: Blue;">Blue</option>
<option value="Navy" style="background-color: Navy;color: #FFFFFF;">Navy</option>
<option value="Purple" style="background-color: Purple;color: #FFFFFF;">Purple</option>
<option value="DeepPink" style="background-color: DeepPink;">DeepPink</option>
<option value="Violet" style="background-color: Violet;">Violet</option>
<option value="Pink" style="background-color: Pink;">Pink</option>
<option value="DarkGreen" style="background-color: DarkGreen;color: #FFFFFF;">DarkGreen</option>
<option value="Green" style="background-color: Green;color: #FFFFFF;">Green</option>
<option value="YellowGreen" style="background-color: YellowGreen;">YellowGreen</option>
<option value="Yellow" style="background-color: Yellow;">Yellow</option>
<option value="Orange" style="background-color: Orange;">Orange</option>
<option value="Red" style="background-color: Red;">Red</option>
<option value="Brown" style="background-color: Brown;">Brown</option>
<option value="BurlyWood" style="background-color: BurlyWood;">BurlyWood</option>
<option value="Beige" style="background-color: Beige;">Beige</option>
</select>

<br>


  <input type="number" name="quantity" class="form-control" style="font-size:13px;" placeholder="Quantity " required>
              

<br>

<select name="delivery" class="form-control" style="font-size:13px;" required>
<option value=""> - Pay on Delivery Option - </option>
<option value="Yes"> Yes </option>
<option value="No"> No </option>
</select>


       </div>
       
       
   
         <div class="col-lg-4 mb-2">
             
             
      <input type="text" class="form-control" name="phoneno" placeholder="Phone Number e.g +2348146369716" style="font-size:13px;"   onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" required>
           <br>
           
             <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control" required style="font-size:13px;"
                >
                  <option value="" selected="selected">- Select Business Location -</option>
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
              
             
              <br>
              
               
       <select name="city" id="lga" style="font-size:13px;"  class="form-control select-lga" required>
           
           <option value=""> -- Select City -- </option>
                </select>

<br>




       </div>
       
       
      <div class="col-lg-6 mb-2">
          
          

<textarea class="form-control" required="" placeholder="Give more details about the product..." name="description" rows="7" cols="15" style="font-size:13px;"></textarea>


<input type="hidden" name="status" value="approve">


          
          </div>
          
        
       
       </div>
       
         <input type="submit" class="btn btn" value="Upload Product" name="products" style="background-color: #3FB7A4; color:white; border-radius:25px;">
       

    </form>
    
     
     
           
           
           
           
           
           
           







</div>              
          








                     
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
    
    
   <script src="js/lga.min.js"></script>
    <script src="js/confirm.min.js"></script>
    
 
 
 <script>
     $("#menu-toggle").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
     });
     </script>
  
  
 <script>
 $(document).ready( function() {
         $(document).on('change', '.btn-file :file', function() {
         var input = $(this),
             label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
         input.trigger('fileselect', [label]);
         });
 
         $('.btn-file :file').on('fileselect', function(event, label) {
             
             var input = $(this).parents('.input-group').find(':text'),
                 log = label;
             
             if( input.length ) {
                 input.val(log);
             } else {
                 if( log ) alert(log);
             }
         
         });
         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 
                 reader.onload = function (e) {
                     $('#img-uploads').attr('src', e.target.result);
                 }
                 
                 reader.readAsDataURL(input.files[0]);
             }
         }
 
         $("#imgInps").change(function(){
             readURL(this);
         }); 	
     });
 
 
      function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
 
                 reader.onload = function (e) {
                     $('#blah')
                         .attr('src', e.target.result);
                 };
 
                 reader.readAsDataURL(input.files[0]);
             }
         }
 
 
 
 
 
 
 
 function myFunction() {
   const input = document.getElementById("myInput");
   const inputStr = input.value.toUpperCase();
   document.querySelectorAll('#myTable tr:not(.header)').forEach((tr) => {
     const anyMatch = [...tr.children]
       .some(td => td.textContent.toUpperCase().includes(inputStr));
     if (anyMatch) tr.style.removeProperty('display');
     else tr.style.display = 'none';
   });
 }
 
 function setTwoNumberDecimal(event) {
     this.value = parseFloat(this.value).toFixed(2);
 }
 
 
 $(document).ready( function() {
         $(document).on('change', '.btn-file :file', function() {
         var input = $(this),
             label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
         input.trigger('fileselect', [label]);
         });
 
         $('.btn-file :file').on('fileselect', function(event, label) {
             
             var input = $(this).parents('.input-group').find(':text'),
                 log = label;
             
             if( input.length ) {
                 input.val(log);
             } else {
                 if( log ) alert(log);
             }
         
         });
         function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();
                 
                 reader.onload = function (e) {
                     $('#img-upload').attr('src', e.target.result);
                 }
                 
                 reader.readAsDataURL(input.files[0]);
             }
         }
 
         $("#imgInp").change(function(){
             readURL(this);
         }); 	
     });
 
   var loadFile = function(event) {
     var output = document.getElementById('output');
     output.src = URL.createObjectURL(event.target.files[0]);
     output.onload = function() {
       URL.revokeObjectURL(output.src) // free memory
     }
   };
 
 
  
 jQuery(function ($) {
 
     $(".sidebar-dropdown > a").click(function() {
   $(".sidebar-submenu").slideUp(200);
   if (
     $(this)
       .parent()
       .hasClass("active")
   ) {
     $(".sidebar-dropdown").removeClass("active");
     $(this)
       .parent()
       .removeClass("active");
   } else {
     $(".sidebar-dropdown").removeClass("active");
     $(this)
       .next(".sidebar-submenu")
       .slideDown(200);
     $(this)
       .parent()
       .addClass("active");
   }
 });
 
 $("#close-sidebar").click(function() {
   $(".page-wrapper").removeClass("toggled");
 });
 $("#show-sidebar").click(function() {
   $(".page-wrapper").addClass("toggled");
 });
 
 
    
    
 });
 
 
 
 
    
     if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );
 }
 
 
   </script>
   
   <script type="text/javascript">
     // Animations initialization
     
     if (window.FileReader) {
     
       var reader = new FileReader(), rFilter = /^(image\/bmp|image\/cis-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x-cmu-raster|image\/x-cmx|image\/x-icon|image\/x-portable-anymap|image\/x-portable-bitmap|image\/x-portable-graymap|image\/x-portable-pixmap|image\/x-rgb|image\/x-xbitmap|image\/x-xpixmap|image\/x-xwindowdump)$/i; 
       
       reader.onload = function (oFREvent) { 
         preview = document.getElementById("uploadPreview")
         preview.src = oFREvent.target.result;  
         preview.style.display = "block";
       };  
   
       function doTest() {
         
         if (document.getElementById("myfile").files.length === 0) { return; }  
         var file = document.getElementById("myfile").files[0];  
         if (!rFilter.test(file.type)) { alert("You must select a valid image file!"); return; }  
         reader.readAsDataURL(file); 
       }
         
   } else {
     alert("FileReader object not found :( \nTry using Chrome, Firefox or WebKit");
   }
     
         $(document).ready(function() {
 
 $("#type").change(function() {
     var val = $(this).val();
     if (val == "Fashion Products") {
         $("#size").html(
         "<option value='Clothing'>Clothing</option> <option value='Footwears'>Footwears</option> <option value='Outfits'>Outfits</option> <option value='Traditional Attires'>Traditional Attires</option> <option value='Cooperate Wears'>Cooperate Wears</option>  <option value='Casual Wears'>Casual Wears</option> <option value='Jackets'>Jackets</option> <option value='Sweat Shirts and Pants'>Sweat Shirts and Pants</option><option value='Clothing Essentials'> Clothing Essentials</option><option value='Other Clothing Accessories'>Other Clothing Accessories</option>   ");
     } else if (val == "Beauty and Accessories") {
         $("#size").html("<option value='Beauty Makeup'>Beauty Makeup</option><option value='Accessories'>Accessories</option>  <option value='Hair and Hair Extensions'>Hair and Hair Extensions</option>");
 
     } else if (val == "Electronics and Technology") {
         $("#size").html("<option value='Television'>Television</option> <option value='Technology and Equipments'>Technology and Equipments </option>  <option value='Mobile Phones and Accessories'>Mobile Phones and Accessories</option> <option value='Computers and Accessories'>Computers and Accessories</option> <option value='Gaming'>Gaming</option> <option value='Home Appliances'>Home Appliances</option>");
 
     }
         else if (val == "Foods and Beverages") {
         $("#size").html("<option value='Fruits and Vegetable'>Fruits and Vegetable</option><option value='Local Delicacies'>Local Delicacies</option> <option value='Continental Dishes'>Continental Dishes</option> <option value='Grocery'>Grocery</option> <option value='Drinks'>Drinks</option>");
 }
 else if (val == "Healthcare Products") {
         $("#size").html("<option value='Perfumes and Fragrance'>Perfumes and Fragrance</option><option value='Skincare'>Skincare</option> <option value='Body and Personal Fitness'>Body and Personal Fitness</option> <option value='Personal Hygiene'>Personal Hygiene</option><option value='Medical Kits and Equipments'>Medical Kits and Equipments</option>");
 }
 
 else if (val == "Sports") {
    $("#size").html("<option value='Sports Accessories'> Sports Accessories</option><option value='Sports and Wears '>Sports and Wears</option> <option value='Extreme Sports'>Extreme Sports</option> <option value='Outdoor Sports'>Outdoor Sports</option><option value='Indoor Sports'>Indoor Sports</option>");
 }
 
 else if (val == "Others") {
         $("#size").html("<option value='Music and Studios'>Music and Studios</option><option value='Animals and Pets'>Animals and Pets</option> <option value='Toys and Games'>Toys and Games</option> <option value='Unclassified'>Unclassified</option><option value='Miscellaneous'> Miscellaneous</option> ");
 }
 
     
 });
 
 
 });
 
     
      $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("toggled");
     });
 
 function init() {
     $("img[data-type=editable]").each(function (i, e) {
         var _inputFile = $('<input/>')
             .attr('type', 'file')
             .attr('hidden', 'hidden')
             .attr('onchange', 'readImage()')
             .attr('data-image-placeholder', e.id);
 
         $(e.parentElement).append(_inputFile);
 
         $(e).on("click", _inputFile, triggerClick);
     });
 }
 
 function triggerClick(e) {
     e.data.click();
 }
 
 Element.prototype.readImage = function () {
     var _inputFile = this;
     if (_inputFile && _inputFile.files && _inputFile.files[0]) {
         var _fileReader = new FileReader();
         _fileReader.onload = function (e) {
             var _imagePlaceholder = _inputFile.attributes.getNamedItem("data-image-placeholder").value;
             var _img = $("#" + _imagePlaceholder);
             _img.attr("src", e.target.result);
         };
         _fileReader.readAsDataURL(_inputFile.files[0]);
     }
 };
 
 // 
 // IIFE - Immediately Invoked Function Expression
 // https://stackoverflow.com/questions/18307078/jquery-best-practises-in-case-of-document-ready
 (
 
 function (yourcode) {
     "use strict";
     // The global jQuery object is passed as a parameter
     yourcode(window.jQuery, window, document);
 }(
 
 function ($, window, document) {
     "use strict";
     // The $ is now locally scoped 
     $(function () {
         // The DOM is ready!
         init();
     });
 
     // The rest of your code goes here!
 }));
 
        
     function moreLess(initiallyVisibleCharacters) {
     var visibleCharacters = initiallyVisibleCharacters;
     var paragraph = $(".text")
     
 
     paragraph.each(function() {
         var text = $(this).text();
         var wholeText = text.slice(0, visibleCharacters) + "<span class='ellipsis'></span><a href='#' class='more'> ...</a>" + "<span style='display:none'>" + text.slice(visibleCharacters, text.length) + "<a href='#' class='less'> Less </a></span>"
         
         if (text.length < visibleCharacters) {
             return
         } else {
             $(this).html(wholeText)
         }
     });
     $(".more").click(function(e) {
         e.preventDefault();
         $(this).hide().prev().hide();
         $(this).next().show();
     });
     $(".less").click(function(e) {
         e.preventDefault();
         $(this).parent().hide().prev().show().prev().show();
     });
 };
 
 moreLess(220);
 
 
 
 
                 
 if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );}
   
   
 
 $(function() {
     $(document).on("change",".uploadFile", function()
     {
             var uploadFile = $(this);
         var files = !!this.files ? this.files : [];
         if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
         if (/^image/.test( files[0].type)){ // only image file
             var reader = new FileReader(); // instance of the FileReader
             reader.readAsDataURL(files[0]); // read the local file
 
             reader.onloadend = function(){ // set image data as background of div
                 //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
 uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
             }
         }
 
     });
 });
 
 
 
     var imgUpload = document.getElementById('upload_imgs')
   , imgPreview = document.getElementById('img_preview')
   , imgUploadForm = document.getElementById('img-upload-form')
   , totalFiles
   , previewTitle
   , previewTitleText
   , img;
 
 imgUpload.addEventListener('change', previewImgs, false);
 imgUploadForm.addEventListener('submit', function (e) {
   e.preventDefault();
   alert('Images Uploaded! (not really, but it would if this was on your website)');
 }, false);
 
 function previewImgs(event) {
   totalFiles = imgUpload.files.length;
   
   if(!!totalFiles) {
     imgPreview.classList.remove('quote-imgs-thumbs--hidden');
     previewTitle = document.createElement('p');
     previewTitle.style.fontWeight = 'bold';
     previewTitleText = document.createTextNode(totalFiles + 'Image Selected');
     previewTitle.appendChild(previewTitleText);
     imgPreview.appendChild(previewTitle);
   }
   
   for(var i = 0; i < totalFiles; i++) {
     img = document.createElement('img');
     img.src = URL.createObjectURL(event.target.files[i]);
     img.classList.add('img-preview-thumb');
     imgPreview.appendChild(img);
   }
 }
 
 function readFile(input) {
       $("#status").html('Processing...');
     counter = input.files.length;
         for(x = 0; x<counter; x++){
             if (input.files && input.files[x]) {
 
                 var reader = new FileReader();
 
                 reader.onload = function (e) {
             $("#photos").append('<div class="col-md-3 col-sm-3 col-xs-3"><img src="'+e.target.result+'" class="img-thumbnail img-fluid" width="200px"></div>');
                 };
 
                 reader.readAsDataURL(input.files[x]);
             }
     }
     if(counter == x){$("#status").html('');}
   }
 
 
 
 
   </script>
   
 </body>
 
 </html>
                
 
 
   </body>
   </html>
 
 
 
 
 
 
 
 
 