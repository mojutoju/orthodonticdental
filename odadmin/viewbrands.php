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
             
                  <h3 class="font-weight-bold">View Brand </h3>
           <hr>



                  
             
           <div class="row">
    
    
    <?php
    if(isset($_GET['brandid'])){
        $brandid = $_GET['brandid'];
        
           
         
$select =  "SELECT * FROM brands  WHERE `brandid` = '$brandid'  ";  
      
      $rs_result = mysqli_query($dbc, $select); 
      if(mysqli_num_rows($rs_result) > 0){
  $z = 1;
      
 while($rows = mysqli_fetch_assoc($rs_result)){
 $file = $rows['file'];
$sellername = $rows['sellername'];
$brandname = $rows['brandname'];
$phoneno = $rows['phoneno'];
$instagram = $rows['instagram'];
$whatsapp = $rows['whatsapp'];
$facebook = $rows['facebook'];
$others = $rows['others'];
$state = $rows['state'];
$city = $rows['city'];
$address = $rows['address'];
$description = $rows['description'];
$status = $rows['description'];
$date = $rows['date'];
        $status = $rows['status'];
        $brandid = $rows['brandid'];
    
    
    ?>
    
    
    
    
    
    
 <div class="col-xl-3 mb-3">
     
     
         <img src="brands/<?php echo $file; ?>" class="img-fluid img-thumbnail" width="600">
           
           <br><br>
           
      <h5 class="card-text" style="letter-spacing:1.5px; font-size:16px;  padding:10px; font-weight:bold">   <?php echo $brandname; ?> </h5>
           
           <hr>
           
           <div style="background-color:white; padding:10px; font-weight:bold; letter-spacing:1.5px;"> Contact Information </div>
           <hr>
           
          
           
            <h8 class="card-text" style="letter-spacing:1.5px; font-size:14px;   padding:10px; font-weight:bold">  <i class="fa fa-phone"></i> <?php echo $phoneno; ?> </h8>   
            
            <hr>
            
            
                     
            <h8 class="card-text" style="letter-spacing:1.5px; font-size:14px;   padding:10px; font-weight:bold">  <a style="color:black;" href="https://www.instagram.com/<?php echo $instagram; ?>"> <i class="fa fa-instagram"></i> Instagram </a> </h8>   
            
                <hr>
            
            
                     
            <h8 class="card-text" style="letter-spacing:1.5px; font-size:14px;  padding:10px; font-weight:bold">  <a style="color:black;" href="<?php echo $facebook; ?>"> <i class="fa fa-facebook"></i> Facebook </a> </h8>   
            
            
              <hr>
            
            
             
            <h8 class="card-text" style="letter-spacing:1.5px; font-size:14px;   padding:10px; font-weight:bold">  <i class="fa fa-street-view"></i> <?php echo $state; ?> | <?php echo $city; ?> </h8>   
            
            <hr>
            
            
               
            <h8 class="card-text" style="letter-spacing:1.5px; font-size:14px;   padding:10px; font-weight:bold">  <i class="fa fa-user"></i> Status :
            
            
            <?php if ($status == "approve"){ ?>
        
        <a href="#" class="btn btn-success btn-sm"> Approved </a>
        
        <?php } else if ($status == "unapprove") { ?>
        
           <a href="#" class="btn btn-danger btn-sm"> Unapproved </a>
        
        
        <?php } else if ($status == "pending" ) { ?>
        
           <a href="#" class="btn btn-warning btn-sm"> Pending </a>
        
        <?php } else { } ?>
            
            
            
            
            
            
            </h8>   
            
          <hr>
           
     </div>
    
    
    
       
       <div class="col-xl-9 mb-2">
           
            <div class=" card-body" style="background-color:white;">  <h6 class="card-text" style="letter-spacing:1.5px; font-size:13px; font-weight:bold">  Address </h6>
            
                <hr>
                
                <?php echo $address; ?>
                
                  </div>
                
                <br>
                
                
                   <div class="card card-body" style="background-color:white;">  <h6 class="card-text" style="letter-spacing:1.5px; font-size:13px; font-weight:bold">  Description </h6>
            
                <hr>
                
                <?php echo $description; ?>
            
            
            </div>
           
       
           </div>
           
           
           <?php $z++; }}} ?>
           
           </div>
          
         
                 
                 



           

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
 
 
 
 
 
 
 
 