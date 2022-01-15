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
      
              <div class="row">
             
               
           

                </div>
       

   <div class="container">
              
      
      
      
      
           <?php
        if(isset($_GET['catid'])){
            $categoryid = $_GET['catid'];
            
            $delete = mysqli_query($dbc, "DELETE FROM `categorymaster` WHERE `catid` = '$categoryid' ");
            
            if($delete){
                
                
                ?>
                
                  <script>
                            swal({
  title: "Category has been Deleted",
    icon: "success",
    
});
  // Your application has indicated there's an error
    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "showcategories.php";

    }, 2000);
                            
                        </script>
    
                
                
                
                
                
                <?php
            }
        }
        
        ?>
        
        
        
        
        
        
           <?php
        if(isset($_GET['subid'])){
            $categoryid = $_GET['subid'];
            
            $delete = mysqli_query($dbc, "DELETE FROM `subcategory` WHERE `subid` = '$categoryid' ");
            if($delete){
                
                
                ?>
                
                  <script>
                            swal({
  title: "Subcategory has been Deleted",
    icon: "success",
    
});
  // Your application has indicated there's an error
    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "managecategory.php";

    }, 2000);
                            
                        </script>
    
                
                
                
                
                
                <?php
            }
        }
        
        ?>
        
                      
           <div class="card" style="padding:12px;">   
           
                              
<div class="card-header" style="background-color: white;">

<div class="float-left">
<h3 class="font-weight-bold"> <i class="fa fa-list"> </i> Manage Subcategories </h3>

</div>


<div class="float-right">

<div class="dropdown">
<a href="#" style="color:black;" class="dropdown-toggle"  data-toggle="dropdown"> <i class="fa fa-ellipsis-v" > </i>  </a>

<div class="dropdown-menu">
      <a class="dropdown-item" href="showsubcategories.php">Show All</a>
    </div>
    </div>

</div>

</div>
            
                
<div class="table-responsive  table-hover">
  <table class="table">
    <thead>
      <tr>
    
   
        <th scope="col">Category</th>
   
   
      <th scope="col"> Subcategory</th>

      
        <th scope="col">Edit</th>
        <th scope="col"> View </th>
        <th scope="col"> Delete</th>
       
    
    
      </tr>
    </thead>
    
    
    
<?php

$limit = 4;
  $or = mysqli_query($dbc,"SELECT * FROM `subcategory` WHERE 1 ORDER BY subcategoryname DESC LIMIT 0, $limit  ");
if(mysqli_num_rows($or) > 0){
    $ord = 1;
 while($rows = mysqli_fetch_assoc($or)){
$categoryname = $rows['categoryname'];
$subcategoryname = $rows['subcategoryname'];


$date = $rows['date'];
$cid = $rows['subid'];
?>

    
    
    
    
    
    
    
    
 
   <tbody  id="myTable">
     
      <tr>
    
        <td> <?php echo $categoryname; ?>  </td>
       
        <td> <?php echo $subcategoryname; ?> </td>
    
        
        <td>
   <a href="editsubcategory.php?subid=<?php echo $cid; ?>" class="btn btn-success btn-sm"> Edit </a>
        </td>
        <td>
            <a class="btn btn-primary btn-sm"  href="viewsubcategory.php?subid=<?php echo $cid; ?>"> View </a>
        </td>
             <td>
            <a onclick="return confirm('Are you sure you want to delete this subcategory ?\n. Click \'OK\' to continue or \'Cancel\' to go back.');" class="btn btn-danger btn-sm"  href="managecategory.php?subid=<?php echo $cid; ?>"> <i class="fa fa-trash"></i> </a>
        </td>
   
     <?php $ord++; }}else{ ?>
     <td> No</td>
     <td> Subcategory </td>
     <td> Found </td>
     <td> Yet</td>
     <td> Kindly </td>
     <td> Upload </td>
     <td> Info</td>
     <?php } ?>
       </tr>
    </tbody>
  </table>
</div>
      
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








