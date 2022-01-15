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

<div class="hero-bg" style="background: url('img/blog.jpg');   background-position: center; min-height: 500px; height: 680px; background-repeat: no-repeat; background-size: cover;">


<div class="container-sm">


<br><br>
<br><br><br>
<br><br><br>
<br>


<h1 class="textwithout" style="font-weight:800; font-size:74px; color:white; text-align:center;"> 
OUR BLOG

    </h1>

    <h4 style="line-height:33px; color:white; text-align:center;"> 
Latest Blog
    </h4>

 


    </div>
    
</div>
    <div class="navbar top" style="padding: 20px; background: #3FB7A4; box-shadow: 0 2px 4px 0 rgba(0,0,0,.4); ">

<div class="container">

<div class="left" style="color:white;">

<a href="#" style="color:white; font-size:16px;"> 

 Home / </a>  
<a href="blog.php" style="color:white; font-size:16px;"> 

 Blog </a> 
  
    </div>

   

    </div>


    

    </div>

</div>


    <br><br>

<div class="container">






<div class="row">





        <?php
       
$select = mysqli_query($dbc,"SELECT * FROM `blogs` WHERE 1  ");
if(mysqli_num_rows($select) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($select)){
$title = $rows['title'];
$authorname = $rows['authorname'];
$id = $rows['blog_id'];
$file = $rows['file'];
$editor1 = $rows['editor1'];
$date = $rows['date'];
$description = $rows['description'];



?>
  
    
    


<div class="col-md-4 mb-3">

<div class="card">
        <img class="card-img" src="odadmin/blogs/<?php echo $file; ?>" alt="Vans"   style="  flex-shrink:0;
    -webkit-flex-shrink: 0;
    max-width:100%; height: 30vh;
               max-height:100%; object-fit:cover;">
     
 </div>


<div class="card" style="padding:20px;">
<h5 style="font-weight:800;"> <?php echo $title; ?> </h5>

<p style="font-style: italic; color:grey; font-size: 12px;"> Posted on <?php echo $date; ?> | <strong> Author : <?php echo $authorname; ?> </strong> </p>


 
<p>
 <?php
if (strlen($description) > 25) {
  $trimstring = substr($description, 0, 205). ' <a href="#" style="color:black;"> ...</a>';
  } else {
  $trimstring = $description;
  }
  echo $trimstring;
 ?>
</p>


<a href="viewblog.php?blog_id=<?php echo $id; ?>" class="btn btn-sm btn" style="background-color: #FF0068; color:white;"> Read More </a>

</div>
</div>


<?php $u++; }} ?>




</div>
</div>


</div>


</div>


    <br>

<?php include('footer.php'); ?>
    </body>
    </html>